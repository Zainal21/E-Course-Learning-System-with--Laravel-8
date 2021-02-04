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
    public function materi_kelas($slug)
    {
        $data = kelas::where(['slug' => $slug])->first();
        if(auth()->user()){
                $data['materi'] = materi_kelas::with('kelas')->where(['kelas_id' => $data->id])->first();
                $data['list_materi'] = materi_kelas::where(['kelas_id' => $data->id])->get();
                $data['title'] = 'Materi Kelas | TemanBelajar';
                $data['akses_kelas'] = akses_kelas::where(['user_id' => auth()->user()->id])->where(['kelas_id' => $data->id])->first();
                $data['kelas'] = kelas::all();
                return view('pages.kelas.materi-kelas', $data);  
        }else{
                $data['materi'] = materi_kelas::with('kelas')->where(['kelas_id' => $data->id])->first();
                $data['list_materi'] = materi_kelas::where(['kelas_id' => $data->id])->get();
                $data['title'] = 'Materi Kelas | TemanBelajar';
                $data['kelas'] = kelas::all();
                return view('pages.kelas.materi-kelas', $data);  
        }
    }

    public function mulai_kelas($kelas_id,$id)
    {
        $data = kelas::where(['id' => $kelas_id])->first();
        return view('pages.kelas.play-kelas',[
            'materi' => materi_kelas::where(['kelas_id' => $data->id])->get(),
            'daftar_materi' => materi_kelas::findOrfail($id),
            'title' => 'Mulai Belajar | TemanBelajar'
        ]);
    }
}

//  testing
// $this->var = [
//     'materi' => materi_kelas::where(['kelas_id' => $data->id])->get(),
//     'list_materi' => materi_kelas::where(['id' => $id])->get(),
// ];
// dd($this->var);
// dd(materi_kelas::where(['id' => $id])->get());