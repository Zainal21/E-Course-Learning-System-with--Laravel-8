<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\transaksi;
use App\Models\akses_kelas;
use App\Mail\notification_success;
use Illuminate\Support\Facades\Crypt;
use Mail;

class TransaksiController extends Controller
{
    public function index()
    {
        $this->var = [
            'title' => 'Admin - Transaksi',
            'transaksi' => transaksi::with(['kelas', 'user'])->get()
        ];
        return view('admin.transaksi.index', $this->var);
        // dd($this->var);
    }

    public function setStatus(Request $req, $id)
    {
        // set Status by request params
         transaksi::where(['id' =>$id])->update([
            'status' => $req->status
        ]);
        $transaksi = transaksi::with(['kelas', 'user'])->where(['id' => $id])->first();
        // check transacation status
        if($transaksi->status == 'sukses'){
            akses_kelas::create([
                'user_id' => $transaksi->user_id,
                'kelas_id' => $transaksi->kelas_id
            ]);
            // send mail to users
            Mail::to($transaksi->user)->send(new notification_success($transaksi));
            return redirect()->back()->with('status', 'Data Status Transaksi Berhasil Diubah');
        }else{
            // redirected
            return redirect()->back()->with('status', 'Data Status Transaksi Berhasil Diubah');
        }
    }

    // testing
    // public function detail($id)
    // {
    //     $this->var = [
    //         'transaksi' => transaksi::with(['kelas', 'user'])->first()
    //     ];
    //     return view('admin.transaksi.detail');
    // }
}
