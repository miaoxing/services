<?php

namespace Miaoxing\Services\Service;

use Miaoxing\Config\ConfigTrait;
use Miaoxing\Plugin\BaseService;
use Miaoxing\Services\Service\Asset;
use Miaoxing\Services\Service\Str;
use Miaoxing\Plugin\Service\View;
use Wei\Block;

/**
 * @property-read Block $block
 * @property-read View $view
 * @property-read Str $str
 * @property-read Asset $asset
 * @method string asset(string $file)
 * @property bool $showTitleInHeader
 * @property array $theme
 */
class Page extends BaseService
{
    use ConfigTrait;

    protected $configs = [
        'showTitleInHeader' => [
            'default' => false,
        ],
        'theme' => [
            'default' => [],
        ],
    ];

    /**
     * @var string
     */
    protected $title;

    /**
     * @var bool
     */
    protected $header = true;

    /**
     * @var string
     */
    protected $headerTitle = '';

    /**
     * @var bool
     */
    protected $footer = true;

    /**
     * @var array
     */
    protected $jsFiles = [];

    /**
     * @var array
     */
    protected $cssFiles = [];

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return bool
     */
    public function hasHeader()
    {
        return $this->header;
    }

    /**
     * @return bool
     */
    public function hasFooter()
    {
        return $this->footer;
    }

    /**
     * @return $this
     */
    public function showHeader()
    {
        $this->header = true;
        return $this;
    }

    /**
     * @return $this
     */
    public function hideHeader()
    {
        $this->header = false;
        return $this;
    }

    /**
     * @return $this
     */
    public function showFooter()
    {
        $this->footer = true;
        return $this;
    }

    /**
     * @return $this
     */
    public function hideFooter()
    {
        $this->footer = false;
        return $this;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setHeaderTitle($title)
    {
        $this->headerTitle = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getHeaderTitle()
    {
        return $this->headerTitle ?: ($this->showTitleInHeader ? $this->title : '');
    }

    public function addJs($src)
    {
        if (is_array($src)) {
            foreach ($src as $item) {
                $this->addJs($item);
            }
        } else {
            $this->jsFiles[] = $src;
        }
        return $this;
    }

    public function prependJs($src)
    {
        array_unshift($this->jsFiles, $src);
        return $this;
    }

    public function addCss($href)
    {
        $this->cssFiles[] = $href;
        return $this;
    }

    public function prependCss($href)
    {
        array_unshift($this->cssFiles, $href);
        return $this;
    }

    public function addAsset($asset)
    {
        $asset = $this->asset($asset);
        $ext = pathinfo($asset, PATHINFO_EXTENSION);
        switch ($ext) {
            case 'css':
                return $this->addCss($asset);

            case 'js':
            default:
                return $this->addJs($asset);
        }
    }

    public function renderHead()
    {
        echo $this->renderCss();
        $this->event->trigger('style');
        echo $this->block->get('css');
    }

    public function renderFooter()
    {
        echo $this->renderJs();
        $this->event->trigger('script');
        echo $this->block->get('js');
        $this->event->trigger('bodyEnd');
    }

    public function renderCss()
    {
        $html = '';
        foreach ($this->cssFiles as $file) {
            $html .= ' <link rel="stylesheet" href="' . $file . '" />' . "\n";
        }
        return $html;
    }

    public function renderJs()
    {
        $html = '';
        foreach ($this->jsFiles as $file) {
            $html .= '<script src="' . $file . '"></script>' . "\n";
        }
        return $html;
    }

    public function addPluginAssets($plugin = 'app')
    {
        $this->asset->addRevFile('public/dist/' . $plugin . '-assets-hash.json');
        return $this->prependCss($this->asset($plugin . '.css'))
            ->prependJs($this->asset($plugin . '-manifest.js'))
            ->prependJs($this->asset($plugin . '.js'));
    }
}
