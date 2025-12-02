<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Umkm;
use Carbon\Carbon;

class UmkmRegistrationChart extends ChartWidget
{
    // protected static ?string $heading = 'Registrasi UMKM (30 Hari Terakhir)';
    protected ?string $heading = 'Umkm Registration Chart';
    protected static ?int $sort = 2;
    protected int | string | array $columnSpan = 'full';

    protected function getData(): array
    {
        $data = $this->getUmkmRegistrationData();
        
        return [
            'datasets' => [
                [
                    'label' => 'UMKM Terdaftar',
                    'data' => $data['counts'],
                    'borderColor' => 'rgb(59, 130, 246)',
                    'backgroundColor' => 'rgba(59, 130, 246, 0.1)',
                    'fill' => true,
                    'tension' => 0.4,
                ],
            ],
            'labels' => $data['labels'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    private function getUmkmRegistrationData(): array
    {
        $labels = [];
        $counts = [];

        for ($i = 29; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i);
            $labels[] = $date->format('d M');
            $counts[] = Umkm::whereDate('created_at', $date->toDateString())->count();
        }

        return [
            'labels' => $labels,
            'counts' => $counts,
        ];
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
                        'stepSize' => 1,
                    ],
                ],
            ],
        ];
    }
}
