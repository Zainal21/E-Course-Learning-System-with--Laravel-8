<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $this->var = [
            'title' => 'Admin - Setting'
        ];
        return view('admin.Settings.index', $this->var);
    }
    public function update(Request $req)
    {
       return $req->validate([
            'Nama_website' => 'required',
            'tagline' => 'required',
            'alamat' => 'required',
            'kode_analitic' => 'required',
            'deskripsi' => 'required',
        ]);
        // update data setting from database
    }
}
