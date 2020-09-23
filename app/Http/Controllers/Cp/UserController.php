<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
      return view('admin.User.index');
    }
    public function create()
    {
        return view('admin.User.create');
    }

    public function store(Request $req)
    {
        // Store data user to database
    }

    public function edit()
    {
        return view('admin.User.edit');
    }
    public function update(Request $req, $id)
    {
        // update data from database
    }
    public function destroy()
    {
        // delete data from database
    }
    public function profil()
    {
        return view('pages.profil.index');
    }
    public function update_profil()
    {
        // for update profil
    }
}
