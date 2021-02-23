<?php

declare(strict_types=1);

namespace Maxyc\AdminLTEComponents\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public function __construct(
        public string $title,
        public string $type = 'info',
        public bool $dismissable = false
    ) {
    }

    public function icon(): string
    {
        return match ($this->type) {
            'info' => 'info',
            'warning' => 'exclamation-triangle',
            'success' => 'check',
            'danger' => 'ban',
            default => 'exclamation',
        };
    }

    public function render(): View
    {
        return view('adminlte-components::alert');
    }
}