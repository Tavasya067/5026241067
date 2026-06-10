<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaosController extends Controller
{
    //
    public function index()
    {
        // mengambil data dari table kaos dengan pagination
        $kaos = DB::table('kaos')->paginate(10);

        // mengirim data kaos ke view index
        return view('indexkaos', ['kaos' => $kaos]);
    }

    public function tambah()
    {
        // memanggil view tambah
        return view('tambahkaos');
    }

    // method untuk insert data ke table kaos
    public function store(Request $request)
    {
        // insert data ke table kaos
        DB::table('kaos')->insert([
            'merkkaos' => $request->merkkaos,
            'stockkaos' => $request->stockkaos,
            'tersedia' => $request->has('tersedia') ? 'Y' : 'T'
        ]);
        // alihkan halaman ke halaman kaos
        return redirect('/kaos');
    }

    // method untuk edit data kaos
    public function edit(int $id)
    {
        // mengambil data kaos berdasarkan id yang dipilih
        $kaos = DB::table('kaos')->where('kodekaos', $id)->get();
        // passing data kaos yang didapat ke view edit.blade.php
        return view('editkaos', ['kaos' => $kaos]);
    }

    // update data kaos
    public function update(Request $request)
    {
        // update data kaos
        DB::table('kaos')->where('kodekaos', $request->id)->update([
            'merkkaos' => $request->merkkaos,
            'stockkaos' => $request->stockkaos,
            'tersedia' => $request->has('tersedia') ? 'Y' : 'T'
        ]);
        // alihkan halaman ke halaman kaos
        return redirect('/kaos');
    }

    // method untuk hapus data kaos
    public function hapus(int $id)
    {
        // menghapus data kaos berdasarkan id yang dipilih
        DB::table('kaos')->where('kodekaos', $id)->delete();

        // alihkan halaman ke halaman kaos
        return redirect('/kaos');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari; // request: class untuk menampung inputan dari user

        // mengambil data dari table kaos sesuai pencarian data
        $kaos = DB::table('kaos')
            ->where('merkkaos', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data kaos ke view index
        return view('indexkaos', ['kaos' => $kaos]);
    }
}
