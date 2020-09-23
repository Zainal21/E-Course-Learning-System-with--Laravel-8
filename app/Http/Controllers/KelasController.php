<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        return view('pages.kelas.index');
    }
    public function kelas_detail()
    {
        return view('pages.kelas.kelas-detail');
    }

    public function materi_kelas()
    {
        return view('pages.kelas.materi-kelas');
    }
}
