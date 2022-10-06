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

        
        // dd($nome, $senha);
        // $login = new Login();
        // dd($login->hashPassword('carro'));
        $series = Login::where('nome','=', 'guilherme@gmail.com')->get();
        $request->session()->put('loginUser', $nome);
        foreach ($series as $pp) {
            $pass=$pp->senha;
        }
        
        // dd($series);
        $login = new Login();
        if ($login->hashPassword($senha) == $pass) {
            return redirect('/home');
        }else{
            return redirect('/login');
        } 
            //7e84b442f353cc4c27e90b0271e82b03
        // return view('index')->with('series', $series);
              

        
    }
}
