<?php

declare(strict_types=1);

namespace Maxyc\AdminLTEComponents\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Card extends Component
{
    public function __construct(
        public string $title,
        public string $bg = 'info',
        public bool $collapsed = false,
        public bool $removable = false,
        public bool $maximizable = false,
        public bool $disabled = false,
        public bool $outline = false,
        public bool $full = false
    ) {
    }

    public function render(): View
    {
        return view('adminlte-components::card');
    }
}