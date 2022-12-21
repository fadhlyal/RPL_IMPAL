<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <script src="https://kit.fontawesome.com/1b514b8e9a.js" crossorigin="anonymous"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css\stylef.css">
</head>

<body>
    <section id="header">
        <a href="/dashboard"><img src="images\logo header.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="/dashboard">Beranda</a></li>
                <li><a href="/laporan">Laporan</a></li>
                <li><a class="active" href="/forum">Forum</a></li>
                <li><a href="/kontakdarurat">Kontak</a></li>
                <li>|</li>
                @if (auth()->check())
                    <li><a href="/profile"><i class="fa-solid fa-user"></i></a></li>
                @else
                    <li><a href="/login">Masuk</a></li>
                    <li><a href="/register">Daftar</a></li> 
                @endif
            </ul>
        </div>
    </section>

    <div class="container">
        <div class="forum">
            <div class="kiri">
                @foreach($laporankiri as $key => $data)
                    <h3 class="namauser">{{$data->user->firstname}}</h3>
                    <h3 class="jenis">{{$data->judul}}</h3>
                    @if ($data->status == 'selesai')
                        <i class="fa-solid fa-check"></i> 
                    @elseif ($data->status == 'ditolak')
                        <i class="fa-solid fa-xmark"></i>
                    @else
                        <i class="fa-solid fa-arrows-spin"></i>
                    @endif
                    <h4 class="alamat">{{$data->alamat}}, {{$data->kecamatan}}, {{$data->kabkota}}, {{$data->provinsi}}</h4>
                    <h4 class="waktu">{{$data->created_at}}</h4>
                @endforeach
            </div>

            <div class="kanan">
                @foreach($laporankanan as $key => $data)
                    <h3 class="namauser">{{$data->user->firstname}}</h3>
                    <h3 class="jenis">{{$data->judul}}</h3>
                    @if ($data->status == 'selesai')
                        <i class="fa-solid fa-check"></i> 
                    @elseif ($data->status == 'ditolak')
                        <i class="fa-solid fa-xmark"></i>
                    @else
                        <i class="fa-solid fa-arrows-spin"></i>
                    @endif
                    <h4 class="alamat">{{$data->alamat}}, {{$data->kecamatan}}, {{$data->kabkota}}, {{$data->provinsi}}</h4>
                    <h4 class="waktu">{{$data->created_at}}</h4>
                @endforeach
            </div>
        </div>
    </div>
    <script src="scriptf.js"></script>
</body>