@extends('layouts.client')

@section('content')
    <div class="card">

        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.appointment.title_singular') }}
        </div>

        <div class="card-body">
            <form action="{{ route('client.appointments.update', [$appointment->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Start Time input -->
                <div class="form-group {{ $errors->has('start_time') ? 'has-error' : '' }}">
                    <label for="start_time">{{ trans('cruds.appointment.fields.start_time') }}*</label>
                    <input type="text" id="start_time" name="start_time" class="form-control datetime"
                        value="{{ old('start_time', $appointment->start_time) }}" required>
                    @if ($errors->has('start_time'))
                        <em class="invalid-feedback">
                            {{ $errors->first('start_time') }}
                        </em>
                    @endif
                </div>

                <!-- Finish Time input -->
                <div class="form-group {{ $errors->has('finish_time') ? 'has-error' : '' }}">
                    <label for="finish_time">{{ trans('cruds.appointment.fields.finish_time') }}*</label>
                    <input type="text" id="finish_time" name="finish_time" class="form-control datetime"
                        value="{{ old('finish_time', $appointment->finish_time) }}" required>
                    @if ($errors->has('finish_time'))
                        <em class="invalid-feedback">
                            {{ $errors->first('finish_time') }}
                        </em>
                    @endif
                </div>

                <!-- Comments input -->
                <div class="form-group {{ $errors->has('comments') ? 'has-error' : '' }}">
                    <label for="comments">{{ trans('cruds.appointment.fields.comments') }}</label>
                    <textarea id="comments" name="comments" class="form-control">{{ old('comments', $appointment->comments) }}</textarea>
                    @if ($errors->has('comments'))
                        <em class="invalid-feedback">
                            {{ $errors->first('comments') }}
                        </em>
                    @endif
                </div>

                <!-- Services multi-select -->
                <div class="form-group {{ $errors->has('services') ? 'has-error' : '' }}">
                    <label for="services">
                        {{ trans('cruds.appointment.fields.services') }}
                        <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                        <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span>
                    </label>
                    <select name="services[]" id="services" class="form-control select2" multiple="multiple">
                        @foreach ($services as $service)
                            <option value="{{ $service->id }}"
                                {{ in_array($service->id, old('services', $appointment->services->pluck('id')->toArray())) ? 'selected' : '' }}>
                                {{ $service->name }}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('services'))
                        <em class="invalid-feedback">
                            {{ $errors->first('services') }}
                        </em>
                    @endif
                </div>

                <!-- Submit button -->
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="{{ trans('global.save') }}">
                </div>
            </form>

        </div>
    </div>
@endsection
