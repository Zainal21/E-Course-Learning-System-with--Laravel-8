<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $this->var = [
            'title' => 'Admin - Dashboard',
            'user' => \App\Models\User::count(),
            'blog' => \App\Models\blog::count(),
            'transaksi' => \App\Models\transaksi::count(),
            'kelas' => \App\Models\kelas::count(),
        ];
        return view('admin.Dashboard', $this->var);
    }
}
