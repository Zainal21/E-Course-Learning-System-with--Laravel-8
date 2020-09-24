<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $this->var = [
            'title' => 'Admin - Transaksi'
        ];
        return view('admin.transaksi.index', $this->var);
    }
}
