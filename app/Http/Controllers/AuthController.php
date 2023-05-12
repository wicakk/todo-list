<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    public function login()
    {
        return view('login');
    }
    public function loginPost(Request $request)
    {
       $credetials =[
        'email' => $request->email,
        'password' => $request->password,
       ];
       if(Auth::attempt($credetials)){
            return redirect('/template')->with('success', 'login success');
       }
       return back()->with('error', 'Error email or Password');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
