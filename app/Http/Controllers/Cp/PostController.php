<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\blog;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $this->var = [
            'title' => 'Admin - Post',
            'post' => blog::all()
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
        $req->validate([
            'title' => 'required|min:4|max:255',
            'isi' => 'required',
            'thumbnail' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);
        $gambar = $req->file('thumbnail');
        $name = time() .'-'. $gambar->getClientOriginalName();
        $gambar->move(public_path('images/posts'), $name);
        blog::create([
            'title' => $req->title,
            'author' => $req->author,
            'isi' => $req->isi,
            'thumbnail' => $name,
            'status' => $req->status,
            'slug' => Str::slug($req->title),
        ]);
        return redirect()->route('posts.index')->with('status', 'Data Post Berhasil Ditambahkan ke Database');
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
        $req->validate([
            'title' => 'required|min:4|max:255',
            'isi' => 'required',
            'thumbnail' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $blog =  blog::findOrfail($id);
        if( $gambar = $req->file('thumbnail')){
            $name =  time(). $gambar->getClientOriginalName();
            $thumbail = $gambar->move(public_path('images/kelas/'), $name);
        }
        blog::where(['id' => $id])->update([
            'title' => $req->title,
            'author' => $req->author,
            'isi' => $req->isi,
            'thumbnail' => !empty($thumbail) ? $name : $blog->thumbnail,
            'status' => $req->status,
            'slug' => Str::slug($req->title),
        ]);
        return redirect()->route('posts.index')->with('status', 'Data Post Berhasil Diubah dari Database');
        // update data  post
    }

    public function destroy($id)
    {
    
        blog::destroy($id);
        return redirect()->back()->with('status', 'Data Post Berhasil Dihapus dari Database');
        // delete data post
    }
}
