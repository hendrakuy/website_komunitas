<?php

namespace App\Filament\Widgets;

use App\Models\Umkm;
use App\Models\Batik;
use App\Models\Event;
use App\Models\Wisata;
use App\Models\Award;
use App\Models\InstagramPost;
use App\Models\ContactMessage;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardOverview extends BaseWidget
{
    protected static ?int $sort = 1;
    protected int | string | array $columnSpan = 'full';

    protected function getStats(): array
    {
        // Hitung pertumbuhan bulan ini
        $umkmThisMonth = Umkm::whereMonth('created_at', Carbon::now()->month)->count();
        $umkmLastMonth = Umkm::whereMonth('created_at', Carbon::now()->subMonth()->month)->count();
        $umkmGrowth = $umkmLastMonth > 0 ? round((($umkmThisMonth - $umkmLastMonth) / $umkmLastMonth) * 100, 1) : 0;

        $batikThisMonth = Batik::whereMonth('created_at', Carbon::now()->month)->count();
        $batikLastMonth = Batik::whereMonth('created_at', Carbon::now()->subMonth()->month)->count();
        $batikGrowth = $batikLastMonth > 0 ? round((($batikThisMonth - $batikLastMonth) / $batikLastMonth) * 100, 1) : 0;

        $eventUpcoming = Event::where('start_at', '>', Carbon::now())->count();
        $eventPast = Event::where('start_at', '<=', Carbon::now())->count();

        // $messagesUnread = ContactMessage::where('is_read', false)->count();
        $messagesThisWeek = ContactMessage::where('created_at', '>=', Carbon::now()->startOfWeek())->count();

        $instagramActive = InstagramPost::where('is_active', true)->count();
        $instagramTotal = InstagramPost::count();

        return [
            // UMKM Stats
            Stat::make('Total UMKM Terdaftar', Umkm::count())
                ->description($umkmGrowth >= 0 ? "{$umkmGrowth}% peningkatan bulan ini" : "{$umkmGrowth}% penurunan bulan ini")
                ->descriptionIcon($umkmGrowth >= 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down')
                ->chart($this->getUmkmChartData())
                ->color($umkmGrowth >= 0 ? 'success' : 'danger')
                ->icon('heroicon-o-building-storefront'),

            // Batik Stats
            Stat::make('Koleksi Motif Batik', Batik::count())
                ->description($batikGrowth >= 0 ? "+{$batikThisMonth} motif bulan ini" : "{$batikThisMonth} motif bulan ini")
                ->descriptionIcon('heroicon-m-sparkles')
                ->chart($this->getBatikChartData())
                ->color('info')
                ->icon('heroicon-o-swatch'),

            // Event Stats
            Stat::make('Manajemen Event', Event::count())
                ->description("{$eventUpcoming} mendatang • {$eventPast} selesai")
                ->descriptionIcon('heroicon-m-calendar-days')
                ->color('warning')
                ->icon('heroicon-o-calendar')
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                ]),

            // Wisata Stats
            Stat::make('Destinasi Wisata', Wisata::count())
                ->description('Objek wisata unggulan Paseseh')
                ->descriptionIcon('heroicon-m-map-pin')
                ->color('primary')
                ->icon('heroicon-o-map'),

            // Award Stats
            Stat::make('Penghargaan Diraih', Award::count())
                ->description('Prestasi komunitas dan UMKM')
                ->descriptionIcon('heroicon-m-trophy')
                ->color('secondary')
                ->icon('heroicon-o-trophy'),

            // Instagram Stats
            Stat::make('Konten Instagram', $instagramActive)
                ->description("Dari {$instagramTotal} total postingan")
                ->descriptionIcon('heroicon-m-photo')
                ->color('success')
                ->icon('heroicon-o-camera'),

            // Contact Message Stats
            // Stat::make('Pesan Kontak', ContactMessage::count())
            //     ->description($messagesUnread > 0 ? "{$messagesUnread} belum dibaca • {$messagesThisWeek} minggu ini" : "{$messagesThisWeek} pesan minggu ini")
            //     ->descriptionIcon($messagesUnread > 0 ? 'heroicon-m-exclamation-circle' : 'heroicon-m-check-circle')
            //     ->color($messagesUnread > 0 ? 'danger' : 'success')
            //     ->icon('heroicon-o-envelope'),

            // Engagement Overview
            Stat::make('Tingkat Engagement', $this->calculateEngagementRate() . '%')
                ->description('Rata-rata interaksi konten')
                ->descriptionIcon('heroicon-m-chart-bar')
                ->color('info')
                ->icon('heroicon-o-chart-bar-square'),
        ];
    }

    /**
     * Get UMKM registration chart data for last 7 days
     */
    private function getUmkmChartData(): array
    {
        return Umkm::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as count'))
            ->where('created_at', '>=', Carbon::now()->subDays(7))
            ->groupBy('date')
            ->orderBy('date')
            ->pluck('count')
            ->toArray();
    }

    /**
     * Get Batik addition chart data for last 7 days
     */
    private function getBatikChartData(): array
    {
        return Batik::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as count'))
            ->where('created_at', '>=', Carbon::now()->subDays(7))
            ->groupBy('date')
            ->orderBy('date')
            ->pluck('count')
            ->toArray();
    }

    /**
     * Calculate overall engagement rate
     */
    private function calculateEngagementRate(): float
    {
        $totalContent = InstagramPost::count() + Event::count() + Wisata::count();
        $activeContent = InstagramPost::where('is_active', true)->count() + 
                        Event::where('start_at', '>', Carbon::now())->count();
        
        return $totalContent > 0 ? round(($activeContent / $totalContent) * 100, 1) : 0;
    }

    /**
     * Polling interval for real-time updates (optional)
     */
    protected ?string $pollingInterval = '30s';
}