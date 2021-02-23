<?php

declare(strict_types=1);

namespace Maxyc\AdminLTEComponents\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextEditor extends Component
{
    private array $defaultFonts = [
        'Arial',
        'Arial Black',
        'Comic Sans MS',
        'Courier New',
        'Impact',
        'Montserrat',
        'Open Sans',
        'Ubuntu',
        'Rajdhani'
    ];

    public function __construct(
        public string $id,
        public string $name,
        public string $label = 'Input Label',
        public ?string $placeholder = null,
        public ?string $topclass = null,
        public ?string $inputclass = null,
        public bool $disabled = false,
        public bool $required = false,
        public int $height = 500,
        public ?array $fonts = null
    ) {
    }

    public function fontarray(): string
    {
        return json_encode($this->fonts == null ? $this->defaultFonts : $this->fonts);
    }

    public function render(): View
    {
        return view('adminlte-components::text-editor');
    }
}