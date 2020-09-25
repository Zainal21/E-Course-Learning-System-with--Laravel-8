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
    $req->validate([
            'email' => 'required|min:4|max:255',
            'name' => 'required|min:4|max:255',
            'password' => 'required|min:4|max:255',
        ]);
        User::where(['id' => $id])->update([
            'name' => $req->name,
            'email' => $req->email,
            'password' => bcrypt($req->password),
            'role' => $req->role
        ]);
        return redirect('/site/admin/users')->with('status', 'Data User berhasil diubah dari Database');
        // update data from database
    }
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->back()->with('status','Data User Berhasil Dihapus dari Database');
        // delete data from database
    }
    public function profil($id)
    {
        $this->var = [
            'user' => User::findOrfail($id)
        ];
        return view('pages.profil.index',$this->var);
    }
    public function update_profil()
    {
        return $req->validate([
            'email' => 'required|min:4|max:255',
            'name' => 'required|min:4|max:255',
            'password' => 'required|min:4|max:255',
        ]);
        User::where(['id' => $id])->update([
            'name' => $req->name,
            'email' => $req->email,
            'password' => bcrypt($req->password),
        ]);
        return redirect()->back()->with('status', 'Profil Anda Berhasil Diubah');
        // for update profil
    }
}
