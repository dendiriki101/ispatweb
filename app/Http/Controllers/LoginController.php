<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('admin.login.index',[
            'url' => 'login',
            'class' => '',
            'navbar' =>'hero_area',
            'sub' => 'AM'
        ]);
    }

    public function authenticate(Request $request ){
        $credentials = $request->validate([
            'email' => ['required','email:dns'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/admin/english');
        }

        return back()->with('loginError','Maaf Email atau Kata Sandi Salah');
    }

    public function logout(Request $request){
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('home');
    }
}


