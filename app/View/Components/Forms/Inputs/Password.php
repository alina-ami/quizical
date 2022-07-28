<?php

declare(strict_types=1);

namespace App\View\Components\Forms\Inputs;

use Illuminate\Contracts\View\View;

class Password extends Input
{
    public function __construct(string $name = 'password', string $id = null, ?string $label = null)
    {
        parent::__construct($name, $id, 'password', $label);
    }

    public function render(): View
    {
        return view('components.forms.inputs.password');
    }
}
