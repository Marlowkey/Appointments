<?php

namespace App\Http\Controllers\Admin;

use App\Appointment;
use App\Http\Controllers\Controller;

class SystemCalendarController extends Controller
{

    public function index()
    {
        $events = [];

        $appointments = Appointment::with(['client', 'employee'])->get();

        foreach ($appointments as $appointment) {
            if (!$appointment->start_time) {
                continue;
            }
            $events = [];
            foreach ($appointments as $appointment) {
                $events[] = [
                    'title' => optional($appointment->client)->name,
                    'start' => $appointment->start_time,
                    'url'   => route('admin.appointments.edit', $appointment->id),
                ];
            }
        }

        return view('admin.calendar.calendar', compact('events'));
    }
}
