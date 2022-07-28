<?php

namespace App\View\Components\Tables;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\View\Component;

class Table extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public array $headers,
        public $data
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tables.table')
            ->with('data', $this->data);
    }
}
