<?php

declare(strict_types=1);

namespace Maxyc\AdminLTEComponents\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{

    public function __construct(
        public string $name,
        public string $label = 'Input Label',
        public ?string $id = null,
        public ?string $placeholder = null,
        public ?string $topclass = null,
        public ?string $inputclass = null,
        public bool $disabled = false,
        public bool $required = false,
        public int $rows = 10
    ) {
    }

    public function render(): View
    {
        return view('adminlte-components::textarea');
    }
}