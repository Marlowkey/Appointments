<?php

namespace App\Http\Controllers;

use App\Client;
use App\Service;
use App\Employee;
use Carbon\Carbon;
use App\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ReservationsController extends Controller
{
    public function show() {
        $employees = Employee::all();
        $services = Service::all();
        return view('reservations', ['employees' => $employees, 'services' => $services]);
    }

    public function createAppointment(Request $request)
    {
        $request->validate([
            'name'    =>  'required',
            'email'    =>  'required|email|unique:clients,email',
            'phoneNumber' => 'required',
            'password' => 'required|min:8', // Add password validation
            'services' => 'required'
        ]);

        // Create a new client
        $client = new Client();
        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->phone = $request->input('phoneNumber');
        $client->password = Hash::make($request->input('password')); // Hash password
        $client->save();

        // Create a new appointment
        $appointment = new Appointment();
        $appointment->client_id = $client->id;
        $appointment->employee_id = $request->input('employee');
        $appointment->start_time = Carbon::parse($request->input('start_time'))->format('Y-m-d H:i');
        $appointment->finish_time = Carbon::parse($appointment->start_time)->addMinutes(30)->format('Y-m-d H:i');
        $appointment->comments = $request->input('comments');

        // Calculate the total price based on selected services
        $totalPrice = Service::whereIn('id', $request->input('services'))->sum('price');
        $appointment->price = $totalPrice; // Set the total price

        // Save the appointment
        $appointment->save();

        // Sync selected services with the appointment
        if ($request->input('services') != "Pasirinkite paslaugą") {
            $appointment->services()->sync($request->input('services', []));
        }

        // Redirect to success page
        return redirect()->route('success');
    }

}
