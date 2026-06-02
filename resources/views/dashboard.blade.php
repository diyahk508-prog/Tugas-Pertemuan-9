<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Perpustakaan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h1 class="mb-4">Dashboard Perpustakaan</h1>

    <div class="row">

        <div class="col-md-4">
            <div class="card text-center mb-3">
                <div class="card-body">
                    <h5>Total Buku</h5>
                    <h2>{{ $totalBuku }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center mb-3">
                <div class="card-body">
                    <h5>Buku Tersedia</h5>
                    <h2>{{ $bukuTersedia }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center mb-3">
                <div class="card-body">
                    <h5>Buku Habis</h5>
                    <h2>{{ $bukuHabis }}</h2>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-md-4">
            <div class="card text-center mb-3">
                <div class="card-body">
                    <h5>Total Anggota</h5>
                    <h2>{{ $totalAnggota }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center mb-3">
                <div class="card-body">
                    <h5>Anggota Aktif</h5>
                    <h2>{{ $anggotaAktif }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center mb-3">
                <div class="card-body">
                    <h5>Anggota Nonaktif</h5>
                    <h2>{{ $anggotaNonaktif }}</h2>
                </div>
            </div>
        </div>

    </div>

    <hr>

    <h3>5 Buku Terbaru</h3>

    <ul class="list-group mb-4">
        @foreach($bukuTerbaru as $buku)
            <li class="list-group-item">
                {{ $buku->judul }}
            </li>
        @endforeach
    </ul>

    <h3>5 Anggota Terbaru</h3>

    <ul class="list-group mb-4">
        @foreach($anggotaTerbaru as $anggota)
            <li class="list-group-item">
                {{ $anggota->nama }}
            </li>
        @endforeach
    </ul>

    <h3>Quick Links</h3>

    <a href="{{ route('buku.index') }}"
       class="btn btn-primary">
       Data Buku
    </a>

    <a href="{{ route('anggota.index') }}"
       class="btn btn-success">
       Data Anggota
    </a>

</div>

</body>
</html>