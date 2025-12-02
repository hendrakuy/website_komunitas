<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class TopProductsChart extends ChartWidget
{
    protected ?string $heading = 'Top 5 Produk Batik Terlaris';
    protected static ?int $sort = 9;
    protected int | string | array $columnSpan = 'full';

    protected function getData(): array
    {
        $topProducts = Order::select('product_name', DB::raw('SUM(quantity) as total_qty'))
            ->whereNotNull('product_name')
            ->groupBy('product_name')
            ->orderByDesc('total_qty')
            ->limit(5)
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Total Terjual',
                    'data' => $topProducts->pluck('total_qty')->toArray(),
                    'backgroundColor' => [
                        'rgba(59, 130, 246, 0.8)',
                        'rgba(251, 146, 60, 0.8)',
                        'rgba(34, 197, 94, 0.8)',
                        'rgba(168, 85, 247, 0.8)',
                        'rgba(234, 179, 8, 0.8)',
                    ],
                ],
            ],
            'labels' => $topProducts->pluck('product_name')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar'; // ← Tetap 'bar'
    }

    protected function getOptions(): array
    {
        return [
            'indexAxis' => 'y', // ← MAGIC: Bikin horizontal!
            'plugins' => [
                'legend' => [
                    'display' => false,
                ],
            ],
            'scales' => [
                'x' => [
                    'beginAtZero' => true,
                    'ticks' => [
                        'stepSize' => 1,
                    ],
                ],
            ],
        ];
    }
}