@extends('layouts.client')

@section('content')
<div class=" d-flex justify-content-end">
    <a href="{{ route('client.appointments.create') }}" class="btn btn-primary">
        {{ trans('global.create') }} {{ trans('cruds.appointment.title_singular') }}
    </a>
</div>
<div class="card mt-2">
    <div class="card-header">
        <h3>Appointments</h3>
    </div>
    <div class="card-body">
        @if($appointments->isEmpty())
            <p class="text-center">{{ trans('global.no_appointments_found') }}</p>
        @else
            @foreach($appointments as $appointment)
                <div class="mb-5">
                    {{-- <h4>{{ $appointment->client->name ?? '' }}'s Appointment</h4> --}}
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>{{ trans('cruds.appointment.fields.client') }}</th>
                                <td>{{ $appointment->client->name ?? '' }}</td>
                            </tr>
                            <tr>
                                <th>{{ trans('cruds.appointment.fields.start_time') }}</th>
                                <td>{{ \Carbon\Carbon::parse($appointment->start_time)->format('M d, Y h:i A') }}</td>
                            </tr>
                            <tr>
                                <th>{{ trans('cruds.appointment.fields.finish_time') }}</th>
                                <td>{{ \Carbon\Carbon::parse($appointment->finish_time)->format('M d, Y h:i A') }}</td>
                            </tr>
                            <tr>
                                <th>{{ trans('cruds.appointment.fields.price') }}</th>
                                <td>₱ {{ $appointment->price }}</td>
                            </tr>
                            <tr>
                                <th>{{ trans('cruds.appointment.fields.comments') }}</th>
                                <td>{!! $appointment->comments !!}</td>
                            </tr>
                            <tr>
                                <th>Services</th>
                                <td>
                                    @foreach($appointment->services as $service)
                                        <span class="label label-info label-many">{{ $service->name }}</span>
                                    @endforeach
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Edit button inside the loop -->
                    <div class="d-flex justify-content-end m-2" style="margin-top: 20px; gap: 10px;">
                        <!-- Edit Button -->
                        <a class="btn btn-primary" href="{{ route('client.appointments.edit', $appointment->id) }}">
                            {{ trans('global.edit') }}
                        </a>

                        <!-- Delete Form -->
                        <form action="{{ route('client.appointments.destroy', $appointment->id) }}" method="POST"
                            onsubmit="return confirm('{{ trans('global.are_you_sure') }}');" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="{{ trans('global.delete') }}">
                        </form>
                    </div>

                </div>
            @endforeach
        @endif
    </div>
</div>


@endsection
