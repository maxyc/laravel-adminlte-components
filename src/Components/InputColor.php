<?php

declare(strict_types=1);

namespace Maxyc\AdminLTEComponents\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputColor extends Component
{
    public function __construct(
        public string $id,
        public string $name,
        public string $label = 'Input Label',
        public ?string $placeholder = null,
        public ?string $topclass = null,
        public ?string $inputclass = null,
        public ?string $value = null,
        public bool $disabled = false,
        public bool $required = false
    ) {
    }

    public function render(): View
    {
        return view('adminlte-components::input-color');
    }
}