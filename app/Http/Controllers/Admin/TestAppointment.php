<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TestAppointment extends Controller

{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public static function serviceName()
    {
        $appointment = DB::table('services')->pluck('name');

        foreach ($appointment as $name) {
            echo "<br>";
            echo $name;
        }
    }

    public static function servicePrice()
    {
        $appointment = DB::table('services')->pluck('price');

        foreach ($appointment as $price) {
            echo "<br>";
            echo $price;
        }
    }
}
?>
