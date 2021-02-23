<?php

declare(strict_types=1);

namespace Maxyc\AdminLTEComponents;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AdminLTEServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadComponents();
    }

    private function loadComponents(): void
    {
        // FORM COMPONENTS
        Blade::component('adminlte-input', Components\Input::class);
        Blade::component('adminlte-input-file', Components\InputFile::class);
        Blade::component('adminlte-input-color', Components\InputColor::class);
        Blade::component('adminlte-input-date', Components\InputDate::class);
        Blade::component('adminlte-textarea', Components\Textarea::class);
        Blade::component('adminlte-select', Components\Select::class);
        Blade::component('adminlte-select2', Components\Select2::class);
        Blade::component('adminlte-select-icon', Components\SelectIcon::class);
        Blade::component('adminlte-option', Components\Option::class);
        Blade::component('adminlte-input-switch', Components\InputSwitch::class);
        Blade::component('adminlte-input-tag', Components\InputTag::class);
        Blade::component('adminlte-submit', Components\Submit::class);
        Blade::component('adminlte-text-editor', Components\TextEditor::class);
        Blade::component('adminlte-date-range', Components\DateRange::class);
        Blade::component('adminlte-input-slider', Components\InputSlider::class);

        // WIDGETS
        Blade::component('adminlte-card', Components\Card::class);
        Blade::component('adminlte-info-box', Components\InfoBox::class);
        Blade::component('adminlte-small-box', Components\SmallBox::class);
        Blade::component('adminlte-profile-flat', Components\ProfileFlat::class);
        Blade::component('adminlte-profile-flat-item', Components\ProfileFlatItem::class);
        Blade::component('adminlte-profile-widget', Components\ProfileWidget::class);
        Blade::component('adminlte-profile-widget-item', Components\ProfileWidgetItem::class);
        Blade::component('adminlte-alert', Components\Alert::class);
        Blade::component('adminlte-callout', Components\Callout::class);
        Blade::component('adminlte-progress', Components\Progress::class);
        Blade::component('adminlte-modal', Components\Modal::class);
        Blade::component('adminlte-datatable', Components\Datatable::class);
    }

    public function register(): void
    {
        $this->publishers();
        $this->loadViewsFrom(__DIR__ . '/resources/components', 'adminlte-components');
    }

    private function publishers(): void
    {
        $this->publishes(
            [
                __DIR__ . '/resources/components' => base_path('resources/views/vendor/adminlte-components'),
            ],
            'maxyc-adminlte-components'
        );

        $this->publishes(
            [
                __DIR__ . '/assets' => public_path('vendor/adminlte-plugins'),
            ],
            'maxyc-adminlte-plugins'
        );
    }
}