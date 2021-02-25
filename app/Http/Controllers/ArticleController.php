<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index ($id){
        return "Halaman dengan artikel dengan id $id";
    }
}
