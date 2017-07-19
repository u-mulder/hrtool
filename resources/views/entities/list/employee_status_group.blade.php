@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @lang('entities.status_groups_list_title')
                    <div class="pull-right">
                        <a href="{{ route('employee_status_group.create') }}" title="@lang('entities.status_groups_list_add_btn_title')">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    @if (session('actionStatus'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        @lang('entities.employee_status_group_create_success')
                    </div>
                    @endif

                    @if ($status_groups->isNotEmpty())
                        <table class="table table-hover">
                            <thead>
                                <th>@lang('entities.status_groups_list_th_id')</th>
                                <th>@lang('entities.status_groups_list_th_name')</th>
                                <th>@lang('entities.status_groups_list_th_description')</th>
                                <th>@lang('entities.status_groups_list_th_color')</th>
                                <th>@lang('entities.status_groups_list_th_active')</th>
                                <th>@lang('entities.status_groups_list_th_date_create')</th>
                                <th>@lang('entities.status_groups_list_th_created_by')</th>
                            </thead>
                        @foreach ($status_groups as $g)
                            <tr>
                                <td>
                                    <a href="{{ route('employee_status_group.edit', ['employee_status_group' => $g->id ]) }}" title="@lang('entities.status_groups_list_th_id_title')">{{ $g->id }}</a>
                                </td>
                                <td>
                                    <a href="{{ route('employee_status_group.edit', ['employee_status_group' => $g->id ]) }}" title="@lang('entities.status_groups_list_th_id_title')">{{ $g->name }}</a>
                                </td>
                                <td>
                                    <p>{{ $g->description }}</p>
                                </td>
                                <td>
                                    #{{ $g->color }} <span style="width:20px; height:20px; background-color:#{{ $g->color }}">&nbsp;&nbsp;&nbsp;</span>
                                </td>
                                <td>
                                    @lang( $g->active? 'entities.active_y' : 'entities.active_n')
                                </td>
                                <td>
                                    {{ $g->created_at->format('d.m.Y H:i:s') }}
                                </td>
                                <td>
                                    {{ $g->uname }}&nbsp;[{{ $g->uid }}]
                                </td>
                            </tr>
                        @endforeach
                        </table>
                    @else
                        <p>@lang( 'entities.status_groups_list_empty' )</p>
                        <p>
                            <a href="{{ route('employee_status_group.create') }}">@lang( 'entities.status_groups_list_empty_add' )</a>
                        </p>
                    @endif
                </div>
                <div class="panel-footer">&nbsp;
                    <div class="pull-right">
                        <p>@lang( 'entities.status_groups_list_count' ): {{ $status_groups->count() }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
