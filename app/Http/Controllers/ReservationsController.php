<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Client;
use App\Employee;
use App\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function show() {
        $employees = Employee::all();
        $services = Service::all();
        return view('reservations', ['employees' => $employees, 'services' => $services]);
    }

    public function createAppointment(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $phoneNumber = $request->input('phoneNumber');

        $client = new Client();
        $client->name = $name;
        $client->email = $email;
        $client->phone = $phoneNumber;
        $client->save();

        $appointment = new Appointment();
        $appointment->client_id = $client->id;
        $employee_id = $request->input('employee');
        if(is_int($employee_id)) {
            $appointment->employee_id = $employee_id;
        }
        $start_time = $request->input('start_time');
        $date = Carbon::parse($start_time)->format('Y-m-d H:i');
        $appointment->start_time = $date;
        $finish_time = Carbon::parse($date)->addMinutes(30)->format('Y-m-d H:i');
        $appointment->finish_time = $finish_time;
        $appointment->comments = $request->input('comments');
        $appointment->save();

        return redirect()->route('success');
    }
}
