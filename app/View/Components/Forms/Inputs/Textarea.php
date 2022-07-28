<?php

declare(strict_types=1);

namespace App\View\Components\Forms\Inputs;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    /** @var string */
    public $name;

    /** @var string */
    public $id;

    /** @var int */
    public $rows;

    /** @var string */
    public $label;

    public function __construct(
        string $name,
        string $id = null,
        $rows = 3,
        string $label = ''
    ) {
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->rows = $rows;
        $this->label = $label;
    }

    public function render(): View
    {
        return view('components.forms.inputs.textarea');
    }
}
