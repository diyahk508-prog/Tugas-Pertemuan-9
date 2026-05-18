<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    private $kategori_list = [
        ['id'=>1,'nama'=>'Programming','deskripsi'=>'Buku coding','jumlah_buku'=>25],
        ['id'=>2,'nama'=>'Database','deskripsi'=>'Buku database','jumlah_buku'=>15],
        ['id'=>3,'nama'=>'Web Development','deskripsi'=>'Frontend & Backend','jumlah_buku'=>30],
    ];

    // ======================
    // INDEX (LIST KATEGORI)
    // ======================
    public function index()
    {
        return view('kategori.index', [
            'kategori_list' => $this->kategori_list
        ]);
    }

    // ======================
    // SHOW (DETAIL KATEGORI)
    // ======================
    public function show($id)
    {
        $kategori = collect($this->kategori_list)->firstWhere('id', $id);

        if (!$kategori) {
            abort(404);
        }

        return view('kategori.show', [
            'kategori' => $kategori
        ]);
    }

    // ======================
    // SEARCH KATEGORI
    // ======================
    public function search(Request $request)
    {
        $keyword = $request->keyword;

        $hasil = array_filter($this->kategori_list, function ($item) use ($keyword) {
            return stripos($item['nama'], $keyword) !== false;
        });

        return view('kategori.search', [
            'hasil' => $hasil,
            'keyword' => $keyword
        ]);
    }
}