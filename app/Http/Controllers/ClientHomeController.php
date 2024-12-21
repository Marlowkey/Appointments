<?php

namespace App\Http\Controllers;

use App\Service;
use Carbon\Carbon;
use App\Appointment;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientHomeController extends Controller
{
    public function index()
    {
        $client = Auth::guard('client')->user();

        if (!$client) {
            return redirect()->route('client.login');
        }

        $appointments = Appointment::where('client_id', $client->id)->get();


        return view('client.home', compact('client', 'appointments'));
    }

    public function edit($id)
    {
        $client = Auth::guard('client')->user();

        $appointment = Appointment::where('client_id', $client->id)->findOrFail($id);

        $services = Service::all();

        return view('client.edit_appointment', compact('appointment', 'services'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'start_time' => 'required|date',
            'finish_time' => 'required|date|after:start_time',
            'price' => 'nullable|numeric',  // No need for price validation, it will be calculated
            'comments' => 'nullable|string',
            'services' => 'required|array',  // Assuming multiple services
        ]);

        $client = Auth::guard('client')->user();

        $appointment = Appointment::where('client_id', $client->id)->findOrFail($id);

        $appointment->start_time = $request->start_time;
        $appointment->finish_time = $request->finish_time;
        $appointment->comments = $request->comments;

        $totalPrice = Service::whereIn('id', $request->services)->sum('price');
        $appointment->price = $totalPrice;

        $appointment->save();

        $appointment->services()->sync($request->services);

        return redirect()->route('client.home')->with('success', 'Appointment updated successfully!');
    }
    public function create()
    {
        $client = Auth::guard('client')->user();

        if (!$client) {
            return redirect()->route('client.login');
        }

        $services = Service::all();

        return view('client.create_appointment', compact('services'));
    }
    public function createAppointment(Request $request)
    {
        $request->validate([
            'start_time' => 'required|date',
            'finish_time' => 'required|date|after:start_time',
            'comments' => 'nullable|string',
            'services' => 'required|array',
        ]);

        $client = Auth::guard('client')->user();

        $appointment = new Appointment();
        $appointment->client_id = $client->id;
        $appointment->employee_id = $request->input('employee');
        $appointment->start_time = Carbon::parse($request->input('start_time'))->format('Y-m-d H:i');
        $appointment->finish_time = Carbon::parse($request->input('finish_time'))->format('Y-m-d H:i');
        $appointment->comments = $request->input('comments');

        $totalPrice = Service::whereIn('id', $request->input('services'))->sum('price');
        $appointment->price = $totalPrice;

        $appointment->save();

        $appointment->services()->sync($request->input('services'));

        return redirect()->route('client.home')->with('success', 'Appointment created successfully!');
    }

    public function destroy($id)
{
    $appointment = Appointment::findOrFail($id);
    $appointment->delete();

    return redirect()->route('client.home')->with('success', trans('global.appointment_deleted'));
}
}


