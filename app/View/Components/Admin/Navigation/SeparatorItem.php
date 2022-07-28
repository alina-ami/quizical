<?php

namespace App\View\Components\Admin\Navigation;

use Illuminate\View\Component;

class SeparatorItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $label)
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.navigation.separator-item');
    }
}
