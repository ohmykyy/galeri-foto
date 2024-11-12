<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function tampilRegistrasi(){
        return view('registrasi');
    }

    function submitRegistrasi(Request $request){

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('login');

    }

    function tampilLogin(){
          return view('login');
    }

    function submitLogin(Request $request){
        $data = $request->only('email', 'password');

         if(Auth::attempt($data)) {
            $request->session()->regenerate();
            return view('album');
         } else{
            return redirect()->back()->with('gagal');
         }
    }
}




