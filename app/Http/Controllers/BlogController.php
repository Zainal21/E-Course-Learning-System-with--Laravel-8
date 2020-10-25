<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class BlogController extends Controller
{
    public function index()
    {
        $this->var = [
            'blog' => blog::where(['status' => 'Publish'])->paginate(6),
            'title' => 'Blog | TemanBelajar'
        ];
        return view('pages.blog.index', $this->var);
    }
    public function blog_detail($slug)
    {
        $this->var = [
            'blog_detail' => blog::where(['slug' => $slug])->first(),
            'title' => 'Detail Blog | TemanBelajar'
        ];
        return view('pages.blog.blog-detail', $this->var);
    }

}
