<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function create(Request $request)
    {
        // 1️⃣ Generate kode invoice unik
        $invoiceCode = 'INV-' . now()->format('Ymd') . '-' . str_pad(Order::count() + 1, 3, '0', STR_PAD_LEFT);

        // 2️⃣ Simpan data order sementara
        $order = Order::create([
            'invoice_code' => $invoiceCode,
            'name' => $request->name,
            'phone' => $request->phone,
            'total_amount' => $request->total_amount,
            'note' => $request->note,
            'payment_method' => 'transfer',
            'status' => 'pending',
        ]);

        // 3️⃣ Format pesan WhatsApp otomatis
        $message = "Halo, saya ingin membeli produk batik.\n\n" .
            "Invoice: {$invoiceCode}\n" .
            "Produk: {$request->note}\n" .
            "Total: Rp " . number_format($request->total_amount, 0, ',', '.') . "\n\n" .
            "Nama: {$request->name}\n" .
            "Nomor WA: {$request->phone}";

        // 4️⃣ Link WhatsApp admin
        $waNumber = '6287846696379'; // Ganti dengan nomor admin
        $waLink = "https://wa.me/{$waNumber}?text=" . urlencode($message);

        // 5️⃣ Arahkan ke WhatsApp
        return redirect()->away($waLink);
    }

    public function generateInvoice($orderId)
    {
        $order = Order::findOrFail($orderId);

        // Buat PDF dari view
        $pdf = Pdf::loadView('invoices.invoice', compact('order'));

        // Simpan ke storage/public/invoices/
        $fileName = $order->invoice_code . '.pdf';
        $path = 'invoices/' . $fileName;
        Storage::disk('public')->put($path, $pdf->output());

        // Simpan path ke database
        $order->update(['invoice_path' => $path]);

        // Unduh atau tampilkan PDF
        return response()->download(storage_path('app/public/' . $path));
    }

    public function showInvoice($id)
    {
        $order = Order::with(['orderItems.batik'])->findOrFail($id);
        return view('invoice', compact('order'));
    }
}
