<?php

namespace App\Filament\Pages;

use App\Models\Umkm;
use App\Models\Batik;
use App\Models\Event;
use App\Models\Artikel;
use BackedEnum;
use Carbon\Unit;
use Filament\Pages\Page;
use Filament\Widgets;
use Filament\Widgets\StatsOverviewWidget\Stat;
use UnitEnum;
use App\Filament\Widgets\DashboardOverview;
// use App\Filament\Widgets\UmkmRegistrationChart;
use App\Filament\Widgets\ContentOverviewChart;
use App\Filament\Widgets\OrderStatsOverview;
use App\Filament\Widgets\OrderRevenueChart;
use App\Filament\Widgets\TopProductsChart;

class AdminDashboard extends Page
{
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-home';
    protected string $view = 'filament.pages.admin-dashboard';
    // protected static string|UnitEnum|null $navigationGroup = 'Admin Panel';
    protected static ?string $slug = 'admin-dashboard';
    protected static ?string $title = 'Dashboard';

    public function getHeaderWidgets(): array
    {
        return [
            DashboardOverview::class,
            OrderStatsOverview::class,
            // UmkmRegistrationChart::class,
            ContentOverviewChart::class,
            OrderRevenueChart::class,
            TopProductsChart::class,
        ];
    }

    public static function getStats(): array
    {
        return [
            Stat::make('Total UMKM', Umkm::count())
                ->description('Jumlah data UMKM terdaftar')
                ->icon('heroicon-o-building-storefront')
                ->color('success'),

            Stat::make('Total Batik', Batik::count())
                ->description('Jumlah motif batik')
                ->icon('heroicon-o-swatch')
                ->color('info'),

            Stat::make('Total Event', Event::count())
                ->description('Jumlah event terdaftar')
                ->icon('heroicon-o-calendar')
                ->color('warning'),

            // Stat::make('Total Artikel', Artikel::count())
            //     ->description('Jumlah artikel yang dipublikasikan')
            //     ->icon('heroicon-o-newspaper')
            //     ->color('primary'),
        ];
    }
}
