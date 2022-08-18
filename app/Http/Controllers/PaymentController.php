<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Unicodeveloper\Paystack\Paystack;

class PaymentController extends Controller
{
    public function test(){
        return view('dashboard.test');
    }
    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway(Request $request)
    {
        try{

        $paystack = new Paystack();

        $request->email = auth()->user()->email;
        $request->orderID = auth()->user()->id;
        $request->amount = $request->amount * (100);
        $request->quantity = '1';
        $request->reference = $paystack->genTranxRef();
        $request->key = config('paystack.secretKey');
        return $paystack->getAuthorizationUrl()->redirectNow();

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
        $paymentDetails = Paystack()->getPaymentData();

        dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}

