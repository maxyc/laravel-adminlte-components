<?php

declare(strict_types=1);

namespace Maxyc\AdminLTEComponents\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputFile extends Component
{
    public function __construct(
        public string $name,
        public ?string $id = null,
        public string $label = 'Input Label',
        public ?string $placeholder = null,
        public ?string $topclass = null,
        public ?string $inputclass = null,
        public bool $disabled = false,
        public bool $required = false,
        public bool $multiple = false
    ) {
    }

    public function render(): View
    {
        return view('adminlte-components::input-file');
    }
}