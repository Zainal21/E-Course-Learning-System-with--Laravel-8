<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kelas;

class ClassController extends Controller
{
    public function index()
    {
        $this->var = [
            'title' => 'Admin - Kelas',
            'kelas' => kelas::all()
        ];
        return view('admin.kelas.index', $this->var);
    }
    public function create()
    {
        $this->var = [
            'title' => 'Admin - Kelas-Create'
        ];
        return view('admin.kelas.create',$this->var);
    }
    public function store()
    {
        return redirect('/site/admin/kelas')->with('status', 'Data Kelas Berhasil Ditambahkan ke Database');
    }

    public function edit()
    {
        $this->var = [
            'title' => 'Admin - Kelas-Update'
        ];
        return view('admin.kelas.edit', $this->var);
    }
    public function update(Request $req,$id)
    {

        return redirect('/site/admin/kelas')->with('status', 'Data Kelas Berhasil Diubah dari Database');
    }

    public function destroy($id)
    {   
        kelas::destroy($id);
        return redirect()->back()->with('status', 'Data kelas Berhasil Dihapus dari Database');
    }
}
