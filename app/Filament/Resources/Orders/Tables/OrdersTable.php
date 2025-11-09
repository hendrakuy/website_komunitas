<?php

namespace App\Filament\Resources\Orders\Tables;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Order;

class OrdersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('invoice_code')
                    ->label('Invoice')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->copyMessage('Invoice code copied!'),

                TextColumn::make('name')
                    ->label('Nama Pembeli')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('phone')
                    ->label('No. Telepon')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('total_amount')
                    ->label('Total Pembayaran')
                    ->money('idr', true)
                    ->sortable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->colors([
                        'warning' => 'pending',
                        'success' => 'paid',
                        'danger' => 'cancelled',
                    ])
                    ->sortable(),

                TextColumn::make('invoice_path')
                    ->label('Invoice PDF')
                    ->formatStateUsing(fn($state) => $state ? 'Lihat Invoice' : '-')
                    ->url(fn($record) => $record->invoice_path ? asset('storage/' . $record->invoice_path) : null)
                    ->openUrlInNewTab()
                    ->icon('heroicon-o-document-text')
                    ->color('success'),

                TextColumn::make('payment_method')
                    ->label('Metode Pembayaran')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y H:i')
                    ->sortable(),

                TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime('d M Y H:i')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])

            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'paid' => 'Paid',
                        'cancelled' => 'Cancelled',
                    ]),
            ])

            ->recordActions([
                // Aksi Edit
                EditAction::make(),

                // Aksi Cepat Ubah ke "Paid"
                Action::make('markPaid')
                    ->label('Tandai Lunas')
                    ->icon('heroicon-o-banknotes')
                    ->color('success')
                    ->requiresConfirmation()
                    ->visible(fn($record) => $record->status !== 'paid')
                    ->action(function ($record) {
                        $record->update(['status' => 'paid']);
                    }),

                // Aksi Cepat Ubah ke "Cancelled"
                Action::make('markCancelled')
                    ->label('Batalkan')
                    ->icon('heroicon-o-x-circle')
                    ->color('danger')
                    ->requiresConfirmation()
                    ->visible(fn($record) => $record->status !== 'cancelled')
                    ->action(function ($record) {
                        $record->update(['status' => 'cancelled']);
                    }),

                Action::make('generateInvoice')
                    ->label('Generate Invoice')
                    ->icon('heroicon-o-document-text')
                    ->color('success')
                    ->action(function (Order $record) {
                        // Generate PDF dari view
                        $pdf = Pdf::loadView('invoices.invoice', ['order' => $record]);

                        $fileName = $record->invoice_code . '.pdf';
                        $path = 'invoices/' . $fileName;

                        // Simpan file PDF
                        Storage::disk('public')->put($path, $pdf->output());

                        // Update path di database
                        $record->update(['invoice_path' => $path]);
                    })
                    ->requiresConfirmation()
                    ->modalHeading('Generate Invoice')
                    ->modalSubheading('Apakah kamu yakin ingin membuat invoice untuk pesanan ini?')
                    ->modalButton('Ya, Generate'),

                Action::make('downloadInvoice')
                    ->label('Download Invoice')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->color('primary')
                    ->visible(fn(Order $record) => $record->invoice_path !== null)
                    ->url(fn(Order $record) => Storage::url($record->invoice_path))
                    ->openUrlInNewTab(),

                Action::make('sendInvoice')
                    ->label('Kirim Invoice')
                    ->icon('heroicon-o-paper-airplane')
                    ->color('success')
                    ->visible(fn($record) => $record->status === 'paid') // hanya tampil jika status = paid
                    ->action(function ($record) {
                        // Pastikan file invoice sudah ada, kalau belum generate
                        if (!$record->invoice_path || !Storage::disk('public')->exists($record->invoice_path)) {
                            $pdf = Pdf::loadView('invoices.invoice', ['order' => $record]);
                            $fileName = $record->invoice_code . '.pdf';
                            $path = 'invoices/' . $fileName;
                            Storage::disk('public')->put($path, $pdf->output());
                            $record->update(['invoice_path' => $path]);
                        }

                        // Format pesan WhatsApp
                        $message = "Halo {$record->name},\n\n"
                            . "Terima kasih telah melakukan pembayaran.\n\n"
                            . "Berikut detail invoice Anda:\n"
                            . "Nomor Invoice: *{$record->invoice_code}*\n"
                            . "Total: Rp" . number_format($record->total_amount, 0, ',', '.') . "\n\n"
                            . "Unduh invoice Anda di sini:\n"
                            . url('storage/' . $record->invoice_path);

                        // Format nomor WhatsApp
                        $phone = preg_replace('/[^0-9]/', '', $record->phone);
                        if (str_starts_with($phone, '0')) {
                            $phone = '62' . substr($phone, 1);
                        }

                        $whatsappUrl = "https://wa.me/{$phone}?text=" . urlencode($message);

                        return redirect()->away($whatsappUrl);
                    }),
            ])

            ->bulkActions([
                DeleteBulkAction::make()
                    ->label('Hapus Pesanan')
                    ->color('danger')
                    ->icon('heroicon-o-trash')
                    ->requiresConfirmation(true)
                    ->modalHeading('Hapus Pesanan')
                    ->modalSubheading('Apakah Anda yakin ingin menghapus pesanan yang dipilih? Tindakan ini tidak dapat dibatalkan.')
                    ->modalButton('Ya, Hapus')
                    ->successNotificationTitle('Pesanan berhasil dihapus'),
            ]);
    }
}
