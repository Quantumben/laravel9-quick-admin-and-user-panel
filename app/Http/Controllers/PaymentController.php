<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Unicodeveloper\Paystack\Paystack;

class PaymentController extends Controller
{

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
        $paymentDetails = Paystack()->getPaymentData();

        if($paymentDetails['data']['status'] === 'success'){

                $user = Auth::User()->name;
                $timestamp = now();

                $paymentlog = [

                    'username' => $user,
                    'status' => $paymentDetails['data']['status'],
                    'reference' => $paymentDetails['data']['reference'],
                    'amount' => $paymentDetails['data']['amount']/100,
                    'channel' => $paymentDetails['data']['channel'],
                    'currency' => $paymentDetails['data']['currency'],
                    'ip_address' => $paymentDetails['data']['ip_address'],
                    'bin' => $paymentDetails['data']['authorization']['bin'],
                    'last4' => $paymentDetails['data']['authorization']['last4'],
                    'exp_month' => $paymentDetails['data']['authorization']['exp_month'],
                    'exp_year' => $paymentDetails['data']['authorization']['exp_year'],
                    'pay_channel' => $paymentDetails['data']['authorization']['channel'],
                    'card_type' => $paymentDetails['data']['authorization']['card_type'],
                    'brand' => $paymentDetails['data']['authorization']['bank'],
                    'account_name' => $paymentDetails['data']['authorization']['account_name'],
                    'country_code' => $paymentDetails['data']['authorization']['country_code'],
                    'created_at' => $timestamp,
                    'updated_at' => $timestamp,
                ];

                DB::table('payments')->insert($paymentlog);

                return redirect()->route('transaction')->with('success', 'Your Account Has Been Credited');

        }else{

                $user = Auth::User()->name;
                $timestamp = now();

                $paymentlog = [

                    'username' => $user,
                    'status' => $paymentDetails['data']['status'],
                    'reference' => $paymentDetails['data']['reference'],
                    'amount' => $paymentDetails['data']['amount']/100,
                    'channel' => $paymentDetails['data']['channel'],
                    'currency' => $paymentDetails['data']['currency'],
                    'ip_address' => $paymentDetails['data']['ip_address'],
                    'bin' => $paymentDetails['data']['authorization']['bin'],
                    'last4' => $paymentDetails['data']['authorization']['last4'],
                    'exp_month' => $paymentDetails['data']['authorization']['exp_month'],
                    'exp_year' => $paymentDetails['data']['authorization']['exp_year'],
                    'pay_channel' => $paymentDetails['data']['authorization']['channel'],
                    'card_type' => $paymentDetails['data']['authorization']['card_type'],
                    'brand' => $paymentDetails['data']['authorization']['bank'],
                    'account_name' => $paymentDetails['data']['authorization']['account_name'],
                    'country_code' => $paymentDetails['data']['authorization']['country_code'],
                    'created_at' => $timestamp,
                    'updated_at' => $timestamp,
                ];

                DB::table('payments')->insert($paymentlog);

                return redirect()->route('transaction')->with('error','Payment unsuccessful');
        }

    }

    public function viewTransaction(){

        $pay = Payment::all()->toArray();
        //dd($pay[0]);
        $amount = $pay[0]['amount'];
        $ref = $pay[0]['reference'];
        $status = $pay[0]['status'];
        $channel = $pay[0]['channel'];
        $ip = $pay[0]['ip_address'];
        $date = \Carbon\Carbon::parse($pay[0]['created_at'])->diffForHumans();

        // dd($amount);

        return view('dashboard.transaction', compact('amount','ref','status','channel','ip','date'));
    }

    public function viewBalance(){
        $balance = Payment::all()->toArray();
        //dd($pay[0]);
        $balance = $balance[0]['amount'];
        return view('dashboard.index', compact('balance'));
    }

}

