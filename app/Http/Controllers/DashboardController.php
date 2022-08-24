<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function frontPage()
    {
        return view('welcome');
    }

    public function transaction()
    {
        $pay = Payment::all()->where('username', '==', Auth::user()->name)->toArray();

        if(empty($pay)){
            $amount = 0;
            $ref = 0;
            $status = 0;
            $channel = 0;
            $ip = 0;
            $date = 0;
        }else{
            $amount = $pay[0]['amount'];
            $ref = $pay[0]['reference'];
            $status = $pay[0]['status'];
            $channel = $pay[0]['channel'];
            $ip = $pay[0]['ip_address'];
            $date = \Carbon\Carbon::parse($pay[0]['created_at'])->diffForHumans();
        }

        return view('dashboard.transaction', compact('amount','ref','status','channel','ip','date'));
    }

    public function profile()
    {
        return view('dashboard.profile');
    }

    public function buy()
    {
        return view('dashboard.buy');
    }

    public function withdraw()
    {
        return view('dashboard.withdraw');
    }

    public function dashboard(){

        $balance = Payment::all()->where('username', '==', Auth::user()->name)->toArray();
        //dd($balance);
        if(empty($balance)){
            $balance = 0;
        }else{
            $balance = $balance[0]['amount'];
        }
        //$balance = $balance[0]['amount'];
        return view('dashboard.index', compact('balance'));

        //return view('dashboard.index');
    }

}

