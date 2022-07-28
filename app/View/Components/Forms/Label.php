<?php

declare(strict_types=1);

namespace App\View\Components\Forms;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Label extends Component
{
    /** @var string */
    public $for;

    public function __construct(string $for)
    {
        $this->for = $for;
    }

    public function render(): View
    {
        return view('components.forms.label');
    }
}
