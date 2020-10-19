<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\transaksi;
use App\Models\akses_kelas;
use Illuminate\Support\Facades\Crypt;

class TransaksiController extends Controller
{
    public function index()
    {
        $this->var = [
            'title' => 'Admin - Transaksi',
            'transaksi' => transaksi::with(['kelas', 'user'])->get()
        ];
        return view('admin.transaksi.index', $this->var);
    }

    public function setStatus(Request $req, $id)
    {
         transaksi::where(['id' =>$id])->update([
            'status' => $req->status
        ]);
        $transaksi = transaksi::findOrfail($id);
        if($transaksi->status == 'sukses'){
            akses_kelas::create([
                'user_id' => $transaksi->user_id,
                'kelas_id' => $transaksi->kelas_id
            ]);
            return redirect()->back()->with('status', 'Data Status Transaksi Berhasil Diubah');
        }else{
            return redirect()->back()->with('status', 'Data Status Transaksi Berhasil Diubah');
        }
    }
    public function detail($id)
    {
        $this->var = [
            'transaksi' => transaksi::with(['kelas', 'user'])->fisrt()
        ];
        return view('admin.transaksi.detail');
    }
}
