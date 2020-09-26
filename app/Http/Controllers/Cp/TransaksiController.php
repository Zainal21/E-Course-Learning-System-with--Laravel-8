<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\transaksi;
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
}
