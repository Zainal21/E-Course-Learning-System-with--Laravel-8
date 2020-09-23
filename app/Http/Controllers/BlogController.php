<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('pages.blog.index');
    }
    public function blog_detail()
    {
        return view('pages.blog.blog-detail');
    }

}
