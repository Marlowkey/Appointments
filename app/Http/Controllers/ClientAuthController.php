<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ClientAuthController extends Controller
{
    /**
     * Show the login form for the client.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');  // Adjust to your login view path
    }

    /**
     * Handle a login request for a client.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $client = Client::where('email', $request->input('email'))->first();

        if ($client && \Hash::check($request->input('password'), $client->password)) {
            auth()->guard('client')->login($client);

            return redirect()->route('client.home');
        }

        return back()->withErrors(['email' => 'Invalid email or password']);
    }
}
