<?php

declare(strict_types=1);

namespace Maxyc\AdminLTEComponents\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Datatable extends Component
{
    public function __construct(
        public string $id,
        public array $heads,
        public bool $beautify = true,
        public bool $bordered = true,
        public bool $hoverable = true,
        public bool $condensed = false,
        public bool $footer = false,
        public bool $buttons = false
    ) {
    }

    public function border(): ?string
    {
        return ($this->bordered) ? 'table-bordered' : null;
    }

    public function hover(): ?string
    {
        return ($this->hoverable) ? 'table-hover' : null;
    }

    public function condense(): ?string
    {
        return ($this->condensed) ? 'table-condensed' : null;
    }

    public function render(): View
    {
        return view('adminlte-components::datatable');
    }
}