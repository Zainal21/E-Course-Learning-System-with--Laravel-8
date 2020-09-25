<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use App\Models\setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $this->var = [
            'title' => 'Admin - Setting',
            'setting' => setting::find(1)
        ];
        return view('admin.Settings.index', $this->var);
    }
    public function update(Request $req,$id)
    {
       return $req->validate([
            'Nama_website' => 'required',
            'tagline' => 'required',
            'alamat' => 'required',
            'kode_analitic' => 'required',
            'deskripsi' => 'required',
        ]);
        setting::where(['id' => $id])->update([
            'Nama_website' => $req->Nama_website,
            'tagline' => $req->tagline,
            'alamat' => $req->alamat,
            'kode_analitic' => $req->kode_analitic,
            'deskripsi' => $req->deskripsi,
        ]);
        return redirect()->back()->with('status', 'Data Setting Berhasil diperbarui dari database');
        // update data setting from database
    }
}
