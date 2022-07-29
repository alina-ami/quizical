<?php

namespace App\View\Components\Forms\Inputs;

use Illuminate\View\Component;
use Illuminate\Support\Str;


class Tags extends Component
{
    public string $name;
    public string $safeName;
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

        $this->safeName = Str::replace('[', '', Str::replace(']', '', $name));
        $this->values = old($this->safeName, $values ?? []);

        $this->options = $options;
        $this->label = $label;

        $this->options = array_map(function ($item) {
            $item['selected'] = $this->values && in_array($item['value'], $this->values);

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
