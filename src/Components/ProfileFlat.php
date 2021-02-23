<?php

declare(strict_types=1);

namespace Maxyc\AdminLTEComponents\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProfileFlat extends Component
{
    public function __construct(
        public string $img,
        public string $name,
        public string $desc,
        public string $bg = 'info'
    ) {
    }

    public function background(): string
    {
        return 'bg-' . $this->bg;
    }

    public function render(): View
    {
        return view('adminlte-components::profile-flat');
    }
}