<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;

class ReportService extends Controller
{
    public function showClient(Request $request)
    {   
        $status = false; 
        $salesProduct = false;
        $home = true;     
        
        $sales = Sales::orderBy('id_client')->get(); 

        $sales = Sales::join('client', 'sales.id_client', '=', 'client.id')
        ->join('products', 'sales.id_products', '=', 'products.id')
        ->get(['sales.*', 'client.nome as nomeClient', 'products.nomeproduto']);

        return view('/reportclient')->with('sales', $sales)->with('status', $status)->with('salesProduct', $salesProduct)->with('home', $home);
    }

    public function showEmployee(Request $request)
    {   
        $status = false; 
        $salesProduct = false;
        $home = true;     
        
        $sales = Sales::orderBy('id_client')->get(); 

        $sales = Sales::join('login', 'sales.id_login', '=', 'login.id')
        ->join('products', 'sales.id_products', '=', 'products.id')
        ->get(['sales.*', 'login.nome', 'products.nomeproduto']);

        return view('/reportemployee')->with('sales', $sales)->with('status', $status)->with('salesProduct', $salesProduct)->with('home', $home);
    }
}
