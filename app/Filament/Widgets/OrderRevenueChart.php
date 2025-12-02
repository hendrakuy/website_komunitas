<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

/**
 * ORDER REVENUE LINE CHART
 * Menampilkan trend revenue dari order 30 hari terakhir
 */
class OrderRevenueChart extends ChartWidget
{
    protected ?string $heading = 'Revenue Order (30 Hari Terakhir)';
    protected static ?int $sort = 6;
    protected int | string | array $columnSpan = 'full';

    protected function getData(): array
    {
        $data = $this->getRevenueData();
        
        return [
            'datasets' => [
                [
                    'label' => 'Total Revenue',
                    'data' => $data['revenue'],
                    'borderColor' => 'rgb(34, 197, 94)',
                    'backgroundColor' => 'rgba(34, 197, 94, 0.1)',
                    'fill' => true,
                    'tension' => 0.4,
                ],
                [
                    'label' => 'Total Komisi',
                    'data' => $data['commission'],
                    'borderColor' => 'rgb(251, 146, 60)',
                    'backgroundColor' => 'rgba(251, 146, 60, 0.1)',
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

    private function getRevenueData(): array
    {
        $labels = [];
        $revenue = [];
        $commission = [];

        for ($i = 29; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i);
            $labels[] = $date->format('d M');
            
            $dailyOrders = Order::whereDate('order_date', $date->toDateString())
                ->where('status', '!=', 'cancelled')
                ->get();
            
            $revenue[] = $dailyOrders->sum('total_amount');
            $commission[] = $dailyOrders->sum('commission');
        }

        return [
            'labels' => $labels,
            'revenue' => $revenue,
            'commission' => $commission,
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
                        'callback' => "function(value) { return 'Rp ' + value.toLocaleString('id-ID'); }",
                    ],
                ],
            ],
        ];
    }
}
