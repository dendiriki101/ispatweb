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

    <p>Kami ingin memberitahukan bahwa PT. Ispat Indo telah menambahkan produk baru yang siap untuk dilelang. Mohon untuk memeriksa detail lelang produk tersebut dan ajukan penawaran terbaik Anda.</p>

    <ul>
        <li><strong>Judul Lelang: </strong> {{ $lelang->title }}</li>
        <li><strong>Deskripsi: </strong> {!! $lelang->content !!}</li>
    </ul>

    <p>Untuk informasi lebih lanjut dan penawaran, silakan kunjungi tautan berikut:</p>
    <a href="{{ $lelang->link }}">Lihat Detail Lelang</a>

    <p>Salam,<br>
    Tim Ispat Indo</p>
</body>
</html>
