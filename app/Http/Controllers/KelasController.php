<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;
use App\Models\materi_kelas;
use App\Models\akses_kelas;

class KelasController extends Controller
{
    public function index()
    {
        return view('pages.kelas.index',[
            'kelas'=> kelas::paginate(6),
            'title' => 'Daftar Kelas | TemanBelajar'
        ]);
    }
    // public function kelas_detail($id)
    // {
    //     $this->var = [
    //         'kelas' => kelas::with('materoi_kelas')->where(['id' => $id])->first()
    //     ];
    //     return view('pages.kelas.kelas-daftar',$this->var);
    // }

    public function materi_kelas($slug)
    {
        $data = kelas::where(['slug' => $slug])->first();
        // materi_kelas::with('kelas')->where(['kelas_id' => $data->id])->first();
        $data = [
            'materi' => materi_kelas::with('kelas')->where(['kelas_id' => $data->id])->first(),
            'list_materi' => materi_kelas::where(['kelas_id' => $data->id])->get(),
            'title' => 'Materi Kelas | TemanBelajar',
            'akses_kelas' => akses_kelas::where(['user_id' => auth()->user()->id])->where(['kelas_id' => $data->id])->first()
        ];
        // dd($data->id);
        return view('pages.kelas.materi-kelas', $data);  
    }

    public function mulai_kelas($kelas_id,$id)
    {
        $data = kelas::where(['id' => $kelas_id])->first();
        // $this->var = [
        //     'materi' => materi_kelas::where(['kelas_id' => $data->id])->get(),
        //     'list_materi' => materi_kelas::where(['id' => $id])->get(),
        // ];
        // dd($this->var);
        // dd(materi_kelas::where(['id' => $id])->get());
        return view('pages.kelas.play-kelas',[
            'materi' => materi_kelas::where(['kelas_id' => $data->id])->get(),
            'daftar_materi' => materi_kelas::findOrfail($id),
            'title' => 'Mulai Belajar | TemanBelajar'
        ]);
    }

    // public function course_playing($id)
    // {
    //     return view('pages.kelas.materi-kelas', [
    //         'materi' => materi_kelas::with('kelas')->where(['kelas_id' => $data->id])->first(),
    //         'list_materi' => materi_kelas::where(['kelas_id' => $data->id])->get()
    //     ]);
    // }
}
