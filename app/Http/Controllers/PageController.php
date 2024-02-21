<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Nama : Muhammad Kemal Nugraha<br>NIM : 2241720044';
    }

    public function articles($id){
        return 'Halaman Artikel dengan ID '.$id;
    }
    
}
