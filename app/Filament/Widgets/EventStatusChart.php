<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Event;
use Carbon\Carbon;

class EventStatusChart extends ChartWidget
{
    protected ?string $heading = 'Status Event';
    protected static ?int $sort = 4;

    protected function getData(): array
    {
        $upcoming = Event::where('start_at', '>', Carbon::now())->count();
        $ongoing = Event::where('start_at', '<=', Carbon::now())
                        ->where('end_at', '>=', Carbon::now())
                        ->count();
        $past = Event::where('end_at', '<', Carbon::now())->count();

        return [
            'datasets' => [
                [
                    'label' => 'Event Status',
                    'data' => [$upcoming, $ongoing, $past],
                    'backgroundColor' => [
                        'rgba(34, 197, 94, 0.8)',
                        'rgba(251, 146, 60, 0.8)',
                        'rgba(148, 163, 184, 0.8)',
                    ],
                    'borderColor' => [
                        'rgb(34, 197, 94)',
                        'rgb(251, 146, 60)',
                        'rgb(148, 163, 184)',
                    ],
                    'borderWidth' => 2,
                ],
            ],
            'labels' => ['Mendatang', 'Berlangsung', 'Selesai'],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'display' => true,
                    'position' => 'bottom',
                ],
            ],
        ];
    }
}
