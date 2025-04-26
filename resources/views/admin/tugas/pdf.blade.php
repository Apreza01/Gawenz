<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }
        .subtitle {
            font-size: 16px;
            color: #666;
            margin-bottom: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th {
            background-color: #f8f9fa;
            color: #333;
            font-weight: bold;
            padding: 12px;
            text-align: left;
            border: 1px solid #dee2e6;
        }
        td {
            padding: 12px;
            border: 1px solid #dee2e6;
        }
        tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        .badge {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
        }
        .badge-primary {
            background-color: #4e73df;
            color: white;
        }
        .badge-info {
            background-color: #36b9cc;
            color: white;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="title">Data Tugas</div>
        <div class="subtitle">Tanggal : {{ $tanggal }}</div>
        <div class="subtitle">Pukul : {{ $jam }}</div>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Tugas</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tugas as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->user->nama }}</td>
                <td>
                    <span class="badge badge-primary">{{ $item->user->email }}</span>
                </td>
                <td>{{ $item->tugas }}</td>
                <td>
                    <span class="badge badge-info">{{ $item->tanggal_mulai }}</span>
                </td>
                <td>
                    <span class="badge badge-info">{{ $item->tanggal_selesai }}</span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

  
