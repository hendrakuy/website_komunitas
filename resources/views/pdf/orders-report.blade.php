<?php
// ============================================
// 3. CREATE: resources/views/pdf/orders-report.blade.php
// ============================================
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Orders</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            font-size: 11px;
            color: #333;
            padding: 30px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 3px solid #2563eb;
            padding-bottom: 20px;
        }
        .header h1 {
            color: #2563eb;
            font-size: 24px;
            margin-bottom: 5px;
        }
        .header p {
            color: #64748b;
            font-size: 13px;
        }
        .summary-cards {
            display: flex;
            justify-content: space-between;
            margin-bottom: 25px;
            gap: 15px;
        }
        .card {
            flex: 1;
            padding: 15px;
            border-radius: 8px;
            color: white;
        }
        .card-blue { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .card-green { background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%); }
        .card-orange { background: linear-gradient(135deg, #ee0979 0%, #ff6a00 100%); }
        .card h3 {
            font-size: 12px;
            margin-bottom: 8px;
            opacity: 0.9;
        }
        .card p {
            font-size: 18px;
            font-weight: bold;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background: white;
        }
        th {
            background: #2563eb;
            color: white;
            padding: 12px 8px;
            text-align: left;
            font-size: 11px;
            font-weight: bold;
        }
        td {
            padding: 10px 8px;
            border-bottom: 1px solid #e2e8f0;
        }
        tr:hover {
            background: #f8fafc;
        }
        .text-right {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .status-badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 9px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .status-pending { background: #fef3c7; color: #92400e; }
        .status-confirmed { background: #dbeafe; color: #1e40af; }
        .status-paid { background: #dcfce7; color: #166534; }
        .status-completed { background: #d1fae5; color: #065f46; }
        .status-cancelled { background: #fee2e2; color: #991b1b; }
        .total-section {
            background: #f8fafc;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
            border-left: 4px solid #2563eb;
        }
        .total-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 13px;
        }
        .total-row.grand {
            border-top: 2px solid #cbd5e1;
            padding-top: 15px;
            margin-top: 15px;
            font-size: 16px;
            font-weight: bold;
            color: #2563eb;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            color: #94a3b8;
            font-size: 10px;
            border-top: 1px solid #e2e8f0;
            padding-top: 15px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>LAPORAN PENJUALAN ORDERS</h1>
        <p>Periode: {{ date('d F Y') }}</p>
    </div>

    <div class="summary-cards">
        <div class="card card-blue">
            <h3>Total Orders</h3>
            <p>{{ $orders->count() }} Orders</p>
        </div>
        <div class="card card-green">
            <h3>Total Penjualan</h3>
            <p>Rp {{ number_format($totalAmount, 0, ',', '.') }}</p>
        </div>
        <div class="card card-orange">
            <h3>Total Komisi</h3>
            <p>Rp {{ number_format($totalCommission, 0, ',', '.') }}</p>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>No. Order</th>
                <th>Tanggal</th>
                <th>Customer</th>
                <th>Produk</th>
                <th class="text-center">Qty</th>
                <th class="text-right">Total</th>
                <th class="text-right">Komisi</th>
                <th class="text-center">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->order_number }}</td>
                <td>{{ \Carbon\Carbon::parse($order->order_date)->format('d/m/Y') }}</td>
                <td>{{ $order->name }}</td>
                <td>{{ $order->product_name }}</td>
                <td class="text-center">{{ $order->quantity }}</td>
                <td class="text-right">Rp {{ number_format($order->total_amount, 0, ',', '.') }}</td>
                <td class="text-right">Rp {{ number_format($order->commission, 0, ',', '.') }}</td>
                <td class="text-center">
                    <span class="status-badge status-{{ $order->status }}">{{ ucfirst($order->status) }}</span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="total-section">
        <div class="total-row">
            <span>Subtotal Penjualan:</span>
            <span>Rp {{ number_format($totalAmount, 0, ',', '.') }}</span>
        </div>
        <div class="total-row">
            <span>Total Komisi:</span>
            <span>Rp {{ number_format($totalCommission, 0, ',', '.') }}</span>
        </div>
        <div class="total-row grand">
            <span>GRAND TOTAL:</span>
            <span>Rp {{ number_format($totalAmount, 0, ',', '.') }}</span>
        </div>
    </div>

    <div class="footer">
        <p>Dicetak pada {{ date('d F Y, H:i') }} WIB</p>
        <p>Laporan ini digenerate secara otomatis oleh sistem</p>
    </div>
</body>
</html>