@extends('layouts.client')

@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.appointment.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route('client.appointments.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('client_id') ? 'has-error' : '' }}">
                <label for="client">{{ trans('cruds.appointment.fields.client') }}*</label>
                <input type="text" class="form-control" value="{{ Auth::guard('client')->user()->name }}" disabled>
                <input type="hidden" name="client_id" value="{{ Auth::guard('client')->user()->id }}">
                @if($errors->has('client_id'))
                    <em class="invalid-feedback">
                        {{ $errors->first('client_id') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('start_time') ? 'has-error' : '' }}">
                <label for="start_time">{{ trans('cruds.appointment.fields.start_time') }}*</label>
                <input type="text" id="start_time" name="start_time" class="form-control datetime" value="{{ old('start_time') }}" required>
                @if($errors->has('start_time'))
                    <em class="invalid-feedback">
                        {{ $errors->first('start_time') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.appointment.fields.start_time_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('finish_time') ? 'has-error' : '' }}">
                <label for="finish_time">{{ trans('cruds.appointment.fields.finish_time') }}*</label>
                <input type="text" id="finish_time" name="finish_time" class="form-control datetime" value="{{ old('finish_time') }}" required>
                @if($errors->has('finish_time'))
                    <em class="invalid-feedback">
                        {{ $errors->first('finish_time') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.appointment.fields.finish_time_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                <label for="price">{{ trans('cruds.appointment.fields.price') }}</label>
                <input type="number" id="price" name="price" class="form-control" value="{{ old('price') }}" step="0.01" disabled>
                @if($errors->has('price'))
                    <em class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.appointment.fields.price_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('comments') ? 'has-error' : '' }}">
                <label for="comments">{{ trans('cruds.appointment.fields.comments') }}</label>
                <textarea id="comments" name="comments" class="form-control ">{{ old('comments') }}</textarea>
                @if($errors->has('comments'))
                    <em class="invalid-feedback">
                        {{ $errors->first('comments') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.appointment.fields.comments_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('services') ? 'has-error' : '' }}">
                <label for="services">{{ trans('cruds.appointment.fields.services') }}
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="services[]" id="services" class="form-control select2" multiple="multiple">
                    @foreach($services as $id => $service)
                        <option value="{{ $id }}" {{ in_array($id, old('services', [])) ? 'selected' : '' }}>{{ $service->name }}</option>
                    @endforeach
                </select>
                @if($errors->has('services'))
                    <em class="invalid-feedback">
                        {{ $errors->first('services') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.appointment.fields.services_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection
