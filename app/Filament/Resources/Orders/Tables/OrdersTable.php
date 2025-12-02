<?php

namespace App\Filament\Resources\Orders\Tables;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Illuminate\Database\Eloquent\Collection;
use Barryvdh\DomPDF\Facade\Pdf;

class OrdersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // Nomor Order
                TextColumn::make('order_number')
                    ->label('No. Order')
                    ->sortable()
                    ->searchable()
                    ->limit(20)
                    ->badge()
                    ->color('info'),

                // Tanggal Order
                TextColumn::make('order_date')
                    ->label('Tanggal')
                    ->date('d M Y')
                    ->sortable(),

                // Nama Customer
                TextColumn::make('name')
                    ->label('Customer')
                    ->sortable()
                    ->searchable()
                    ->limit(22),

                // Produk
                TextColumn::make('product_name')
                    ->label('Produk')
                    ->sortable()
                    ->searchable()
                    ->limit(25),

                // Harga Satuan
                TextColumn::make('product_price')
                    ->label('Harga')
                    ->money('IDR', locale: 'id')
                    ->sortable(),

                // Total Amount
                TextColumn::make('total_amount')
                    ->label('Total')
                    ->money('IDR', locale: 'id')
                    ->sortable(),

                // Status Order
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'confirmed' => 'secondary',
                        'paid' => 'info',
                        'completed' => 'success',
                        'cancelled' => 'danger',
                        default => 'gray',
                    })
                    ->sortable(),

                // Metode Pembayaran
                TextColumn::make('payment_method')
                    ->label('Pembayaran')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'transfer' => 'primary',
                        'qris' => 'info',
                        'ewallet' => 'success',
                        'cod' => 'warning',
                        'tunai' => 'gray',
                        default => 'gray',
                    }),
            ])
            ->recordActions([
                EditAction::make()->label('Edit'),
                
                // Action untuk cetak single order
                Action::make('print')
                    ->label('Cetak')
                    ->icon('heroicon-o-printer')
                    ->color('success')
                    ->action(function ($record) {
                        return response()->streamDownload(function () use ($record) {
                            $pdf = Pdf::loadView('pdf.order-single', ['order' => $record]);
                            echo $pdf->stream();
                        }, 'Order-' . $record->order_number . '.pdf');
                    }),
            ])
            ->toolbarActions([
                DeleteBulkAction::make()
                    ->label('Hapus Order')
                    ->requiresConfirmation()
                    ->modalHeading('Hapus Order')
                    ->modalSubheading('Apakah Anda yakin ingin menghapus order yang dipilih?')
                    ->modalButton('Ya, Hapus')
                    ->successNotificationTitle('Order berhasil dihapus'),
            ])
            ->bulkActions([
                // Bulk action untuk cetak multiple orders
                BulkAction::make('printSelected')
                    ->label('Cetak Laporan')
                    ->icon('heroicon-o-document-text')
                    ->color('success')
                    ->action(function (Collection $records) {
                        return response()->streamDownload(function () use ($records) {
                            $pdf = Pdf::loadView('pdf.orders-report', [
                                'orders' => $records,
                                'totalAmount' => $records->sum('total_amount'),
                                'totalCommission' => $records->sum('commission'),
                            ]);
                            echo $pdf->stream();
                        }, 'Laporan-Orders-' . date('Y-m-d') . '.pdf');
                    }),
            ]);
    }
}
