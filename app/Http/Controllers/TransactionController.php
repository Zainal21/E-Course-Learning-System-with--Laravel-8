<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;
use App\Models\transaksi;
class TransactionController extends Controller
{
    public function index($slug)
    {
        return view('pages.transaksi.index',[
            'kelas' => kelas::where(['slug' => $slug])->first()
        ]);
    }
}
