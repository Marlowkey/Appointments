@extends('layouts.client')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h3 class="text-black text-center font-weight-bold mb-5" style="font-size: 1.5rem;">{{ $client->name }}'s Appointments</h3>

                @if($appointments->isEmpty())
                    <p class="text-center text-black" style="font-size: 1.25rem;">No appointments available.</p>
                @else
                <div class="row">
                    @foreach($appointments as $appointment)
                        <div class="col-md-12 mb-4"> <!-- Use col-md-12 for full width -->
                            <div class="card bg-white text-white shadow-lg" style="font-size: 1.125rem;">
                                <div class="card-header bg-gray-700 text-white" style="font-size: 1.25rem;">
                                    <h5 class="card-title">Details</h5>
                                </div>
                                <div class="card-body bg-gray-900">
                                    <p><strong>Start Time:</strong> {{ \Carbon\Carbon::parse($appointment->start_time)->format('M d, Y h:i A') }}</p>
                                    <p><strong>Finish Time:</strong> {{ \Carbon\Carbon::parse($appointment->finish_time)->format('M d, Y h:i A') }}</p>
                                    <p><strong>Comments:</strong> {{ $appointment->comments ?? 'N/A' }}</p>

                                    <div class="services">
                                        <strong>Services:</strong><br>
                                        @foreach($appointment->services as $service)
                                            <span class="badge badge-light">{{ $service->name }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


                @endif
            </div>
        </div>
    </div>
@endsection
