<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return "Ini merupakan Halaman Awal Website ini menggunankan Home Controller";
    }

    public function products(){
        return "Website Masih Tahap Pembangunan, Tapi Ini Merupakan Halamn Products Ya";
    }
    public function news($id){
        return "Anda Berada Halaman Berita Dengan Tema <b> $id </b> Selamat Mendapat Ilmu Baru Ya";
    }
}
