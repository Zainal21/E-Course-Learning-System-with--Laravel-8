<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $this->var = [
            'title' => 'Admin - Dashboard'
        ];
        return view('admin.Dashboard', $this->var);
    }
}
