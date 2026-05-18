@extends('layouts.app')

@section('content')

<h2>Search Kategori</h2>

<form method="GET" action="">
    <input type="text" name="keyword" value="{{ $keyword }}" class="form-control mb-2">
    <button class="btn btn-primary">Search</button>
</form>

<hr>

<h4>Hasil pencarian: "{{ $keyword }}"</h4>

@if(count($hasil) > 0)
    <div class="row">
    @foreach($hasil as $k)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>
                        {!! str_ireplace($keyword, "<mark>$keyword</mark>", $k['nama']) !!}
                    </h5>
                    <p>{{ $k['deskripsi'] }}</p>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@else
    <p>Tidak ditemukan</p>
@endif

@endsection