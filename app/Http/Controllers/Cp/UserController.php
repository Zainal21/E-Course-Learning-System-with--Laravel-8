<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
class UserController extends Controller
{
    public function index()
    {
        
        $this->var = [
            'user' => User::all(),
            'title' => 'Admin - User'
        ];
      return view('admin.User.index', $this->var);
    }
    public function create()
    {
        return view('admin.User.create');
    }

    public function edit($id)
    {
      
        $_id = Crypt::Decrypt($id);
        $this->var = [
            'user' => User::findOrfail($_id),
            'title' => 'Admin - User-Update'
        ];
        return view('admin.User.edit', $this->var);
    }
    public function update(Request $req, $id)
    {
       return $req->validate([
            'email' => 'required|min:4|max:255',
            'name' => 'required|min:4|max:255',
            'password' => 'required|min:4|max:255',
        ]);
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
