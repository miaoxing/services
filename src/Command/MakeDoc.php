<?php

namespace Miaoxing\Services\Command;

use Miaoxing\Plugin\Command\BaseCommand;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Method;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PsrPrinter;
use ReflectionClass;
use ReflectionMethod;
use Symfony\Component\Console\Input\InputArgument;

class MakeDoc extends BaseCommand
{
    protected function configure()
    {
        $this->setDescription('Generate doc for specified plugin')
            ->addArgument('dir', InputArgument::REQUIRED, 'The dir of the plugin');
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $dir = $this->argument('dir');
        $services = wei()->classMap->generate([$dir . '/src'], '/Service/*.php', 'Service');

        $file = new PhpFile();
        $printer = new PsrPrinter;
        $content = '';

        foreach ($services as $name => $serviceClass) {
            $refClass = new ReflectionClass($serviceClass);

            $file->addNamespace($refClass->getNamespaceName());

            $class = new ClassType($refClass->getShortName());
            $class->setInterface();

            $staticClass = clone $class;

            $methods = [];
            $staticMethods = [];
            foreach ($refClass->getMethods(ReflectionMethod::IS_PROTECTED) as $refMethod) {
                if ($this->isApi($refMethod)) {
                    $method = Method::from([$serviceClass, $refMethod->getName()])
                        ->setBody(null)
                        ->setPublic();

                    $methods[] = $method;
                    $staticMethods[] = (clone $method)->setStatic();
                }
            }
            $class->setMethods($methods);
            $staticClass->setMethods($staticMethods);

            if ($methods) {
                $content .= $printer->printClass($class);
            }
            if ($staticMethods) {
                $content .= "\nif (0) {\n" . $this->intent(rtrim($printer->printClass($staticClass))) . "\n}\n";
            }
        }

        if (!$content) {
            $this->info('API method not found!');
            return;
        }

        $content = $printer->printFile($file) . "\n" . $content;

        $this->createDir($dir . '/docs');
        file_put_contents($dir . '/docs/type.php', $content);

        $this->info('doc created successfully!');
    }

    protected function intent($content, $space = '    ')
    {
        $array = [];
        foreach (explode("\n", $content) as $line) {
            $array[] = $space . $line;
        }
        return implode("\n", $array);
    }

    protected function isApi(ReflectionMethod $method)
    {
        return strpos($method->getDocComment(), '* @api');
    }

    protected function createDir($dir)
    {
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
            chmod($dir, 0777);
        }
    }
}