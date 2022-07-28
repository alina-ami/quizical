<?php

namespace App\Providers;

use App\View\Components\Admin\Navigation\NestedMenuItem;
use App\View\Components\Admin\Navigation\SeparatorItem;
use App\View\Components\Admin\Navigation\SimpleMenuItem;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class CustomComponentsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('nav-nested-menu-item', NestedMenuItem::class);
        Blade::component('nav-simple-menu-item', SimpleMenuItem::class);
        Blade::component('nav-separator-item', SeparatorItem::class);
    }
}
