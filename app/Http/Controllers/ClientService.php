<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientService extends Controller
{
    public function show(Request $request)
    {   
        return view('/createclient');
    } 

    public function create(Request $request)
    {
        $client = new Client(); 
        $name = $request->input('name');  
        $email  = $request->input('email');    
        $phone  = $request->input('phone');   
        
        $client->nome = $name;
        $client->email =  $email;    
        $client->telefone =  $phone;  
       
        if( $client->save() ){
            $status = true;
            $logAppService = new LogAppService();
            $logAppService->create($request->session()->get('loginUser'), 'Client: '.$name);
        } else {
            $status = false;
        } 
        
        $home = true;
        $status = false;
        $salesProduct = false;
        return view('/home')->with('status', $status)->with('salesProduct', $salesProduct)->with('home', $home);
    }
}
