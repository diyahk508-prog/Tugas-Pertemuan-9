@extends('layouts.app')

@section('content')

<nav>
    <a href="{{ route('kategori.index') }}">Home</a> / {{ $kategori['nama'] }}
</nav>

<h2>{{ $kategori['nama'] }}</h2>
<p>{{ $kategori['deskripsi'] }}</p>

<h4>Buku dalam kategori ini</h4>

<table class="table table-bordered">
    <tr>
        <th>Judul Buku</th>
        <th>Stok</th>
        <th>Jenis Buku</th>
    </tr>
    <tr>
        <td>Progamming</td>
        <td>25</td>
        <td>coding</td>
    </tr>
    <tr>
        <td>Database</td>
        <td>15</td>
        <td>dataase</td>
    <tr>
        <td>Web Deevelopment</td>
        <td>30</td>
        <td>frontend & backend</td>
    </tr>
</tr>
</table>

@endsection