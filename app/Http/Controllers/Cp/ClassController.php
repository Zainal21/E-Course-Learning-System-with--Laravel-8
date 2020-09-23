<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        return view('admin.kelas.index');
    }
    public function create()
    {
        return view('admin.kelas.create');
    }
    public function store()
    {
        // 
    }

    public function edit()
    {
        return view('admin.kelas.edit');
    }
    public function update()
    {
        return view('admin.kelas.update');
    }

    public function destroy()
    {

    }
}
