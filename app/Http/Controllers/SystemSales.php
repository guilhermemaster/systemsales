<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemSales extends Controller
{
    public function show(Request $request)
    {   
        $status = false;
        // dd($request->session()->get('loginUser'));
        return view('/home')->with('status', $status);
    }   
}
