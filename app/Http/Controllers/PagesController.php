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

    // testing relationship
    // public function kelas_akes()
    // {
    // //   $data =   DB::table('materi_kelas')
    // //         ->join('kelas', 'kelas.id','=', 'materi_kelas.kelas_id')
    // //         ->select('kelas.nama_kelas', 'materi_kelas.nama_materi')
    // //         ->get();
    // //         dd($data);
    //     $materi = materi_kelas::with('kelas')->get();
    //     return view('coba', ['materi' => $materi]);
    //     // dd($materi->kelas->nama_kelas);
    // }
 
}
