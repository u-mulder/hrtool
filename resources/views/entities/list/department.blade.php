@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @lang('entities.departments_list_title')
                    <div class="pull-right">
                        <a href="{{ route('departments.create') }}" title="@lang('entities.departments_list_add_btn_title')">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    @if ($departments->isNotEmpty())  // TODO
                        <table class="table">
                        @foreach ($departments as $d)
                            <tr>
                                <td>This is user</td>
                            </tr>
                        @endforeach
                        </table>
                    @else
                        <p>@lang( 'entities.departments_list_empty' )</p>
                        <p>
                            <a href="{{ route('departments.create') }}">@lang( 'entities.departments_list_empty_add' )</a>
                        </p>
                    @endif
                </div>
                <div class="panel-footer">&nbsp;
                    <div class="pull-right">
                        <p>@lang( 'entities.departments_list_count' ): 0 <!-- // TODO --> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
