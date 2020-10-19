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
            'level' => 'required', 
            'thumbnail' =>'required',
            'harga' => 'required', 
        ]);
        $file = $req->file('thumbnail');
        $thumbnail = $file->move('images/kelas/', time(). '-' . Str::limit(Str::slug($req->nama_kelas), 50, '').'-'.strtotime('now').'.'.$file->getClientOriginalExtension());
        // dd($gambar);
        $data = $req->all();
        $data['thumbnail'] = $thumbnail;
        $data['slug'] = Str::slug($req->nama_kelas);
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
            'harga' => 'required'
        ]);
        $kelas = kelas::findOrfail($id);
        if($req->hasFile('thumbnail')){
            if(file_exists($kelas->thumbnail)){
                unlink($kelas->thumbnail);
            }
            $file = $req->file('thumbnail');
            $image = $file->move('images/kelas/', time(). '-'. Str::limit(Str::slug($req->nama_kelas), 50, ''). '-' . strtotime('now'). '.'. $file->getClientOriginalExtension() );
        }
       $data = [
           'nama_kelas' => $req->nama_kelas,
           'deskripsi' => $req->deskripsi,
           'thumbnail' => !empty($image) ? $image : $kelas->thumbnail,
           'harga' => $req->harga,
           'slug' => Str::slug($req->nama_kelas)
       ];
       kelas::where(['id' => $id])->update($data);
        // dd($gambar);
        return redirect('/site/admin/kelas')->with('status', 'Data Kelas Berhasil Diubah dari Database');
    }

    public function destroy($id)
    {    
        $kelas = kelas::findOrfail($id);
        if(file_exists($kelas->thumbnail)){
            unlink($kelas->thumbnail);
            $kelas->delete();
            return redirect()->back()->with('status', 'Data Kelas Berhasil Dihapus dari Database');
        }

    }
}
