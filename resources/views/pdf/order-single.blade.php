<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Order {{ $order->order_number }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            font-size: 12px;
            color: #333;
            padding: 40px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 3px solid #2563eb;
            padding-bottom: 20px;
        }
        .header h1 {
            color: #2563eb;
            font-size: 28px;
            margin-bottom: 5px;
        }
        .header p {
            color: #64748b;
            font-size: 14px;
        }
        .order-info {
            background: #f8fafc;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 25px;
            border-left: 4px solid #2563eb;
        }
        .order-info h2 {
            color: #1e293b;
            font-size: 16px;
            margin-bottom: 15px;
        }
        .info-row {
            display: flex;
            margin-bottom: 10px;
        }
        .info-label {
            width: 40%;
            font-weight: bold;
            color: #475569;
        }
        .info-value {
            width: 60%;
            color: #1e293b;
        }
        .section {
            margin-bottom: 25px;
        }
        .section h3 {
            background: #2563eb;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 14px;
            margin-bottom: 15px;
        }
        .product-details {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 20px;
        }
        .product-row {
            display: flex;
            margin-bottom: 12px;
            padding-bottom: 12px;
            border-bottom: 1px solid #f1f5f9;
        }
        .product-row:last-child {
            border-bottom: none;
        }
        .summary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 8px;
            margin-top: 25px;
        }
        .summary h3 {
            background: none;
            padding: 0;
            margin-bottom: 15px;
            font-size: 16px;
        }
        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 14px;
        }
        .summary-row.total {
            border-top: 2px solid rgba(255,255,255,0.3);
            padding-top: 15px;
            margin-top: 15px;
            font-size: 18px;
            font-weight: bold;
        }
        .status-badge {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .status-pending { background: #fef3c7; color: #92400e; }
        .status-confirmed { background: #dbeafe; color: #1e40af; }
        .status-paid { background: #dcfce7; color: #166534; }
        .status-completed { background: #d1fae5; color: #065f46; }
        .status-cancelled { background: #fee2e2; color: #991b1b; }
        .footer {
            margin-top: 40px;
            text-align: center;
            color: #94a3b8;
            font-size: 11px;
            border-top: 1px solid #e2e8f0;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>INVOICE ORDER</h1>
        <p>{{ $order->order_number }}</p>
    </div>

    <div class="order-info">
        <h2>Informasi Order</h2>
        <div class="info-row">
            <div class="info-label">Tanggal Order:</div>
            <div class="info-value">{{ \Carbon\Carbon::parse($order->order_date)->format('d F Y') }}</div>
        </div>
        <div class="info-row">
            <div class="info-label">Status:</div>
            <div class="info-value">
                <span class="status-badge status-{{ $order->status }}">{{ ucfirst($order->status) }}</span>
            </div>
        </div>
        @if($order->payment_method)
        <div class="info-row">
            <div class="info-label">Metode Pembayaran:</div>
            <div class="info-value">{{ ucfirst($order->payment_method) }}</div>
        </div>
        @endif
    </div>

    <div class="section">
        <h3>Data Customer</h3>
        <div class="product-details">
            <div class="product-row">
                <div class="info-label">Nama Customer:</div>
                <div class="info-value">{{ $order->name }}</div>
            </div>
            <div class="product-row">
                <div class="info-label">No. WhatsApp:</div>
                <div class="info-value">{{ $order->phone }}</div>
            </div>
        </div>
    </div>

    <div class="section">
        <h3>Detail Produk</h3>
        <div class="product-details">
            <div class="product-row">
                <div class="info-label">Nama Produk:</div>
                <div class="info-value">{{ $order->product_name }}</div>
            </div>
            <div class="product-row">
                <div class="info-label">Harga Satuan:</div>
                <div class="info-value">Rp {{ number_format($order->product_price, 0, ',', '.') }}</div>
            </div>
            <div class="product-row">
                <div class="info-label">Jumlah:</div>
                <div class="info-value">{{ $order->quantity }} pcs</div>
            </div>
            @if($order->note)
            <div class="product-row">
                <div class="info-label">Catatan:</div>
                <div class="info-value">{{ $order->note }}</div>
            </div>
            @endif
        </div>
    </div>

    <div class="summary">
        <h3>Ringkasan Pembayaran</h3>
        <div class="summary-row">
            <span>Subtotal ({{ $order->quantity }} x Rp {{ number_format($order->product_price, 0, ',', '.') }}):</span>
            <span>Rp {{ number_format($order->total_amount, 0, ',', '.') }}</span>
        </div>
        <div class="summary-row">
            <span>Komisi ({{ $order->commission_rate }}%):</span>
            <span>Rp {{ number_format($order->commission, 0, ',', '.') }}</span>
        </div>
        <div class="summary-row total">
            <span>TOTAL AMOUNT:</span>
            <span>Rp {{ number_format($order->total_amount, 0, ',', '.') }}</span>
        </div>
    </div>

    <div class="footer">
        <p>Dicetak pada {{ date('d F Y, H:i') }} WIB</p>
        <p>Terima kasih atas kepercayaan Anda</p>
    </div>
</body>
</html>