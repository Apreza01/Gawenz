<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data User</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
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
            font-size: 14px;
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
            text-align: center;
            border: 1px solid #dee2e6;
        }
        td {
            padding: 10px;
            border: 1px solid #dee2e6;
            text-align: left;
        }
        tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        .status {
            padding: 5px 10px;
            border-radius: 4px;
            font-weight: 500;
            text-align: center;
        }
        .status-belum {
            background-color:rgb(255, 114, 7);
            color: #000;
        }
        .status-sudah {
            background-color: #28a745;
            color: #fff;
        }
        .footer {
            margin-top: 30px;
            text-align: right;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="title">Data User</div>
        <div class="subtitle">Tanggal: {{ $tanggal }}</div>
        <div class="subtitle">Pukul: {{ $jam }}</div>
    </div>

    <table>
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="25%">Nama</th>
                <th width="30%">Email</th>
                <th width="20%">Jabatan</th>
                <th width="20%">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $item)
            <tr>
                <td align="center">{{ $loop->iteration }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->email }}</td>
                <td align="center">{{ $item->jabatan }}</td>
                <td align="center">
                    <span class="status {{ $item->is_tugas ? 'status-sudah' : 'status-belum' }}">
                        {{ $item->is_tugas ? 'Sudah Ditugaskan' : 'Belum Ditugaskan' }}
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        Dicetak pada: {{ $tanggal }} {{ $jam }} WIB
    </div>
</body>
</html>

  
