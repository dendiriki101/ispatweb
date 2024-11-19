<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informasi Pendaftaran Lelang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #2c3e50;
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            font-size: 16px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #2c3e50;
            color: #ffffff;
            font-weight: normal;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
        }

        .footer {
            text-align: center;
            font-size: 14px;
            color: #888;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h1>Penawaran Penjualan {{$lelang->title}} tanggal {{ date('d-m-Y') }}</h1>

        <ul>
            <li><strong>Nama:</strong> {{ $buyer->nama }}</li>
            <li><strong>NPWP:</strong> {{ $buyer->npwp }} </li>
            <li><strong>No Telp:</strong>{{ $buyer->nomor_telepon }}</li>
            <li><strong>Harga Penawaran:</strong>Rp. {{ number_format($pelelang->penawaran, 0, ',', '.') }} /{{$lelang->uom}}</li>
        </ul>
    </div>
</body>
</html>
