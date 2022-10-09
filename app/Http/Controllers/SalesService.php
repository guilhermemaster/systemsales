<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;
use App\Models\Login;
use App\Models\Products;
use App\Models\Client;
use App\Http\Controllers\LogAppService;


class SalesService extends Controller
{
    public function show(Request $request)
    {   
        $status = false; 

        $employee = Login::all();
        $products = Products::all();
        $clients = Client::all();        
     
        return view('/sales')->with('employees', $employee)->with('products', $products)->with('clients', $clients);
    }   
    
    public function create(Request $request)
    {       
       
        $produtoAmounts = Products::where('id','=', $request->input('productOption'))->get();
        foreach ($produtoAmounts as $produtoAmount) {
            $valueQueryAmount = $produtoAmount->amount;
            $valueQueryId = $produtoAmount->id;
        }

        $calculateAmount = $valueQueryAmount - intval($request->input('theAmount'));
        
        if ($calculateAmount >= 0 ){          

            $sales = new Sales();                
            $sales->id_client = $request->input('clientOption');
            $sales->id_login = $request->input('employeesOption');
            $sales->id_products = $request->input('productOption');
            $sales->amount = $request->input('theAmount');
            
            if( $sales->save() ){
                $logAppService = new LogAppService();
                $logAppService->create($request->session()->get('loginUser'), 'Client: '.$request->input('clientOption').' - Products: '.$request->input('productOption').' - Amount: '.$request->input('theAmount'));                

                $product = Products::find($valueQueryId);
                $product->amount = $calculateAmount;  
                $product->save();
            } else {
                $status = false;
                $salesProduct = true;
                $home = false;
                return view('/home')->with('status', $status)->with('salesProduct', $salesProduct)->with('home', $home);
            }

            $status = true; 
            $salesProduct = false;
            $home = false;     
            return view('/home')->with('status', $status)->with('salesProduct', $salesProduct)->with('home', $home);
        
        }else{
                 
            $status = false;
            $salesProduct = false;
            $home = false;
            return view('/home')->with('status', $status)->with('salesProduct', $salesProduct)->with('home', $home);
        } 
    }
}
