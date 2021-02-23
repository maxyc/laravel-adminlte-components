<?php

declare(strict_types=1);

namespace Maxyc\AdminLTEComponents\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Callout extends Component
{
    public function __construct(
        public ?string $title = null,
        public string $type = 'info'
    ) {
    }

    public function render(): View
    {
        return view('adminlte-components::callout');
    }
}