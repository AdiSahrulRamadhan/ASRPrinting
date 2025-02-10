<?php

namespace App\Http\Controllers;

use App\Models\Service;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('PTQuantumHRM.index');
    }

    public function profil()
    {
        return view('PTQuantumHRM.profil');
    }

    public function layanan()
    {
        return view('PTQuantumHRM.layanan'); 
    }

    public function informasi()
    {
        return view('PTQuantumHRM.informasi');
    }

    public function berita()
    {
        return view('PTQuantumHRM.berita'); 
    }
    public function galeri()
    {
        return view('PTQuantumHRM.galeri'); 
    }
    public function kontak()
    {
        return view('PTQuantumHRM.kontak'); 
    }
}



