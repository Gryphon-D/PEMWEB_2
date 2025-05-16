<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prodi;
class prodiController extends Controller
{
        public function show()
        {
        $prodi1 = new prodi('si', 'sistem informasi', 'misna');
        $prodi2 = new prodi('ti', 'teknik infomatika', 'tifany');
        $prodi3 = new prodi('bd', 'bisnis figital', 'amalia');
        $ar_prodi = [$prodi1, $prodi2, $prodi3];

            return view('prodi.index', 
            ['judul' => 'daftar prodi',
            'ar_prodi' => $ar_prodi,
        ]);
    }
}
