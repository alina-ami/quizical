<?php

namespace App\View\Components\Forms\Input;

use Illuminate\View\Component;

class Genders extends Component
{
    public string $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $type = 'radio',
        public string $name,
        public ?string $label = null
    ) {
        $this->id = $id ?? $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.input.genders');
    }
}
