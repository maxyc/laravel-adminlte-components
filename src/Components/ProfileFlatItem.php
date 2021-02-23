<?php

declare(strict_types=1);

namespace Maxyc\AdminLTEComponents\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProfileFlatItem extends Component
{

    public function __construct(
        public string $title,
        public string $text,
        public string $badge = 'info',
        public string $url = '#'
    ) {
    }

    public function render(): View
    {
        return view('adminlte-components::profile-flat-item');
    }
}