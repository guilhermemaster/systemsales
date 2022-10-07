<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;
use App\Models\Login;
use App\Models\Products;
use App\Models\User;


class SalesService extends Controller
{
    public function show(Request $request)
    {   
        $status = false; 

        $employee = Login::all();
        $products = Products::all();
        $user = User::all();        
     
        return view('/sales')->with('employees', $employee)->with('products', $products)->with('users', $user);
    }   
    
    public function create(Request $request)
    {
        
       
        $produtoAmounts = Products::where('id','=', $request->input('productOption'))->get();
        foreach ($produtoAmounts as $produtoAmount) {
            $valueQueryAmount = $produtoAmount->amount;
            $valueQueryId = $produtoAmount->id;
        }

        
        // $company = Products::find($valueQueryId);
        // $company->amount = 5;  
        // $company->save();
        // dd($company);

        if ($valueQueryAmount >= $request->input('theAmount')){
            

            $teste = $valueQueryAmount - intval($request->input('theAmount'));
            dd($teste, $valueQueryAmount, intval($request->input('theAmount')));
            if ($valueQueryAmount < 0 ) {
                
                dd($valueQueryAmoun);
            // return view('/home')->with('status', $status);
            }

            $status = true;
            return view('/home')->with('status', $status);
        }else{
            $status = false;
            return view('/home')->with('status', $status);
        }
        // $sales = new Sales(); 
         
        // $sales->id_client = $request->input('userOption');
        // $sales->id_login =  $request->input('employeesOption');  
        // $sales->id_products =  $request->input('productOption');
        // $sales->amount =  $request->input('amount');
        
        // $sales->save();
       
        // if( $products->save() ){
        //     $status = true;
        //     $logAppService = new LogAppService();
        //     $logAppService->create($request->session()->get('loginUser'), 'Fruit: '.$nome.' - Amount: '.$product);
        // } else {
        //     $status = false;
        // } 
        
        // return view('/home')->with('status', $status);
    }
}
