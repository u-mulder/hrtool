@extends('layouts.app')

@section('content')

@foreach ($errors->all() as $e)
    {{ $e }}<br />
@endforeach


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">@lang('entities.departments_create_title')</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('departments.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('22') ? ' has-error' : '' }}">
                            <label for="dept_name" class="col-md-4 control-label">@lang('entities.departments_create_name')</label>

                            <div class="col-md-6">
                                <input id="dept_name" type="text" class="form-control" name="name" value="" required autofocus placeholder="@lang('entities.departments_create_name_plh')">

                                @if ($errors->has('22'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('22') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('22') ? ' has-error' : '' }}">
                            <label for="dept_description" class="col-md-4 control-label">@lang('entities.departments_create_description')</label>

                            <div class="col-md-6">
                                <textarea class="form-control" id="dept_description" name="description" rows="5"></textarea>

                                @if ($errors->has('22'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('22') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('22') ? ' has-error' : '' }}">
                            <label for="dept_parent" class="col-md-4 control-label">@lang('entities.departments_create_parent_dept')</label>

                            <div class="col-md-6">
                                <select class="form-control" id="dept_parent" name="parent_dept_id">
                                    <option value="0">@lang('entities.departments_create_parent_dept_none')</option>
                                @if ($departments->isNotEmpty())
                                    @foreach ($departments as $d)
                                    <option value="{{ $d->id }}">{{ $d->name }}</option>
                                    @endforeach
                                @endif
                                </select>

                                @if ($errors->has('22'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('22') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('22') ? ' has-error' : '' }}">
                            <label for="dept_active" class="col-md-4 control-label">@lang('entities.departments_create_active')</label>

                            <div class="col-md-6">
                                <input type="checkbox" value="Y" name="active" id="dept_active">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    @lang('entities.departments_create_button')
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
