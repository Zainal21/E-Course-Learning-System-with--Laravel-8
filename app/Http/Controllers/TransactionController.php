<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;
use App\Models\transaksi;
use App\Models\akses_kelas;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    public function index($slug)
    {
        return view('pages.transaksi.index',[
            'kelas' => kelas::where(['slug' => $slug])->first()
        ]);
    }

    public function transaction(Request $req)
    {
        $req->validate([
            'total_transaksi' => 'required',  
        ]);
        // dd($req->kelas_id);
        $file = $req->file('photo');
        $thumbnail = $file->move('images/transaksi/', time(). '-' . Str::limit(Str::slug($req->title), 50, '').'-'.strtotime('now').'.'.$file->getClientOriginalExtension());
        // input data ke table transaction
        $transaksi = transaksi::create([
                'kelas_id' => $req->kelas_id, 
                'user_id' => auth()->user()->id,
                'total_transaksi' => $req->total_transaksi, 
                'status'=> 'Pending',
                'photo' => $thumbnail
        ]);
        if($transaksi->total_transaksi === 0){
            akses_kelas::create([
                'kelas_id' => $transaksi->kelas_id,
                'user_id' => auth()->user()->id
            ]);
            return redirect()->route('success');
        }
        return redirect()->route('transaction.success');
    }
    public function success()
    {
        return view('success');
    }
}
