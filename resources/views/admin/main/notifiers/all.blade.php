@extends('admin.admin_master')
@section('title', 'All Notifiers')
@section('charity')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="">
                    <div class="p-2 mb-4">
                        <h1 class="mb-0" style="color: #62896d"><strong>NOTIFIERS</strong></h1>
                        <ol class="breadcrumb m-0 p-0 mb-3">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">
                                <a href="javascript: void(0);">Menu</a>
                            </li>
                            <li class="breadcrumb-item active">Notifiers</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-12">
                <div class="card p-3">
                    <div class="card-body">
                        <div class="float-end">

                            <div class="row mt-4">
                                <div class="col-md-5">
                                    <div class="btn-group" role="group" aria-label="Actions">
                                        <a type="button" href="{{ route('admin.notifiers.add') }}" class="btn btn-sm w-lg btn-success waves-effect waves-light mx-1">
                                            <i class="ri-add-line"></i> Add New
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <h2 class="mb-5"><strong>Remarks and Notifications</strong></h2>

                        <table id="datatable" class="table table-borderless dt-responsive nowrap table-hover"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead class="table-bordered table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Subject & Message</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Public Profile</td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="flex-1">
                                                <h6 class="mb-1">Invalid Donation Streams</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">Sorry, we have temporarily hidden your Charitable Organization's modes of donation on
                                                        its public profile due to  ...
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.notifiers.view') }}" class="btn btn-sm w-xs btn-outline-primary waves-effect waves-light"
                                            title="View">
                                            <i class="mdi mdi-open-in-new"></i> View
                                        </a>
                                        <a href="{{ route('admin.notifiers.edit') }}" class="btn btn-sm w-xs btn-outline-dark waves-effect waves-light" title="Edit">
                                            <i class="mdi mdi-pencil"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Public Profile</td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="flex-1">
                                                <h6 class="mb-1">Violated Community Guidelines</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">Your Charitable Organization's public profile has been locked and hidden due to
                                                        violation of ...
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-sm w-xs btn-outline-primary waves-effect waves-light"
                                            title="View">
                                            <i class="mdi mdi-open-in-new"></i> View
                                        </a>
                                        <a href="" class="btn btn-sm w-xs btn-outline-dark waves-effect waves-light" title="Edit">
                                            <i class="mdi mdi-pencil"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Charity Associates</td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="flex-1">
                                                <h6 class="mb-1">Suspicious Activity</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">We are very sorry but your application has been
                                                        denied for the violating our terms and conditions. If you wish to appeal, ple...</p>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-sm w-xs btn-outline-primary waves-effect waves-light"
                                            title="View">
                                            <i class="mdi mdi-open-in-new"></i> View
                                        </a>
                                        <a href="" class="btn btn-sm w-xs btn-outline-dark waves-effect waves-light" title="Edit">
                                            <i class="mdi mdi-pencil"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div><!-- end col -->
        </div>
        <!-- end row -->
    </div>
</div>
@endsection