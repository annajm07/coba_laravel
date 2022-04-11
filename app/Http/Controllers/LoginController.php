<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index',[
            'title'=>'Login',
            'active'=>'Login'
        ]);
    }

    public function auth(Request $request){
        $data = $request->validate([
                'email'=>'required|email',
                'password'=>'required|min:4'
        ]);

      if(Auth::attempt($data)){
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
      }

     return back()->with(['error'=>'Login Failed!']);
    }


    public function logout(Request $request){
        Auth::logout();
        
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');

    }
}
