@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @lang('entities.statuses_list_title')
                    <div class="pull-right">
                        <a href="{{ route('employee_status.create') }}" title="@lang('entities.statuses_list_add_btn_title')">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    @if (session('actionStatus'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        @lang('entities.employee_status_create_success')
                    </div>
                    @endif

                    @if ($statuses->isNotEmpty())
                        <table class="table table-hover">
                            <thead>
                                <th>@lang('entities.statuses_list_th_id')</th>
                                <th>@lang('entities.statuses_list_th_name')</th>
                                <th>@lang('entities.statuses_list_th_description')</th>
                                <th>@lang('entities.statuses_list_th_group')</th>
                                <th>@lang('entities.statuses_list_th_active')</th>
                                <th>@lang('entities.statuses_list_th_date_create')</th>
                                <th>@lang('entities.statuses_list_th_created_by')</th>
                            </thead>
                        @foreach ($statuses as $item)
                            <tr>
                                <td>
                                    <a href="{{ route('employee_status.edit', ['employee_status' => $item->id ]) }}" title="@lang('entities.statuses_list_th_id_title')">{{ $item->id }}</a>
                                </td>
                                <td>
                                    <a href="{{ route('employee_status.edit', ['employee_status' => $item->id ]) }}" title="@lang('entities.statuses_list_th_id_title')">{{ $item->name }}</a>
                                </td>
                                <td>
                                    <p>{{ $item->description }}</p>
                                </td>
                                <td>
                                    <span style="color:#{{ $item->gcolor }}; font-weight:600;">&nbsp;{{ $item->gname }}&nbsp;</span>
                                </td>
                                <td>
                                    @lang( $item->active? 'entities.active_y' : 'entities.active_n')
                                </td>
                                <td>
                                    {{ $item->created_at->format('d.m.Y H:i:s') }}
                                </td>
                                <td>
                                    {{ $item->uname }}&nbsp;[{{ $item->uid }}]
                                </td>
                            </tr>
                        @endforeach
                        </table>
                    @else
                        <p>@lang( 'entities.statuses_list_empty' )</p>
                        <p>
                            <a href="{{ route('employee_status.create') }}">@lang( 'entities.statuses_list_empty_add' )</a>
                        </p>
                    @endif
                </div>
                <div class="panel-footer">&nbsp;
                    <div class="pull-right">
                        <p>@lang( 'entities.statuses_list_count' ): {{ $statuses->count() }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
