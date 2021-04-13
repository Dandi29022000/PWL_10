<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return "Selamat Datang";
    }

    public function about() {
        return "1941720009 - Dandi Agung Setiawan";
    }

    public function artikel($id) {
        return 'Halaman Artikel ' .$id;
    }
}
