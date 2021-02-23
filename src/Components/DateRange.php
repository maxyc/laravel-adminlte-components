<?php

declare(strict_types=1);

namespace Maxyc\AdminLTEComponents\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

/**
 * id    Input ID    null    string
 * title    Input Title    Filter Range    string
 * icon    Icon    far fa-calendar-alt    string
 * topclass    class along with 'form-group'    null    string
 * inputclass    class along with 'filter button'    null    string
 * init    The initial position of range, (0-5) *    2    integer
 * callback    The JS callback function to run on change filter    null    string (js)
 */
class DateRange extends Component
{
    public function __construct(
        public string $id,
        public string $title = 'Filter Range',
        public string $icon = 'far fa-calendar-alt',
        public int $init = 2,
        public ?string $callback = null,
        public ?string $inputClass = null,
        public ?string $topClass = null,
    ) {
    }

    public function initiator(): string
    {
        return match ($this->init) {
            0 => "startDate: moment(), endDate: moment()",
            1 => "startDate: moment().subtract(1, 'days'), endDate: moment().subtract(1, 'days')",
            2 => "startDate: moment().subtract(6, 'days'), endDate: moment()",
            3 => "startDate: moment().subtract(29, 'days'), endDate: moment()",
            4 => "startDate: moment().startOf('month'), endDate: moment().endOf('month')",
            5 => "startDate: moment().subtract(1, 'month').startOf('month'), endDate: moment().subtract(1, 'month').endOf('month')",
        };
    }

    public function render(): View
    {
        return view('adminlte-components::date-range');
    }
}