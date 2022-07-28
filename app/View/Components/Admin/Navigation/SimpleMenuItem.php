<?php

namespace App\View\Components\Admin\Navigation;

use Illuminate\View\Component;

class SimpleMenuItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $url = '',
        public string $icon = '',
        public string $label = '',
        public bool $nested = false
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.navigation.simple-menu-item');
    }
}
