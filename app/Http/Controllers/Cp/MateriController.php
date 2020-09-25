<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\materi_kelas;
use App\Models\kelas;

class MateriController extends Controller
{
    public function index()
    {
        $this->var = [
            'title' => 'Admin - Materi Kelas',
            'materi' => materi_kelas::with('kelas')->get()
        ];
        return view('admin.materi_kelas.index', $this->var);
    }

    public function create()
    {
        $this->var = [
            'title' => 'Admin - Materi Kelas - Create',
            'kelas' => kelas::all()
        ];
        return view('admin.materi_kelas.create', $this->var);
    }

    public function store(Request $req)
    {
         $req->validate([
            'kelas_id' => 'required',
            'nama_materi' => 'required',
            'link_materi' => 'required'
        ]);
        
        materi_kelas::create($req->all());
        return redirect()->route('materi.index')->with('status', 'Data Materi Kelas Berhasil ditambahkan ke database');
    }

    public function edit($id)
    {
        $dec = Crypt::Decrypt($id);
        $this->var = [
            'title' => 'Admin -Materi -Edit',
            'materi' => materi_kelas::findOrfail($dec),
            'kelas' => kelas::all()
        ];
         return view('admin.materi_kelas.edit',$this->var);
    }

    public function update(Request $req,$id)
    {
         $req->validate([
            'kelas_id' => 'required',
            'nama_materi' => 'required',
            'link_materi' => 'required'
        ]);
        
        materi_kelas::where(['id' => $id])->update([
            'kelas_id' => $req->kelas_id,
            'nama_materi' => $req->nama_materi,
            'link_materi' => $req->link_materi
        ]);
        return redirect()->route('materi.index')->with('status', 'Data Materi Kelas Berhasil diubah dari database');
    }

    public function destroy($id)
    {
        materi_kelas::destroy($id);
        return redirect()->route('materi.index')->with('status', 'Data Materi Kelas Berhasil dihapus dari database');
    }
}
