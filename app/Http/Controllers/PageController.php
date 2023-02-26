<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        echo "Selamat Datang!"
    }
    
    public function about()
    {
        echo "Nama : Andi Dwi Prastyo<br>";
        echo "NIM  : 2141720046";
    }

    public function article($id)
    {
        echo "Halaman Artikel dengan ID $id"
    }
}
