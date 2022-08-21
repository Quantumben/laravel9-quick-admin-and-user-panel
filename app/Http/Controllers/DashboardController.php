<?php

namespace App\Http\Controllers;

use App\Models\Payment;

class DashboardController extends Controller
{
    public function frontPage()
    {
        return view('welcome');
    }

    public function transaction()
    {
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

        $balance = Payment::all()->toArray();
        //dd($pay[0]);
        $balance = $balance[0]['amount'];
        return view('dashboard.index', compact('balance'));
    }

}

