<?php

namespace App\View\Components\Forms\Inputs;

use Illuminate\View\Component;

class Tags extends Component
{
    public string $name;
    public string $id;
    public array $values;
    public array $options;
    public string $label;

    public function __construct(
        string $name,
        string $id = null,
        ?array $values = [],
        array $options = [],
        ?string $label = null,
    ) {
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->values = old($name, $values ?? []);
        $this->options = $options;
        $this->label = $label;


        $this->options = array_map(function ($item) use ($values) {
            $item['selected'] = in_array($item['value'], $values);

            return $item;
        }, $this->options);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.inputs.tags');
    }
}
