<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Http\Controllers\LogAppService;

class ProductsService extends Controller
{
    public function show(Request $request)
    {   
        $status = false;

        return view('/createproducts');
    } 

    public function create(Request $request)
    {
        $products = new Products(); 
        $nome = $request->input('nome');  
        $product  = $request->input('theAmount');      
        $products->nomeproduto = $nome;
        $products->amount =  $product;      
       
        if( $products->save() ){
            $status = true;
            $logAppService = new LogAppService();
            $logAppService->create($request->session()->get('loginUser'), 'Fruit: '.$nome.' - Amount: '.$product);
        } else {
            $status = false;
        } 
        
        return view('/home')->with('status', $status);
    }
}
