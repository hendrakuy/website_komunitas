<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Order;
use Carbon\Carbon;

class OrderStatsOverview extends BaseWidget
{
    protected static ?int $sort = 5;
    protected int | string | array $columnSpan = 'full';

    protected function getStats(): array
    {
        // Data bulan ini
        $thisMonth = Carbon::now()->month;
        $lastMonth = Carbon::now()->subMonth()->month;
        
        $totalOrdersThisMonth = Order::whereMonth('order_date', $thisMonth)->count();
        $totalOrdersLastMonth = Order::whereMonth('order_date', $lastMonth)->count();
        $orderGrowth = $totalOrdersLastMonth > 0 
            ? round((($totalOrdersThisMonth - $totalOrdersLastMonth) / $totalOrdersLastMonth) * 100, 1) 
            : 0;

        // Revenue bulan ini
        $revenueThisMonth = Order::whereMonth('order_date', $thisMonth)
            ->where('status', '!=', 'cancelled')
            ->sum('total_amount');
        $revenueLastMonth = Order::whereMonth('order_date', $lastMonth)
            ->where('status', '!=', 'cancelled')
            ->sum('total_amount');
        $revenueGrowth = $revenueLastMonth > 0 
            ? round((($revenueThisMonth - $revenueLastMonth) / $revenueLastMonth) * 100, 1) 
            : 0;

        // Komisi bulan ini
        $commissionThisMonth = Order::whereMonth('order_date', $thisMonth)
            ->where('status', '!=', 'cancelled')
            ->sum('commission');

        // Pending orders
        $pendingOrders = Order::where('status', 'pending')->count();
        
        // Completed orders
        $completedOrders = Order::where('status', 'completed')->count();

        // Average order value
        $avgOrderValue = Order::where('status', '!=', 'cancelled')
            ->avg('total_amount');

        return [
            // Total Orders
            Stat::make('Total Order Bulan Ini', $totalOrdersThisMonth)
                ->description($orderGrowth >= 0 ? "+{$orderGrowth}% dari bulan lalu" : "{$orderGrowth}% dari bulan lalu")
                ->descriptionIcon($orderGrowth >= 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down')
                ->chart($this->getOrderChartData())
                ->color($orderGrowth >= 0 ? 'success' : 'danger')
                ->icon('heroicon-o-shopping-bag'),

            // Revenue
            Stat::make('Revenue Bulan Ini', 'Rp ' . number_format($revenueThisMonth, 0, ',', '.'))
                ->description($revenueGrowth >= 0 ? "+{$revenueGrowth}% dari bulan lalu" : "{$revenueGrowth}% dari bulan lalu")
                ->descriptionIcon($revenueGrowth >= 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down')
                ->chart($this->getRevenueChartData())
                ->color($revenueGrowth >= 0 ? 'success' : 'danger')
                ->icon('heroicon-o-banknotes'),

            // Commission
            Stat::make('Total Komisi Bulan Ini', 'Rp ' . number_format($commissionThisMonth, 0, ',', '.'))
                ->description('Komisi dari penjualan')
                ->descriptionIcon('heroicon-m-currency-dollar')
                ->color('warning')
                ->icon('heroicon-o-wallet'),

            // Pending Orders
            Stat::make('Order Pending', $pendingOrders)
                ->description('Menunggu konfirmasi')
                ->descriptionIcon('heroicon-m-clock')
                ->color('warning')
                ->icon('heroicon-o-clock'),

            // Completed Orders
            Stat::make('Order Selesai', $completedOrders)
                ->description('Total order completed')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success')
                ->icon('heroicon-o-check-circle'),

            // Average Order Value
            Stat::make('Rata-rata Nilai Order', 'Rp ' . number_format($avgOrderValue, 0, ',', '.'))
                ->description('Average order value')
                ->descriptionIcon('heroicon-m-chart-bar')
                ->color('info')
                ->icon('heroicon-o-chart-bar'),
        ];
    }

    private function getOrderChartData(): array
    {
        $data = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i)->toDateString();
            $count = Order::whereDate('order_date', $date)->count();
            $data[] = $count;
        }
        return $data;
    }

    private function getRevenueChartData(): array
    {
        $data = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i)->toDateString();
            $revenue = Order::whereDate('order_date', $date)
                ->where('status', '!=', 'cancelled')
                ->sum('total_amount');
            $data[] = $revenue;
        }
        return $data;
    }

    protected ?string $pollingInterval = '30s';
}
