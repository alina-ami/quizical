<?php

namespace App\Providers;

use App\View\Components\Admin\Navigation\NestedMenuItem;
use App\View\Components\Admin\Navigation\SeparatorItem;
use App\View\Components\Admin\Navigation\SimpleMenuItem;
use App\View\Components\Forms\Error;
use App\View\Components\Forms\Form;
use App\View\Components\Forms\Inputs\Checkbox;
use App\View\Components\Forms\Inputs\Email;
use App\View\Components\Forms\Inputs\FlatPickr;
use App\View\Components\Forms\Inputs\Genders;
use App\View\Components\Forms\Inputs\Input;
use App\View\Components\Forms\Inputs\Password;
use App\View\Components\Forms\Inputs\Tags;
use App\View\Components\Forms\Inputs\Textarea;
use App\View\Components\Forms\Label;
use App\View\Components\Tables\RowActions;
use App\View\Components\Tables\Table;
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
        Blade::component('form', Form::class);
        Blade::component('label', Label::class);
        Blade::component('error', Error::class);

        Blade::component('input', Input::class);
        Blade::component('email', Email::class);
        Blade::component('password', Password::class);
        Blade::component('checkbox', Checkbox::class);
        Blade::component('textarea', Textarea::class);
        Blade::component('flat-pickr', FlatPickr::class);
        Blade::component('genders', Genders::class);
        Blade::component('tags', Tags::class);


        Blade::component('table', Table::class);
        Blade::component('row-actions', RowActions::class);


        Blade::component('nav-nested-menu-item', NestedMenuItem::class);
        Blade::component('nav-simple-menu-item', SimpleMenuItem::class);
        Blade::component('nav-separator-item', SeparatorItem::class);
    }
}
