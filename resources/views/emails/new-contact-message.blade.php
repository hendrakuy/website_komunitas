<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Baru dari Pengunjung Website</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f5f8fa;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .email-container {
            max-width: 600px;
            background: #ffffff;
            margin: 0 auto;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            border: 1px solid #e3e6ea;
        }

        .email-header {
            background: linear-gradient(90deg, #2563eb, #9333ea);
            color: #ffffff;
            text-align: center;
            padding: 20px 10px;
        }

        .email-header h2 {
            margin: 0;
            font-size: 20px;
        }

        .email-body {
            padding: 25px 30px;
            line-height: 1.6;
        }

        .email-body p {
            margin: 8px 0;
        }

        .email-body strong {
            color: #111827;
        }

        .email-footer {
            background-color: #f9fafb;
            text-align: center;
            font-size: 13px;
            color: #6b7280;
            padding: 15px 10px;
        }

        .divider {
            border: none;
            height: 1px;
            background-color: #e5e7eb;
            margin: 15px 0;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">
            <h2>📩 Pesan Baru dari Pengunjung Website</h2>
        </div>

        <div class="email-body">
            <p><strong>Nama:</strong> {{ $data['name'] }}</p>
            <p><strong>Email:</strong> {{ $data['email'] }}</p>
            <p><strong>No. Telepon:</strong> {{ $data['phone'] }}</p>
            <p><strong>Subjek:</strong> {{ $data['subject'] ?? '-' }}</p>
            <hr class="divider">
            <p><strong>Pesan:</strong></p>
            <p>{{ $data['message'] }}</p>
        </div>

        <div class="email-footer">
            <p>Pesan ini dikirim melalui formulir <strong>Hubungi Kami</strong> di situs resmi Komunitas Batik Desa
                Paseseh.</p>
            <p>&copy; {{ date('Y') }} Komunitas Kembang Pote. Semua Hak Dilindungi.</p>
        </div>
    </div>
</body>

</html>
