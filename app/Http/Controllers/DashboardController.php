<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function transaction()
    {
        return view('dashboard.transaction');
    }

    public function dashboard()
    {
        return view('dashboard.index');
    }

    public function profile()
    {
        return view('dashboard.profile');
    }

    public function buy()
    {
        return view('dashboard.buy');
    }
}

