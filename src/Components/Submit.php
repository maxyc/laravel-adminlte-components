<?php

declare(strict_types=1);

namespace Maxyc\AdminLTEComponents\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Submit extends Component
{
    public function __construct(
        public string $type = 'primary',
        public string $label = 'Submit',
        public string $icon = 'fas fa-save',
        public string $topclass = 'text-center',
        public ?string $inputclass = null
    ) {
    }

    public function render(): View
    {
        return view('adminlte-components::submit');
    }
}