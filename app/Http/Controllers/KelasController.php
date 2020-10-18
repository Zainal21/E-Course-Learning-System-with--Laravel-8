<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;
use App\Models\materi_kelas;
class KelasController extends Controller
{
    public function index()
    {
        return view('pages.kelas.index',[
            'kelas'=> kelas::paginate(6)
        ]);
    }
    public function kelas_detail($id)
    {
        $this->var = [
            'kelas' => kelas::with('materoi_kelas')->where(['id' => $id])->first()
        ];
        return view('pages.kelas.kelas-daftar');
    }

    public function materi_kelas($slug)
    {
        $data = kelas::where(['slug' => $slug])->first();
        // dd($data);
        return view('pages.kelas.materi-kelas', [
            'materi' => materi_kelas::with('kelas')->where(['kelas_id' => $data->id])->first(),
            'list_materi' => materi_kelas::where(['kelas_id' => $data->id])->get()
        ]);
    }
}
