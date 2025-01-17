@extends('charity.charity_master')
@section('title', 'Audit Logs')
@section('charity')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="p-2">
                    <h1 class="mb-0" style="color: #62896d"><strong>AUDIT LOGS</strong></h1>
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item active">All Audit Logs</li>
                    </ol>

                    @include('charity.modals.audits')
                </div>
            </div>
        </div>
        <!-- end page title -->

        @foreach ($logs as $key => $item)
        <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog"
            aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="modal_view_{{$key}}">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myExtraLargeModalLabel">Log Details #{{$key}}</h5>
                        <button type="button" class="btn-close"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <dl class="row mb-0">
                            <dt class="col-sm-3">Event</dt>
                            <dd class="col-sm-9">{{$item->action_type}}</dd>

                            <dt class="col-sm-3">Event Log Date</dt>
                            <dd class="col-sm-9">{{$item->performed_at}}</dd>

                            <dt class="col-sm-3">User</dt>
                            <dd class="col-sm-9"><a href="{{route('charity.users.view',$item->getuser->code)}}">{{$item->getuser->info->first_name . ' ' . $item->getuser->info->last_name}}</a></dd>

                            <dt class="col-sm-3">Resource</dt>
                            <dd class="col-sm-9">{{$item->table_name}}</dd>

                            <dt class="col-sm-3">Record ID</dt>
                            <dd class="col-sm-9">{{$item->record_id}}</dd>

                            <dt class="col-sm-3">Description</dt>
                            <dd class="col-sm-9">
                                {{$item->action}}
                            </dd>
                        </dl>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        @endforeach


        <div class="col-12">
            <div class="card p-3">
                <div class="card-body">
                    <h2><strong>Audit Logs</strong></h2>
                    <p>Transactions of {{ Auth::user()->charity->name }}</p>
                </div>

                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Type</th>
                                <th>Log Date</th>
                                {{-- <th>Resource</th>
                                <th>Record ID</th> --}}
                                <th>Description</th>
                                <th>Action</th>
                              
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($logs as $key => $item)
                                
                           
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$item->getuser->username}}</td>
                                <td>{{$item->action_type}}</td>
                                <td>{{ Carbon\Carbon::parse($item->performed_at)->diffForHumans() }}</td>
                                
                                {{-- <td>{{$item->table_name}}</td>
                                <td>{{$item->record_id}}</td> --}}
                                <td>{{Str::limit($item->action, 70)}}</td>
                         
                                <td>
                                    <button class="btn btn-sm btn-outline-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modal_view_{{$key}}">
                                        <i class="mdi mdi-open-in-new"></i> View
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->


    </div>

</div>

@endsection