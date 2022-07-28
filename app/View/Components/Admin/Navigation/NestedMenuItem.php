<?php

namespace App\View\Components\Admin\Navigation;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class NestedMenuItem extends Component
{

    public string $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $label = '',
        public int $level = 1
    ) {
        $this->id = Str::slug($label);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.navigation.nested-menu-item');
    }
}
