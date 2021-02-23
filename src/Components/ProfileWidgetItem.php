<?php

declare(strict_types=1);

namespace Maxyc\AdminLTEComponents\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProfileWidgetItem extends Component
{
    public function __construct(
        public string $title,
        public string $text,
        public int $col = 4,
    ) {
    }

    public function render(): View
    {
        return view('adminlte-components::profile-widget-item');
    }
}