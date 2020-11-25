<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $this->vars = [
            'title' => 'Admin- Report',
        ];
        return view('admin.report.index', $this->vars);
    }

    public function user()
    {
        $this->vars = [
        'user' => \App\Models\User::all(),
        'title' => 'Admin- Report-User'
        ];
        return view('admin.report.user',$this->vars);
    }
    public function transaksi()
    {
        $this->vars = [
            'transaksi' => \App\Models\transaksi::all(),
            'title' => 'Admin- Report-Transaksi'    
        ];
        return view('admin.report.transaksi',$this->vars);
    }
    public function kelas()
    {
        $this->vars = [
            'kelas' => \App\Models\kelas::all(),
            'title' => 'Admin- Report-Kelas'
        ];
        return view('admin.report.kelas', $this->vars);
    }
    public function printkelas()
    {
        $this->vars = [
            'kelas' => \App\Models\kelas::all()
        ];
        return view('admin.report.class.index', $this->vars);
    }

    public function printtransaction()
    {
        $this->vars = [
            'transaksi' => \App\Models\transaksi::all(),
           
        ];
        return view('admin.report.transcation.index',$this->vars);
    }
    public function printuser()
    {
        $this->vars = [

            'user' => \App\Models\User::all(),
        ];
        return view('admin.report.user.index',$this->vars);
    }
}
