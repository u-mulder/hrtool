@extends('layouts.app')

@section('content')

@foreach ($errors->all() as $e)
    {{ $e }}<br />
@endforeach


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">@lang('entities.employee_status_group_create_title')</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('employee_status_group.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('22') ? ' has-error' : '' }}">
                            <label for="esg_name" class="col-md-4 control-label">@lang('entities.employee_status_group_create_name')</label>

                            <div class="col-md-6">
                                <input id="esg_name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="@lang('entities.employee_status_group_create_name_plh')">

                                @if ($errors->has('22'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('22') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('22') ? ' has-error' : '' }}">
                            <label for="esg_description" class="col-md-4 control-label">@lang('entities.employee_status_group_create_description')</label>

                            <div class="col-md-6">
                                <textarea class="form-control" id="esg_description" name="description" rows="5">{{ old('description') }}</textarea>

                                @if ($errors->has('22'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('22') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('22') ? ' has-error' : '' }}">
                            <label for="esg_color" class="col-md-4 control-label">@lang('entities.employee_status_group_create_color')</label>

                            <div class="col-md-6">
                                <input type="color" value="#{{ old('color') }}" name="color" id="esg_color">

                                @if ($errors->has('22'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('22') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('22') ? ' has-error' : '' }}">
                            <label for="esg_active" class="col-md-4 control-label">@lang('entities.employee_status_group_create_active')</label>

                            <div class="col-md-6">
                                <input type="checkbox" value="Y" name="active" id="esg_active" checked>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    @lang('entities.employee_status_group_create_button')
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
