<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginService;
use App\Http\Controllers\SystemSales;
use App\Http\Controllers\User;
use App\Http\Controllers\ProductsService;
use App\Http\Controllers\ClientService;
use App\Http\Controllers\SalesService;
use App\Http\Controllers\LogAppService;
use App\Http\Controllers\ReportService;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[LoginService::class, 'index']);
Route::post('/logar',[LoginService::class, 'checkPassword']);
Route::get('/home',[SystemSales::class, 'show']);
Route::get('/employee',[User::class, 'show']);
Route::post('/employee/registration',[User::class, 'create']);
Route::get('/products',[ProductsService::class, 'show']);
Route::post('/products/registration',[ProductsService::class, 'create']);
Route::get('/client',[ClientService::class, 'show']);
Route::post('/client/registration',[ClientService::class, 'create']);
Route::get('/sales',[SalesService::class, 'show']);
Route::post('/sales/registration',[SalesService::class, 'create']);
Route::get('/log',[LogAppService::class, 'show']);

Route::get('/reportclient',[ReportService::class, 'showClient']);
Route::get('/reportemployee',[ReportService::class, 'showEmployee']);