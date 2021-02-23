<?php

declare(strict_types=1);

namespace Maxyc\AdminLTEComponents\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Modal extends Component
{
    public function __construct(
        public string $id,
        public string $title,
        public ?string $size = null,
        public bool $centered = true,
        private int $zIndex = 1
    ) {
    }

    public function modalSize(): ?string
    {
        return !is_null($this->size) ? 'modal-' . $this->size : null;
    }

    public function zIndex(): int
    {
        return $this->zIndex * 1050;
    }

    public function render(): View
    {
        return view('adminlte-components::modal');
    }
}