<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $this->vars = [
            'title' => 'Admin- Report'
        ];
        return view('admin.report.index', $this->vars);
    }

    public function user()
    {
        $this->vars = [
        'title' => 'Admin- Report-User'
        ];
        return view('admin.report.user',$this->vars);
    }
    public function transaksi()
    {
        $this->vars = [
            'title' => 'Admin- Report-Transaksi'
        ];
        return view('admin.report.transaksi',$this->vars);
    }
    public function kelas()
    {
        $this->vars = [
            'title' => 'Admin- Report-Kelas'
        ];
        return view('admin.report.kelas', $this->vars);
    }
}
