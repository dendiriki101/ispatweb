<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengumuman Produk Lelang Baru</title>
</head>
<body>
    <h1>Pengumuman Produk Lelang Baru di Ispat Indo</h1>

    <p>Halo,</p>
    <br>
    <p>Terima kasih atas partisipasinya mengikuti lelang di PT. Ispat Indo, Berikut adalah data lelang penjualan {{$lelang->title}} yang anda ikuti pada tanggal </p>

    <ul>
        <li><strong>Nama:</strong> {{ $buyer->nama }}</li>
        <li><strong>NPWP:</strong> {{ $buyer->npwp }} </li>
        <li><strong>No Telp:</strong> {{ $buyer->nomor_telepon }}</li>
        <li><strong>Harga Penawaran:</strong> Rp. {{ number_format($pelelang->penawaran, 0, ',', '.') }} /{{$lelang->uom}}</li>
    </ul>

    <p>Kami akan segera menghubungi anda, jika anda memenangkan lelang ini</p>

    <p>Salam, <br>
    Tim Ispat Indo</p>
</body>
</html>
