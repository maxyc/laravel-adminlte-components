<?php

declare(strict_types=1);

namespace Maxyc\AdminLTEComponents\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Option extends Component
{
    public function __construct(
        public string $value,
        public string $content,
        public bool $icon = false,
        public bool $selected = false,
        public bool $disabled = false
    ) {
    }

    public function render(): View
    {
        return view('adminlte-components::option');
    }
}