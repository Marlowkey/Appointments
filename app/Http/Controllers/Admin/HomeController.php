<?php

namespace App\Http\Controllers\Admin;

use App\PaymentMethod;

class HomeController
{
    public function index()
    {
        $paymentMethod = PaymentMethod::first();
        return view('home', compact('paymentMethod'));
    }
}
