<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        $this->var = [
            'title' => 'Login | TemanBelajar'
        ];
        return view('pages.auth.login',$this->var);
    }
    public function process_login(Request $req)
    {
        $req->validate([
            'email' => 'required|min:4|max:255',
            'password' => 'required|min:4|max:255',
        ]);
        if(Auth::attempt(['email' =>$req->email, 'password'=>$req->password])){
            if(Auth::user()->role == 'admin'){
                return redirect('/site/admin');
            }else{
                return redirect('/site/profil');
            }
        }else{
          return redirect('/login')->with('error', 'Akses Ditolak, Email atau Password Anda Salah');
        }
    }

    public function register()
    {
        $this->var = [
            'title' => 'Register | TemanBelajar'
        ];
        return view('pages.auth.register',$this->var);
    }

    public function process_register(Request $req)
    {
        $req->validate([
            'name' => 'required|min:2|max:255',
            'email' => 'required',
            'password' => 'required|confirmed'
        ]);
        $data = $req->all();
        $data['password'] = bcrypt($req->password);
        $data['role'] = 'user';
        $data['ispremium'] = 1;
        User::create($data);
        return redirect('login')->with('status','Registrasi Berhasil, Silahkan Login Terlebih Dahulu!');
    }


    public function logout()
    {
        if(Auth::user()){
            Auth::logout();
            return redirect('/login');
        }else{
            return redirect()->back();
        }
    }
}
