<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\materi_kelas;
use App\Models\kelas;
use DB;
class PagesController extends Controller
{
    public function index()
    {
        
        return view('pages.index', [
            'kelas' => kelas::all()
        ]);
    }

    // testing relasi
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
