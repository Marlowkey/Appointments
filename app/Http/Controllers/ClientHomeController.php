<?php

namespace App\Http\Controllers;

use App\Service;
use App\Appointment;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientHomeController extends Controller
{
    public function index()
    {
        // Get the authenticated client using the custom 'client' guard
        $client = Auth::guard('client')->user();

        // Check if the client is authenticated
        if (!$client) {
            return redirect()->route('client.login');
        }

        // Load the client's appointments
        $appointments = Appointment::where('client_id', $client->id)->get();

        // Dump and die to inspect the client and appointments data
        // dd($client, $appointments);

        // Pass the client and appointments to the view
        return view('client.home', compact('client', 'appointments'));
    }

    public function edit($id)
    {
        // Get the authenticated client
        $client = Auth::guard('client')->user();

        // Get the appointment for the client
        $appointment = Appointment::where('client_id', $client->id)->findOrFail($id);

        // Get all available services
        $services = Service::all();

        // Return the edit view with appointment details
        return view('client.edit_appointment', compact('appointment', 'services'));
    }

    // Update the appointment
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'start_time' => 'required|date',
            'finish_time' => 'required|date|after:start_time',
            'price' => 'nullable|numeric',
            'comments' => 'nullable|string',
            'services' => 'required|array',  // Assuming multiple services
        ]);

        // Get the authenticated client
        $client = Auth::guard('client')->user();

        // Find the appointment
        $appointment = Appointment::where('client_id', $client->id)->findOrFail($id);

        // Update the appointment details
        $appointment->start_time = $request->start_time;
        $appointment->finish_time = $request->finish_time;
        $appointment->price = $request->price;
        $appointment->comments = $request->comments;
        $appointment->save();

        // Update the services (many-to-many relationship)
        $appointment->services()->sync($request->services);

        // Redirect to the appointments page with success message
        return redirect()->route('client.home')->with('success', 'Appointment updated successfully!');
    }
}


