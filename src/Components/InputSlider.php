<?php

declare(strict_types=1);

namespace Maxyc\AdminLTEComponents\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputSlider extends Component
{
    public function __construct(
        public string $id,
        public string $name,
        public string $label = 'Input Label',
        public ?string $value = null,
        public ?string $topclass = null,
        public ?string $inputclass = null,
        public bool $disabled = false,
        public bool $required = false,
        public int $min = 0,
        public int $max = 100,
        public int $step = 1,
        public bool $vertical = false,
        public bool $tick = false,
        public ?array $ticks = null,
        public ?array $tickLabels = null,
        public string $color = 'blue'
    ) {
    }

    public function render(): View
    {
        return view('adminlte-components::input-slider');
    }
}