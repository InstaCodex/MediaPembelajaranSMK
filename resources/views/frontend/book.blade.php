@extends('layouts.backend')
@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Rak Buku</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        .rak-buku {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            height: 100%; /* Mengisi tinggi halaman */
            align-items: center; /* Mengatur posisi vertikal ke tengah */
        }

        .buku {
            width: 200px;
            padding: 20px;
            margin: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
            text-decoration: none; /* Tambahkan properti ini untuk menghilangkan underline pada tautan */
        }

        .buku img {
            width: 100px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .judul-buku {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="rak-buku">
        <a href="{{ url('#') }}" class="buku">
            <img src="./gambar/buku/ipa.png" alt="Buku 1">
            <div class="judul-buku">IPA</div>
        </a>
        <a href="{{ url('#') }}" class="buku">
            <img src="./gambar/buku/mtk.png" alt="Buku 2">
            <div class="judul-buku">MATEMATIKA</div>
        </a>
        <a href="{{ url('#') }}" class="buku">
            <img src="./gambar/buku/indo.png" alt="Buku 3">
            <div class="judul-buku">BAHASA INDONESIA</div>
        </a>

        <a href="{{ url('#') }}" class="buku">
            <img src="./gambar/buku/inggris.png" alt="Buku 3">
            <div class="judul-buku">BAHASA INGGRIS</div>
        </a>

        <a href="{{ url('#') }}" class="buku">
            <img src="./gambar/buku/pai.png" alt="Buku 3">
            <div class="judul-buku">PAI</div>
        </a>

        <a href="{{ url('#') }}" class="buku">
            <img src="./gambar/buku/pkn.png" alt="Buku 3">
            <div class="judul-buku">PPKN</div>
        </a>

        <a href="{{ url('#') }}" class="buku">
            <img src="./gambar/buku/ips.png" alt="Buku 3">
            <div class="judul-buku">IPS</div>
        </a>

        <a href="{{ url('#') }}" class="buku">
            <img src="./gambar/buku/pjok.png" alt="Buku 3">
            <div class="judul-buku">PJOK</div>
        </a>
    </div>
</body>
</html>
@endsection
