<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemSales extends Controller
{
    public function show(Request $request)
    {   
        $status = false; 
        $salesProduct = false;
        $home = true;     
        return view('/home')->with('status', $status)->with('salesProduct', $salesProduct)->with('home', $home);
    }   
}
