@extends('layouts.app')

@section('content')

<h2>Daftar Kategori</h2>

<div class="row">
@foreach($kategori_list as $k)
    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-body">
                <h5>{{ $k['nama'] }}</h5>
                <p>{{ $k['deskripsi'] }}</p>
                <p>Jumlah buku: {{ $k['jumlah_buku'] }}</p>

                <a href="{{ route('kategori.show', $k['id']) }}" class="btn btn-primary">
                    Detail
                </a>
            </div>
        </div>
    </div>
@endforeach
</div>

@endsection