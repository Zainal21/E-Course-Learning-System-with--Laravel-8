<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;
use App\Models\blog;
use DB;
class PagesController extends Controller
{
    public function index()
    {   
        return view('pages.index', [
            'kelas' => kelas::all(),
            'title' => 'Beranda | TemanBelajar',
            'blog' =>  blog::where(['status' => 'Publish'])->paginate(6),
        ]);
    }


    public function about()
    {
        return view('pages.about.index',['title' => 'Tentang Kami | Teman Belajar']);
    }

}
