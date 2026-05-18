<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark px-3">
    <a class="navbar-brand" href="{{ route('kategori.index') }}">Kategori</a>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>