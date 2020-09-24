<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    public function login()
    {

        return view('pages.auth.login');
    }
    public function process_login(Request $req)
    {
        $req->validate([
            'email' => 'required|min:4|max:255',
            'password' => 'required|min:4|max:255',
        ]);
        // dd(User::all());
        if(Auth::attempt(['email' =>$req->email, 'password'=>$req->password])){
            if(Auth::user()->role == 'admin'){
                return redirect('/site/admin');
            }else{
                return redirect('/profil');
            }
        }else{
            redirect('/login')->with('status', 'Akses Ditolak, Email atau Password Anda Salah');
        }
    }

    public function register()
    {
        return view('pages.auth.register');
    }

    public function logout()
    {
        if(Auth::user()){
            Auth::logout();
            return redirect('/');
        }else{
            return redirect()->back();
        }
    }
}
