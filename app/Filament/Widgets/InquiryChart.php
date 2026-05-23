<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class InquiryChart extends ChartWidget
{
    protected ?string $heading = 'Inquiry Chart';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
