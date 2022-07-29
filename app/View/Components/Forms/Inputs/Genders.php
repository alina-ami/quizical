<?php

namespace App\View\Components\Forms\Inputs;

use Illuminate\View\Component;

class Genders extends Component
{
    public string $id;


    public array $genderValues = [
        'male',
        'female',
        'non-binary',
        'transgender',
        'intersex',
        'unspecified',
    ];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $type = 'radio',
        public string $name,
        public $value = '',
        public ?string $label = null,
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
        return view('components.forms.inputs.genders');
    }

    public function isSelected($value)
    {
        if (is_string($this->value)) {
            return $this->value == $value ? 'checked' : '';
        }

        return in_array($value, $this->value) ? 'checked' : '';
    }
}
