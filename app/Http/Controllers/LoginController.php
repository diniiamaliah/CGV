<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    //
    public function index(){
        if($user = Auth::user()){
            if($user->level == '1'){
                return redirect()->intended('admin.index');
            }elseif($user->level= '2'){
                return redirect()->intended('userview');
            }
        }
        return view('login');
    }
    public function proses(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required',
        ],
    [
        'username.required'=>'username tidak boleh kosong',
    ]);
    $credentials = $request->only('username','password');
    if(Auth::attempt($credentials)){
        $request->session()->regenerate();
        $user = Auth::user();
        if($user->level == '1'){
            return redirect()->intended('admin.index');
        }elseif($user->level= '2'){
            return redirect()->intended('userview');
        }
        return redirect()->intended('/');
    }
        return back()->withErrors([
            'username'=>'maaf username anda salah',
        ])->onlyInput('username');
    }
    public function logout(Request $request):RedirectResponse
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
}
}
