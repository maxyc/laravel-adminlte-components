<?php

declare(strict_types=1);

namespace Maxyc\AdminLTEComponents\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 * Class InfoBox
 * @package Maxyc\AdminLTEComponents\Components
 *
 * title    Title of the info box    true    string
 * text    Data text    true    string
 * bg    Background Color of the icon. This follows bootstrap colors: success, info, primary... etc    false    string
 * icon    The fontawesome icon class. Eg. fas fa-star, fas fa-user-plus    false    string
 * grad    Use gradient color? true/false    false    boolean
 * full    Use full INFO BOX? true/false    false    boolean
 * progress    Show Progress bar?    false    int
 * comment    Show comment?    false    string
 * id    Dynamic Binding?    false    string
 */
class InfoBox extends Component
{
    public function __construct(
        public string $title,
        public string $text,
        public string $bg = 'info',
        public string $icon = 'fas fa-star',
        public ?string $id = null,
        public bool $full = false,
        public bool $grad = false,
        public bool $progress = false,
        public bool $comment = false
    ) {
    }

    public function background(): ?string
    {
        return $this->full ? ($this->grad ? 'bg-gradient-' : 'bg-') . $this->bg : null;
    }

    public function foreground(): ?string
    {
        return !$this->full ? ($this->grad ? 'bg-gradient-' : 'bg-') . $this->bg : null;
    }

    public function render(): View
    {
        return view('adminlte-components::info-box');
    }
}
