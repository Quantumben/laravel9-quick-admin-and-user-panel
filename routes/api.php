<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/test', function(){


        $pay = array(

            "email" => 'omosabenedict@gmail.com',
            "orderID" => 'eujjru3jjers',
            "amount" => 100,
            "quantity" => "1",
           // "reference" => substr(str_shuffle($used_symbols), 0, $length),
            "reference" => '74yrrhrhse',
            "currency" => "NGN",

        );
       // dd($pay);
       return view('welcome');
       return Paystack::getAuthorizationUrl()->redirectNow();

    });
