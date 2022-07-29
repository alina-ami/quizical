<?php

declare(strict_types=1);

namespace App\View\Components\Forms\Inputs;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    public string $id;
    public string $name;
    public string $value;
    public string $label;
    public int $rows;

    public function __construct(
        string $name,
        string $id = null,
        $rows = 3,
        string $label = '',
        string $value = ''
    ) {
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->rows = $rows;
        $this->label = $label;
        $this->value = $value;
    }

    public function render(): View
    {
        return view('components.forms.inputs.textarea');
    }
}
