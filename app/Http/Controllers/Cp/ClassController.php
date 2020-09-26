<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\kelas;
use Illuminate\Support\Str;

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
    public function store(Request $req)
    {
        $req->validate([
            'nama_kelas' => 'required',
            'deskripsi' => 'required', 
            'thumbnail' =>'required' , 
        ]);
        $gambar = $req->file('thumbnail');
        // dd($gambar);
        $name = time() . $gambar->getClientOriginalName();
        $gambar->move(public_path('images/kelas/'), $name);
        $data = $req->all();
        $data['thumbnail'] = $name;
        $data['slug'] = Str::slug($req->title);
        kelas::create($data);
        return redirect('/site/admin/kelas')->with('status', 'Data Kelas Berhasil Ditambahkan ke Database');
    }
    public function edit($id)
    {
        $dec = Crypt::Decrypt($id);
        // dd($dec);
        $this->var = [
            'title' => 'Admin - Kelas-Update',
            'kelas' => kelas::findOrfail($dec)
        ];
        return view('admin.kelas.edit', $this->var);
    }
    public function update(Request $req,$id)
    {
        $req->validate([
            'nama_kelas' => 'required',
            'deskripsi' => 'required', 
        ]);
       if( $gambar = $req->file('thumbnail')){
           $name =  time(). $gambar->getClientOriginalName();
           $thumbail = $gambar->move(public_path('images/kelas/'), $name);
       }
       $kelas = kelas::findOrfail($id);
       $data = [
           'nama_kelas' => $req->nama_kelas,
           'deskripsi' => $req->deskripsi,
           'thumbnail' => !empty($thumbail) ? $name : $kelas->thumbnail,
           'slug' => Str::slug($req->title)
       ];
       kelas::where(['id' => $id])->update($data);
        // dd($gambar);
        return redirect('/site/admin/kelas')->with('status', 'Data Kelas Berhasil Diubah dari Database');
    }

    public function destroy($id)
    {    
        kelas::destroy($id);
        return redirect()->back()->with('status', 'Data Kelas Berhasil Dihapus dari Database');

    }
}
