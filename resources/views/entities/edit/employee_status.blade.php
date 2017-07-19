@extends('layouts.app')

@section('content')

@foreach ($errors->all() as $e)
    {{ $e }}<br />
@endforeach


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">@lang('entities.employee_status_update_title')</div>
                <div class="panel-body">
                    @if (session('actionStatus'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        @lang('entities.employee_status_update_success')
                    </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('employee_status.update', ['employee_status' => $status->id ]) }}">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('22') ? ' has-error' : '' }}">
                            <label for="st_name" class="col-md-4 control-label">@lang('entities.employee_status_create_name')</label>

                            <div class="col-md-6">
                                <input id="st_name" type="text" class="form-control" name="name" value="{{ $status->name }}" required autofocus placeholder="@lang('entities.employee_status_create_name_plh')">

                                @if ($errors->has('22'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('22') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('22') ? ' has-error' : '' }}">
                            <label for="st_description" class="col-md-4 control-label">@lang('entities.employee_status_create_description')</label>

                            <div class="col-md-6">
                                <textarea class="form-control" id="st_description" name="description" rows="5">{{ $status->description }}</textarea>

                                @if ($errors->has('22'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('22') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('22') ? ' has-error' : '' }}">
                            <label for="st_group" class="col-md-4 control-label">@lang('entities.employee_status_create_group')</label>

                            <div class="col-md-6">
                                <select name="status_group_id" id="status_group">
                                    <option value="">@lang('entities.employee_status_create_no_group')</option>
                                @foreach ($status_groups as $g)
                                    <option value="{{ $g->id }}"{{ $g->id == $status->status_group_id ? ' selected' : '' }}>{{ $g->name }}</option>
                                @endforeach
                                </select>

                                @if ($errors->has('22'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('22') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('22') ? ' has-error' : '' }}">
                            <label for="st_active" class="col-md-4 control-label">@lang('entities.employee_status_create_active')</label>

                            <div class="col-md-6">
                                <input type="checkbox" value="Y" name="active" id="st_active"{{ $status->active ? ' checked' : '' }}>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    @lang('entities.employee_status_update_button')
                                </button>

                                <button type="submit" class="btn btn-danger" disabled>
                                    @lang('entities.employee_status_destroy_button')
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
