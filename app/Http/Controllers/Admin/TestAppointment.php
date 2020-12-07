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
    public static function index()
    {
        $appointment = DB::table('services')->pluck('price', 'name');

        foreach ($appointment as $name => $price) {
            echo "<br>";
            echo $price, " ", $name;
        }
    }
}
?>
