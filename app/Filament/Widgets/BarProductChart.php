<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class BarProductChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';
    protected static ?int $sort = 2;

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Products',
                    'data' => [65, 59, 80, 81, 56, 55, 40],
                    // 'backgroundColor' => '#1640D6',
                    // 'borderColor' => '#1640D6',
                    'fill' => 'start',
                ]
            ],
            // 'labels' => ProductsStatusEnum::cases()
            'labels' => 'labels',
            'backgroundColor' => 'rgba(255, 99, 132, 0.2)',
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
