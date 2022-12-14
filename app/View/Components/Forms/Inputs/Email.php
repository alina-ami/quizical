<?php

declare(strict_types=1);

namespace App\View\Components\Forms\Inputs;

use Illuminate\Contracts\View\View;

class Email extends Input
{
    public function __construct(string $name = 'email', string $id = null, ?string $value = '', ?string $label = null)
    {
        parent::__construct($name, $id, 'email', $value, $label);
    }

    public function render(): View
    {
        return view('components.forms.inputs.email');
    }
}
