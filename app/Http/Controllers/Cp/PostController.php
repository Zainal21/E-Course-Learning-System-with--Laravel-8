<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
class PostController extends Controller
{
    public function index()
    {
        $this->var = [
            'title' => 'Admin - Post'
        ];
        return view('admin.Post.index', $this->var);
    }

    public function create()
    {
        $this->var = [
            'title' => 'Admin - Post-Add'
        ];
        return view('admin.Post.create', $this->var);
    }


    public function store(Request $req)
    {
        return $req->validate([
            'title' => 'required|min:4|max:255',
            'isi' => 'required',
            'thumbnail' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);
        // store data to database
    }

    public function edit($id)
    {
        $dec = Crypt::Decrypt($id);
        $this->var = [
            'title' => 'Admin -Post-Edit',
            'post' => blog::findOrfail($dec)
        ];
        return view('admin.Post.edit', $this->var);
        // show from edit post
    }

    public function update(Request $req, $id)
    {
        // update data  post
    }

    public function destroy($id)
    {
        $gambar = blog::find($id);
        if($gambar){
            if(file_exists($gambar->thumnail)){
                unlink($gambar->thumbnail);
                blog::destroy($id);
                return redirect()->back()->with('status', 'Data Post Berhasil Dihapus dari Database');
            }else{
                echo "Gambar tidak ditemukan";
                exit;
            }
        }
        // delete data post
    }
}
