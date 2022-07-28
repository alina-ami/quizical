<?php

declare(strict_types=1);

namespace App\View\Components\Forms\Inputs;

use App\View\Components\BladeComponent;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /** @var string */
    public $name;

    /** @var string */
    public $id;

    /** @var string */
    public $type;

    /** @var string */
    public $value;

    /** @var string */
    public $label;

    public function __construct(string $name, string $id = null, string $type = 'text', ?string $value = '', ?string $label = null)
    {
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->type = $type;
        $this->value = old($name, $value ?? '');
        $this->label = $label;
    }

    public function render(): View
    {
        return view('components.forms.inputs.input');
    }
}
