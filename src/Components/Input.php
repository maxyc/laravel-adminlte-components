<?php

declare(strict_types=1);

namespace Maxyc\AdminLTEComponents\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public function __construct(
        public string $name,
        public string $label = 'Input Label',
        public ?string $value = null,
        public string $type = 'text',
        public ?string $id = null,
        public ?string $placeholder = null,
        public ?string $topClass = null,
        public ?string $inputClass = null,
        public bool $disabled = false,
        public bool $required = false,
        public ?int $step = null,
        public ?int $max = null,
        public ?int $maxlength = 255,
        public ?int $pattern = null
    ) {
    }

    public function render(): View
    {
        return view('adminlte-components::input');
    }
}