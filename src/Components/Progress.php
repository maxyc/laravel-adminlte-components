<?php

declare(strict_types=1);

namespace Maxyc\AdminLTEComponents\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Progress extends Component
{
    public function __construct(
        public string $value,
        public ?string $size = null,
        public string $bg = 'info',
        public bool $stripped = false,
        public bool $vertical = false
    ) {
    }

    public function barsize(): ?string
    {
        return !is_null($this->size) ? 'progress-' . $this->size : null;
    }

    public function render(): View
    {
        return view('adminlte-components::progress');
    }
}