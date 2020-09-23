<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        return view('admin.report.index');
    }

    public function user()
    {
        return view('admin.report.user');
    }
    public function transaksi()
    {
        return view('admin.report.transaksi');
    }
    public function kelas()
    {
        return view('admin.report.kelas');
    }
}
