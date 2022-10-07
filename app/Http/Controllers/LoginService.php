<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginService extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Punisher',
            'Lost',
            'Grey\'s Anatomy',
        ];

        return view('index')->with('series', $series);
    }

    public function checkPassword(Request $request)
    {        
        $nome = $request->input('nome');
        $senha = $request->input('password');  
        
        //$produtoAmounts = Products::where('id','=', $request->input('productOption'))->get();

        $series = Login::where('nome','=', $request->input('nome'))->get();
        $request->session()->put('loginUser', $nome);
        foreach ($series as $pp) {
            $pass=$pp->senha;
        }       
       
        $login = new Login();
        if ($login->hashPassword($senha) == $pass) {
            return redirect('/home');
        }else{
            return redirect('/login');
        } 
    }
}
