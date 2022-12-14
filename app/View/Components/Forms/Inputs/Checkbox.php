<?php

declare(strict_types=1);

namespace App\View\Components\Forms\Inputs;

use Illuminate\Contracts\View\View;

class Checkbox extends Input
{
    /** @var bool */
    public $checked;

    public function __construct(string $name, string $id = null, bool $checked = false, ?string $value = '', ?string $label = null)
    {
        parent::__construct($name, $id, 'checkbox', $value, $label);

        $this->checked = (bool) old($name, $checked);
    }

    public function render(): View
    {
        return view('components.forms.inputs.checkbox');
    }
}
