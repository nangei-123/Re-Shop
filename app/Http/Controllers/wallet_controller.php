<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wallet_controller extends Controller
{
    public function index()
    {
    	return view('payment/wallet');
    }
}
