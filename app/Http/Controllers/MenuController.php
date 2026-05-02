<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function index(){ //Method index untuk menampilkan halaman menu utama yang berisi kumpulan link tugas pertemuan 1 - 6
        return view('menu');
    }

    public function idx(){ //Method idx untuk menampilkan halaman index, begitu pula untuk halaman lainnya
        return view('index'); //Penamaan 'index' harus konsisten dengan nama file blade, begitu pula untuk halaman lainnya
    }

    public function pagi1(){
        return view('pagination.page1');
    }

    public function pagi2(){
        return view('pagination.page2');
    }

    public function pagi3(){
        return view('pagination.page3');
    }

    public function int(){
        return view('intro');
    }

    public function linktr(){
        return view('linktree');
    }

    public function berita1(){
        return view('news');
    }

    public function berita2(){
        return view('news1');
    }

    public function pert4(){
        return view('pertemuan4');
    }

    public function pert5(){
        return view('pertemuan5');
    }

    public function respons(){
        return view('responsive');
    }

    public function temp(){
        return view('template');
    }

}
