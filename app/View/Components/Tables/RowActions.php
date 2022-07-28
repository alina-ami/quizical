<?php

namespace App\View\Components\Tables;

use Illuminate\View\Component;

class RowActions extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public $model,
        public string $baseRoute,
        public bool $hasShow = true,
        public bool $hasEdit = true,
        public bool $hasDelete = true
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tables.row-actions');
    }
}
