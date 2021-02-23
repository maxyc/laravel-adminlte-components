<?php

declare(strict_types=1);

namespace Maxyc\AdminLTEComponents\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select2 extends Component
{
    public function __construct(
        public string $id,
        public string $name,
        public string $label = 'Input Label',
        public ?string $topclass = null,
        public ?string $inputclass = null,
        public bool $disabled = false,
        public bool $required = false,
        public bool $multiple = false
    ) {
    }

    public function render(): View
    {
        return view('adminlte-components::select2');
    }
}