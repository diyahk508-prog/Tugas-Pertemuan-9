<div class="card shadow-sm mb-3">
    <div class="card-body">

        <div class="text-center mb-2">
            <h1>📚</h1>
        </div>

        <h5>{{ $buku->judul }}</h5>

        <p>
            <strong>Pengarang:</strong>
            {{ $buku->pengarang }}
        </p>

        <p>
            <strong>Harga:</strong>
            Rp {{ number_format($buku->harga, 0, ',', '.') }}
        </p>

        <p>
            <strong>Stok:</strong>
            {{ $buku->stok }}
        </p>

        <span class="badge bg-primary">
            {{ $buku->kategori }}
        </span>

        @if($buku->stok > 0)
            <span class="badge bg-success">
                Tersedia
            </span>
        @else
            <span class="badge bg-danger">
                Habis
            </span>
        @endif

        @if($showActions)

            <hr>

            <a href="{{ route('buku.show', $buku->id) }}"
               class="btn btn-info btn-sm">
               Detail
            </a>

            <a href="{{ route('buku.edit', $buku->id) }}"
               class="btn btn-warning btn-sm">
               Edit
            </a>

        @endif

    </div>
</div>