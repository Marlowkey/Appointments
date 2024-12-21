<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{

    public function showForm()
    {
        $paymentMethod = PaymentMethod::first();
        return view('home', compact('paymentMethod'));
    }


    public function uploadQRCode(Request $request)
    {
        $request->validate([
            'gcash_qr_code' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048', // Validation for the QR code image
            'gcash_num' => 'required|string|max:15', // Validation for the GCash number
        ]);

        $imagePath = $request->file('gcash_qr_code')->store('gcash_qr_codes', 'public');

        $paymentMethod = PaymentMethod::firstOrNew([]);
        $paymentMethod->gcash_qr_code = $imagePath;
        $paymentMethod->gcash_num = $request->input('gcash_num');
        $paymentMethod->save();

        return back()->with('success', 'GCash QR code and number uploaded successfully!');
    }
}
