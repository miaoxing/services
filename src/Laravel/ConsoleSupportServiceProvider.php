<?php

namespace Miaoxing\Services\Laravel;

use Illuminate\Foundation\Providers\ArtisanServiceProvider;
use Illuminate\Foundation\Providers\ComposerServiceProvider;

class ConsoleSupportServiceProvider extends \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider
{
    protected $providers = [
        ArtisanServiceProvider::class,
        //MigrationServiceProvider::class, 已有自定义的 migrate 命令，不加载 laravel 的命令
        ComposerServiceProvider::class,
    ];
}
