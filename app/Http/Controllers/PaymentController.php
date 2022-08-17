<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Paystack;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway(Request $request)
    {
        try{

            $length = 18;
            $used_symbols = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';


            $pay = array(

                "email" => auth()->user()->email,
                "orderID" => auth()->user()->id,
                "amount" => $request->amount,
                "quantity" => "1",
               // "reference" => substr(str_shuffle($used_symbols), 0, $length),
                "reference" => Paystack::genTranxRef(),
                "currency" => "NGN",

            );
            //dd($pay);
            return Paystack::getAuthorizationUrl($pay)->redirectNow();

        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        // ['App\Http\Controllers\Paystack::getPaymentData()']
        $paymentDetails = Paystack::getPaymentData();

        dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}

