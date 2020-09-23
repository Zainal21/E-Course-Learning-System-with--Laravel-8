<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('admin.Post.index');
    }

    public function create()
    {
        return view('admin.Post.create');
    }


    public function store(Request $req)
    {
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
