<?php

namespace Database\Factories;

use App\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFactory extends Factory
{

    public function definition()
    {
        $start_time = now()->addHours(rand(1, 100));

        $appointment = [
            'client_id' => \App\Client::inRandomOrder()->first()->id,
            'employee_id' => \App\Employee::inRandomOrder()->first()->id,
            'start_time' => $start_time->format('Y-m-d H') . ':00',
            'finish_time' => $start_time->addHours(rand(1, 2))->format('Y-m-d H') . ':00',
        ];

        $appointmentModel = \App\Appointment::create($appointment);

        $service = \App\Service::inRandomOrder()->first();
        $appointmentModel->services()->attach($service->id);

        $appointmentModel->update(['price' => $service->price]);

        return $appointment;
    }

}
