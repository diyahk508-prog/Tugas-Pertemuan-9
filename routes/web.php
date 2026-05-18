<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerpustakaanController;
use App\Http\Controllers\KategoriController;

// Route default
Route::get('/', function () {
    return view('welcome');
});

// Route sederhana
Route::get('/hello', function () {
    return 'Hello dari Laravel!';
});

// Route HTML
Route::get('/info', function () {
    return '<h1>Sistem Perpustakaan</h1><p>Selamat datang!</p>';
});

// Route JSON
Route::get('/buku', function () {
    return [
        'judul' => 'Laravel Programming',
        'pengarang' => 'John Doe',
        'harga' => 150000
    ];
});


Route::get('/search/{kategori}/{keyword}', function ($kategori, $keyword) {
    return "Cari buku kategori: $kategori dengan keyword: $keyword";
});

Route::get('/anggota', function () {
    $anggota_list = [
        [
            'id' => 1,
            'kode' => 'AGT-001',
            'nama' => 'Budi Santoso',
            'email' => 'budi@email.com',
            'telepon' => '081234567890',
            'alamat' => 'Jakarta',
            'status' => 'Aktif'
        ],
        [
            'id' => 2,
            'kode' => 'AGT-002',
            'nama' => 'Siti Aminah',
            'email' => 'siti@email.com',
            'telepon' => '082345678901',
            'alamat' => 'Bandung',
            'status' => 'Aktif'
        ],
        [
            'id' => 3,
            'kode' => 'AGT-003',
            'nama' => 'Andi Wijaya',
            'email' => 'andi@email.com',
            'telepon' => '083456789012',
            'alamat' => 'Surabaya',
            'status' => 'Nonaktif'
        ],
        [
            'id' => 4,
            'kode' => 'AGT-004',
            'nama' => 'Rina Sari',
            'email' => 'rina@email.com',
            'telepon' => '084567890123',
            'alamat' => 'Medan',
            'status' => 'Aktif'
        ],
        [
            'id' => 5,
            'kode' => 'AGT-005',
            'nama' => 'Dedi Kurniawan',
            'email' => 'dedi@email.com',
            'telepon' => '085678901234',
            'alamat' => 'Yogyakarta',
            'status' => 'Aktif'
        ]
    ];

    return view('anggota.index', compact('anggota_list'));
});

Route::get('/anggota/{id}', function ($id) {
    return view('anggota.show', compact('id'));
});

// =======================
// CONTROLLER ROUTES
// =======================

Route::get('/perpustakaan', [PerpustakaanController::class, 'index']);
Route::get('/buku/{id}', [PerpustakaanController::class, 'show']);
Route::get('/about', [PerpustakaanController::class, 'about']);
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/{id}', [KategoriController::class, 'show'])->name('kategori.show');
Route::get('/kategori/search/{keyword}', [KategoriController::class, 'search'])->name('kategori.search');
