<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Data Tugas - Gawenz</title>
    <style>
        @page {
            margin: 2.5cm;
        }
        body {
            font-family: 'Times New Roman', serif;
            margin: 0;
            padding: 0;
            color: #000;
            line-height: 1.6;
        }
        .container {
            max-width: 21cm;
            margin: 0 auto;
        }
        .header {
            text-align: center;
            margin-bottom: 2.5cm;
            padding-bottom: 0.5cm;
            border-bottom: 1pt solid #000;
        }
        .title {
            font-size: 18pt;
            font-weight: bold;
            margin: 0 0 0.3cm 0;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .subtitle {
            font-size: 12pt;
            margin: 0;
            font-style: italic;
            color: #333;
        }
        .timestamp {
            text-align: center;
            font-size: 10pt;
            margin-bottom: 1.5cm;
            color: #666;
        }
        .content {
            margin: 1.5cm 0;
        }
        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin: 0.5cm 0;
        }
        .info-table td {
            padding: 0.4cm;
            border: 0.5pt solid #000;
            vertical-align: top;
        }
        .label {
            font-weight: bold;
            width: 35%;
            background: #f8f8f8;
        }
        .value {
            font-family: 'Courier New', monospace;
            font-size: 11pt;
        }
        .footer {
            text-align: center;
            margin-top: 2.5cm;
            padding-top: 0.5cm;
            border-top: 0.5pt solid #000;
            font-size: 9pt;
            color: #666;
        }
        .footer-text {
            margin: 0;
        }
        .page-break {
            page-break-after: always;
        }
        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="title">Data Tugas Karyawan</h1>
            <p class="subtitle">Gawenz - Task Management System</p>
        </div>

        <div class="timestamp">
            Dicetak pada: {{ $tanggal }} | {{ $jam }}
        </div>

        <div class="content">
            <table class="info-table">
                <tr>
                    <td class="label">Nama Karyawan</td>
                    <td class="value">{{ $tugas->user->nama }}</td>
                </tr>
                <tr>
                    <td class="label">Email</td>
                    <td class="value">{{ $tugas->user->email }}</td>
                </tr>
                <tr>
                    <td class="label">Tugas</td>
                    <td class="value">{{ $tugas->tugas }}</td>
                </tr>
                <tr>
                    <td class="label">Tanggal Mulai</td>
                    <td class="value">{{ $tugas->tanggal_mulai }}</td>
                </tr>
                <tr>
                    <td class="label">Tanggal Selesai</td>
                    <td class="value">{{ $tugas->tanggal_selesai }}</td>
                </tr>
            </table>
        </div>

        <div class="footer">
            <p class="footer-text">
                © {{ date('Y') }} Gawenz. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>

  
