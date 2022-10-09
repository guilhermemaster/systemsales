<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginService extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }

    public function checkPassword(Request $request)
    {        
        $name = $request->input('name');
        $password = $request->input('password');      

        $logins = Login::where('nome','=', $request->input('name'))->get();
        $request->session()->put('loginUser', $name);
        foreach ($logins as $login) {
            $passHash=$login->senha;
        }       

        if ($login->hashPassword($password) == $passHash) {
            return redirect('/home');
        }else{
            return redirect('/login');
        } 
    }
}
