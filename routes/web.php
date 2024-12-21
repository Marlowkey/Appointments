<?php

use App\Http\Controllers\ClientAuthController;
use App\Http\Controllers\ClientHomeController;
use App\Http\Controllers\Admin\PaymentMethodController;

Route::view('/', '/welcome');

Route::get('/about', function () {
    return view('about');
});

Route::get('success', function () {
    return view('success');
})->name('success');

Route::post('createAppointment', 'ReservationsController@createAppointment');
Route::get('reservations', 'ReservationsController@show');

Route::get('employees', 'Admin\EmployeesController@showAll');

Route::get('services', 'Admin\ServicesController@showAll');


Route::redirect('/home', '/admin');
Auth::routes(['register' => true]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Services
    Route::delete('services/destroy', 'ServicesController@massDestroy')->name('services.massDestroy');
    Route::resource('services', 'ServicesController');

    // Employees
    Route::delete('employees/destroy', 'EmployeesController@massDestroy')->name('employees.massDestroy');
    Route::post('employees/media', 'EmployeesController@storeMedia')->name('employees.storeMedia');
    Route::resource('employees', 'EmployeesController');

    // Clients
    Route::delete('clients/destroy', 'ClientsController@massDestroy')->name('clients.massDestroy');
    Route::resource('clients', 'ClientsController');

    // Appointments
    Route::delete('appointments/destroy', 'AppointmentsController@massDestroy')->name('appointments.massDestroy');
    Route::resource('appointments', 'AppointmentsController');

    Route::get('system-calendar', 'SystemCalendarController@index')->name('systemCalendar');
    Route::get('payment-method', [PaymentMethodController::class, 'showForm'])->name('home');
    Route::post('payment-method/upload', [PaymentMethodController::class, 'uploadQRCode'])->name('paymentMethod.uploadQRCode');
});


Route::get('client/login', [ClientAuthController::class, 'showLoginForm'])->name('client.login');
Route::post('client/login', [ClientAuthController::class, 'login'])->name('client.login.submit');
Route::post('client/logout', [ClientAuthController::class, 'logout'])->name('client.logout');
Route::middleware(['auth:client'])->group(function () {
    Route::get('/client/home', [ClientHomeController::class, 'index'])->name('client.home');
    Route::get('/client/appointments/{id}/edit', [ClientHomeController::class, 'edit'])->name('client.appointments.edit');
    Route::put('/client/appointments/{id}', [ClientHomeController::class, 'update'])->name('client.appointments.update');
    Route::get('appointments/create', [ClientHomeController::class, 'create'])->name('client.appointments.create');
    Route::post('appointments', [ClientHomeController::class, 'createAppointment'])->name('client.appointments.store');
    Route::delete('appointments/{appointment}', [ClientHomeController::class, 'destroy'])->name('client.appointments.destroy');

});
