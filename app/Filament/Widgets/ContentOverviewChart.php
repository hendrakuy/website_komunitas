<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Batik;
use App\Models\Event;
use App\Models\Wisata;
use App\Models\InstagramPost;
use App\Models\Award;

class ContentOverviewChart extends ChartWidget
{
    protected ?string $heading = 'Overview Konten Website';
    protected static ?int $sort = 3;
    protected int | string | array $columnSpan = 'full';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Total Konten',
                    'data' => [
                        Batik::count(),
                        Event::count(),
                        Wisata::count(),
                        InstagramPost::count(),
                        Award::count(),
                    ],
                    'backgroundColor' => [
                        'rgba(59, 130, 246, 0.8)',
                        'rgba(251, 146, 60, 0.8)',
                        'rgba(34, 197, 94, 0.8)',
                        'rgba(168, 85, 247, 0.8)',
                        'rgba(234, 179, 8, 0.8)',
                    ],
                    'borderColor' => [
                        'rgb(59, 130, 246)',
                        'rgb(251, 146, 60)',
                        'rgb(34, 197, 94)',
                        'rgb(168, 85, 247)',
                        'rgb(234, 179, 8)',
                    ],
                    'borderWidth' => 2,
                ],
            ],
            'labels' => ['Motif Batik', 'Event', 'Wisata', 'Instagram', 'Penghargaan'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'display' => true,
                ],
            ],
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'ticks' => [
                        'stepSize' => 5,
                    ],
                ],
            ],
        ];
    }
}
