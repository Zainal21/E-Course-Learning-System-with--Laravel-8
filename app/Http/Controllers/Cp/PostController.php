<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
            'isi' => 'required' ,
        ]);
        // store data to database
    }

    public function edit()
    {
        // show from edit post
    }

    public function update(Request $req, $id)
    {
        // update data  post
    }

    public function destroy($id)
    {
        // delete data post
    }
}
