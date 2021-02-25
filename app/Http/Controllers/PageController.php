<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index (){
        return "Selamat Datang";
    }
    public function about(){
        return "Nama : Faris Ikhlasul Haq , Nim : 1941720062";
    }
    public function articles($id){
        return "Halaman dengan artikel dengan id $id";
    }
}
