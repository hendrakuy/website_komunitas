<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Invoice {{ $order->invoice_code }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-100">
    <div class="max-w-6xl mx-auto my-8 bg-white rounded-xl shadow-lg overflow-hidden">
        <!-- Header dengan gradient -->
        <div class="bg-gradient-to-r from-blue-600 to-purple-600 p-6 text-white">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-2xl font-bold">INVOICE</h1>
                    <p class="text-blue-100">Terima kasih atas pembelian Anda</p>
                </div>
                <div class="text-right">
                    <h2 class="text-xl font-semibold">{{ $order->invoice_code }}</h2>
                    <div class="mt-2 px-3 py-1 bg-white/20 rounded-full text-sm inline-block">
                        @if ($order->status == 'pending')
                            <i class="fas fa-clock mr-1"></i> Menunggu Pembayaran
                        @elseif($order->status == 'paid')
                            <i class="fas fa-check-circle mr-1"></i> Sudah Dibayar
                        @else
                            <i class="fas fa-times-circle mr-1"></i> Dibatalkan
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Layout Dua Kolom untuk Informasi -->
        <div class="grid grid-cols-2 lg:grid-cols-2 gap-8 p-6 border-b">
            <!-- Kolom Kiri - Informasi Perusahaan -->
            <div class="space-y-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-3 flex items-center">
                        <i class="fas fa-store mr-2 text-blue-500"></i>
                        Dari Penjual
                    </h3>
                    <div class="text-gray-600 bg-blue-50 p-4 rounded-lg">
                        <p class="font-medium text-blue-700">Toko Batik Modern</p>
                        <p>Jl. Batik Indah No. 123</p>
                        <p>Jakarta Pusat, Indonesia 10110</p>
                        <p class="mt-2">
                            <i class="fas fa-envelope mr-2 text-blue-500"></i>
                            hello@tokobatikmodern.com
                        </p>
                        <p>
                            <i class="fas fa-phone mr-2 text-blue-500"></i>
                            +62 21 1234 5678
                        </p>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-3 flex items-center">
                        <i class="fas fa-user mr-2 text-green-500"></i>
                        Informasi Pembeli
                    </h3>
                    <div class="text-gray-600 bg-green-50 p-4 rounded-lg">
                        <p class="font-medium text-green-700">{{ $order->name ?? 'Pelanggan' }}</p>
                        <p>
                            <i class="fas fa-phone mr-2 text-green-500"></i>
                            {{ $order->phone ?? '-' }}
                        </p>
                        <p class="mt-2 text-sm">
                            <span class="font-medium">Tanggal Invoice:</span>
                            {{ $order->created_at->format('d M Y') }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan - Ringkasan Pesanan -->
            <div class="space-y-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-3 flex items-center">
                        <i class="fas fa-receipt mr-2 text-purple-500"></i>
                        Ringkasan Pesanan
                    </h3>
                    <div class="bg-purple-50 p-4 rounded-lg">
                        <div class="space-y-3">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Metode Pembayaran</span>
                                <div class="flex items-center">
                                    @if ($order->payment_method == 'Transfer')
                                        <i class="fas fa-university text-blue-500 mr-2"></i>
                                        <span class="font-medium">Transfer Bank</span>
                                    @elseif($order->payment_method == 'QRIS')
                                        <i class="fas fa-qrcode text-green-500 mr-2"></i>
                                        <span class="font-medium">QRIS</span>
                                    @elseif($order->payment_method == 'COD')
                                        <i class="fas fa-money-bill-wave text-orange-500 mr-2"></i>
                                        <span class="font-medium">COD</span>
                                    @else
                                        <i class="fas fa-wallet text-gray-500 mr-2"></i>
                                        <span
                                            class="font-medium">{{ ucfirst($order->payment_method ?? 'Tidak ditentukan') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Status Pesanan</span>
                                @php
                                    $statusClasses = match ($order->status) {
                                        'pending' => 'bg-yellow-100 text-yellow-800',
                                        'paid' => 'bg-green-100 text-green-800',
                                        'cancelled' => 'bg-red-100 text-red-800',
                                        default => 'bg-gray-100 text-gray-800',
                                    };
                                @endphp
                                <span class="font-medium px-3 py-1 rounded-full text-sm {{ $statusClasses }}">
                                    {{ ucfirst($order->status) }}
                                </span>
                            </div>

                            <div class="flex justify-between text-lg font-semibold pt-3 border-t border-purple-200">
                                <span class="text-gray-700">Total Pembayaran</span>
                                <span
                                    class="text-purple-600">Rp{{ number_format($order->total_amount, 0, ',', '.') }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                @if ($order->note)
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700 mb-3 flex items-center">
                            <i class="fas fa-sticky-note mr-2 text-orange-500"></i>
                            Catatan Pesanan
                        </h3>
                        <div class="bg-orange-50 p-4 rounded-lg text-gray-600">
                            <p>{{ $order->note }}</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <!-- Detail Item Pesanan -->
        <div class="p-6">
            <h3 class="text-lg font-semibold text-gray-700 mb-4 flex items-center">
                <i class="fas fa-list-alt mr-2 text-blue-500"></i>
                Detail Produk
            </h3>

            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th class="px-4 py-3">Produk</th>
                            <th class="px-4 py-3 text-center">Jumlah</th>
                            <th class="px-4 py-3 text-right">Harga Satuan</th>
                            <th class="px-4 py-3 text-right">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->orderItems as $item)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-4 py-3">
                                    <div class="flex items-center">
                                        <div
                                            class="w-10 h-10 bg-gray-200 rounded-lg mr-3 flex items-center justify-center">
                                            <i class="fas fa-tshirt text-gray-400"></i>
                                        </div>
                                        <div>
                                            <p class="font-medium text-gray-900">
                                                {{ $item->batik->name ?? 'Produk Batik' }}</p>
                                            <p class="text-xs text-gray-500">Kode:
                                                {{ $item->batik->code ?? 'BTK-' . $item->id }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-center">{{ $item->quantity }}</td>
                                <td class="px-4 py-3 text-right">Rp{{ number_format($item->price, 0, ',', '.') }}</td>
                                <td class="px-4 py-3 text-right font-medium text-gray-900">
                                    Rp{{ number_format($item->subtotal, 0, ',', '.') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Total Pembayaran -->
            <div class="mt-8 flex justify-end">
                <div class="w-full md:w-1/2 lg:w-1/3">
                    <div class="space-y-3 bg-gray-50 p-6 rounded-lg">
                        <div class="flex justify-between text-gray-600">
                            <span>Subtotal Produk</span>
                            <span>Rp{{ number_format($order->total_amount, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between text-gray-600">
                            <span>Biaya Pengiriman</span>
                            <span>Rp0</span>
                        </div>
                        <div class="flex justify-between text-gray-600">
                            <span>Diskon</span>
                            <span>Rp0</span>
                        </div>
                        <div class="flex justify-between pt-3 border-t border-gray-200 font-semibold text-lg">
                            <span class="text-gray-700">Total Pembayaran</span>
                            <span class="text-blue-600">Rp{{ number_format($order->total_amount, 0, ',', '.') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="bg-gray-50 p-6 border-t border-gray-200">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-gray-500 text-sm mb-4 md:mb-0 text-center md:text-left">
                    <p class="font-medium">Terima kasih telah berbelanja di toko kami! 🙏</p>
                    <p class="mt-1">Silakan hubungi kami jika ada pertanyaan mengenai pesanan Anda.</p>
                </div>
                <div class="flex space-x-3">
                    <button
                        class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition flex items-center text-sm">
                        <i class="fas fa-print mr-2"></i> Cetak
                    </button>
                    <button
                        class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition flex items-center text-sm">
                        <i class="fas fa-download mr-2"></i> Unduh PDF
                    </button>
                    <button
                        class="px-4 py-2 bg-purple-500 text-white rounded-lg hover:bg-purple-600 transition flex items-center text-sm">
                        <i class="fas fa-share-alt mr-2"></i> Bagikan
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
