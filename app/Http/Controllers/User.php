<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class User extends Controller
{

    public function show(Request $request)
    {        
        return view('createmployee');
    }

    public function create(Request $request)
    {
        $login = new Login(); 
        $name = $request->input('name');        
        $login->nome = $name;
        $login->senha = $login->hashPassword($request->input('password'));

        if( $login->save() ){
            $status = true;
        } else {
            $status = false;
        } 

        $home = false;        
        $salesProduct = false;
        return view('/home')->with('status', $status)->with('salesProduct', $salesProduct)->with('home', $home);
    }
}
