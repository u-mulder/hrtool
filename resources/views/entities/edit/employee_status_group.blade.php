@extends('layouts.app')

@section('content')

@foreach ($errors->all() as $e)
    {{ $e }}<br />
@endforeach


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">@lang('entities.employee_status_group_update_title')</div>
                <div class="panel-body">
                    @if (session('actionStatus'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        @lang('entities.employee_status_group_update_success')
                    </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('employee_status_group.update', ['employee_status_group' => $status_group->id]) }}">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('22') ? ' has-error' : '' }}">
                            <label for="esg_name" class="col-md-4 control-label">@lang('entities.employee_status_group_create_name')</label>

                            <div class="col-md-6">
                                <input id="esg_name" type="text" class="form-control" name="name" value="{{ $status_group->name }}" required autofocus placeholder="@lang('entities.employee_status_group_create_name_plh')">

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
                                <textarea class="form-control" id="esg_description" name="description" rows="5">{{ $status_group->description }}</textarea>

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
                                <input type="color" value="#{{ $status_group->color }}" name="color" id="esg_color">

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
                                <input type="checkbox" value="Y" name="active" id="esg_active"{{ $status_group->active ? ' checked' : ''}}>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    @lang('entities.employee_status_group_update_button')
                                </button>

                                <button type="submit" class="btn btn-danger" disabled>
                                    @lang('entities.employee_status_group_destroy_button')
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
