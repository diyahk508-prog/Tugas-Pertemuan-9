<!DOCTYPE html>
<html>
<head>
    <title>Daftar Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h2>Daftar Anggota Perpustakaan</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($anggota_list as $key => $a)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $a['kode'] }}</td>
            <td>{{ $a['nama'] }}</td>
            <td>{{ $a['email'] }}</td>
            <td>{{ $a['status'] }}</td>
            <td>
                <a href="/anggota/{{ $a['id'] }}" class="btn btn-primary btn-sm">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>