@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">
                <div class="panel-heading">@lang('errors.404_title')</div>
                <div class="panel-body">
                    <p>@lang('errors.404_description')</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
