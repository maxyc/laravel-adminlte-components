<?php

declare(strict_types=1);

namespace Maxyc\AdminLTEComponents\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SmallBox extends Component
{
    public function __construct(
        public string $title,
        public string $text,
        public string $bg = 'info',
        public string $icon = 'fas fa-star',
        public ?string $id = null,
        public string $url = '#',
        public ?string $urlText = null,
        public bool $loading = false
    ) {
    }

    public function urlTextLine(): string
    {
        return ($this->urlText == null) ? 'More Info' : $this->urlText;
    }

    public function render(): View
    {
        return view('adminlte-components::small-box');
    }
}
