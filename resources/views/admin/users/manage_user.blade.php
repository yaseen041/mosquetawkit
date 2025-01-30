@extends('admin.admin_app')
@section('title', 'Manage User')
@section('content')


<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8 col-sm-8 col-xs-8">
        <h2>Manage User</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('admin/dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ url('admin/users') }}"><strong>User</strong></a>
            </li>
            <li class="breadcrumb-item active">
                <a href="#"><strong>Manage User</strong></a>
            </li>
        </ol>
    </div>

    <div class="col-lg-4 col-sm-4 col-xs-4 text-right">
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>User Details</h5>
                </div>
                <div class="ibox-content">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-2 mb-4">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <strong class="text-dark">User Name:</strong>
                                        <p class="text-muted">{{ $user->full_name }}</p>
                                    </div>

                                    <div class="col-md-4">
                                        <strong class="text-dark">Email:</strong>
                                        <p class="text-muted">{{ $user->email }}</p>
                                    </div>

                                    <div class="col-md-4">
                                        <strong class="text-dark">Phone:</strong>
                                        <p class="text-muted">{{ $user->phone_no }}</p>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <strong class="text-dark">Address:</strong>
                                        <p class="text-muted">{{ $user->address }}</p>
                                    </div>

                                    <div class="col-md-4">
                                        <strong class="text-dark">Tax ID Number:</strong>
                                        <p class="text-muted">{{ $user->tax_id }}</p>
                                    </div>

                                    <div class="col-md-4">
                                        <strong class="text-dark">Company Name:</strong>
                                        <p class="text-muted">{{ $user->company_name }}</p>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <strong class="text-dark ">Account Status:</strong>
                                        <span class="label {{ $user->status == 1 ? 'bg-success' : 'bg-danger' }}">
                                            {{ $user->status == 1 ? 'Active' : 'Suspended' }}
                                        </span>
                                    </div>
                                    <div class="col-md-4">
                                        <strong class="text-dark ">Verification Status:</strong>
                                        <span class="label {{ $user->is_verified == 1 ? 'bg-primary' : 'bg-warning' }}">
                                            {{ $user->is_verified == 0 ? 'Un-Verified' : 'Verified' }}
                                        </span>
                                    </div>
                                </div>

                                @if($user->w9_application !== null || $user->tax_application !== null || $user->credit_application !== null)
                                <div class="row mb-2">
                                    <div class="col-md-8">
                                        @if($user->w9_application)
                                        <a href="{{ asset('uploads/user_documents') }}/{{ $user->w9_application }}" class="btn btn-success btn-sm me-2 mt-2" target="_blank">
                                            View W9-Form
                                        </a>
                                        @endif
                                        @if($user->tax_application)
                                        <a href="{{ asset('uploads/user_documents') }}/{{ $user->tax_application }}" class="btn btn-primary btn-sm me-2 mt-2" target="_blank">
                                            View Texas Resale Cert Form
                                        </a>
                                        @endif
                                        @if($user->credit_application)
                                        <a href="{{ asset('uploads/user_documents') }}/{{ $user->credit_application }}" class="btn btn-info btn-sm me-2 mt-2" target="_blank">
                                            View Business Credit Application
                                        </a>
                                        @endif
                                    </div>
                                </div>
                                @endif

                                <div class="row">
                                    <div class="col-md-8">
                                        <button type="button" class="btn btn-success btn-sm me-2 mt-2" data-toggle="modal" data-target="#add_balance">
                                            Add Balance
                                        </button>
                                        <button type="button" class="btn btn-primary btn-sm me-2 mt-2" data-toggle="modal" data-target="#add_document">
                                            Add New Document
                                        </button>

                                        @if($user->status == 0)
                                        <button class="btn btn-sm btn-info me-2 mt-2 btn_suspend_user" title="Activate Account" data-status="active" data-id="{{ $user->id }}" data-placement="top" type="button">
                                            Activate Account
                                        </button>
                                        @elseif($user->status == 1)
                                        <button class="btn btn-sm btn-secondary me-2 mt-2 btn_suspend_user" title="Suspend Account" data-status="suspend" data-id="{{ $user->id }}" data-placement="top" type="button">
                                            Suspend Account
                                        </button>
                                        @endif

                                        <button class="btn btn-sm btn-danger mt-2" id="btn_delete_user" title="Delete" data-id="{{ $user->id }}" data-bs-placement="top" type="button">
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tabs-container">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#balance" role="tab">Balance</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#documents" role="tab">Documents</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" id="balance" class="tab-pane active">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <form id="search_form" action="" method="GET">
                                                        <div class="form-group row">
                                                            <div id="data_22" class="col-12 col-md-6 col-lg-4 mb-2 mb-lg-0">
                                                                <div class="input-group date">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control" name="date" value="{{ $filters['date'] ?? '' }}" placeholder="Select Date">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 mb-2 col-lg-4 col-md-3 mb-lg-0 ">
                                                                <select name="status" class="select2 form-control ">
                                                                    <option value="">All Statuses</option>
                                                                    <option value="0" {{ isset($filters['status']) && $filters['status'] == '0' ? 'selected' : '' }}>Unpaid</option>
                                                                    <option value="1" {{ isset($filters['status']) && $filters['status'] == '1' ? 'selected' : '' }}>Paid</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-12 col-md-12 col-lg-4 mb-2 mb-lg-0">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" name="search_query" placeholder="Search by any string..." value="{{ old('search_query', $filters['search_query'] ?? '') }}">
                                                                    <span class="input-group-append">
                                                                        <button type="submit" class="btn btn-primary">Search</button>
                                                                        <a class="btn btn-danger ml-2" data-placement="top" title="View Payments" href="{{ url('/admin/users/manage-user/'.$user->id) }}">
                                                                            Clear
                                                                        </a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div class="table-responsive">
                                                        <table id="table_tbl" class="dataTables-example table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr #</th>
                                                                    <th>Amount</th>
                                                                    <th>Created Date</th>
                                                                    <th>Payment Date</th>
                                                                    <th>Transection ID</th>
                                                                    <th>Status</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php($i = 1)
                                                                @foreach($payments as $payment)
                                                                <tr id="tr">
                                                                    <td>{{ $i++ }}</td>

                                                                    <td>${{$payment->amount}}</td>
                                                                    <td>{{ date_formated($payment->created_date) }}</td>
                                                                    <td>{{ date_formated($payment->trx_date) }}</td>
                                                                    <td>
                                                                        @if($payment->status == 1)
                                                                        {{$payment->trx_id}}
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @if($payment->status == 1)
                                                                        <span class="label label-primary"> Paid </span>
                                                                        @else
                                                                        <span class="label label-danger"> Unpaid </span>
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <button class="btn btn-sm btn-primary btn_view_balance" title="View" data-id="{{ $payment->id }}" data-placement="top" type="button">View</button>
                                                                        <button class="btn btn-sm btn-success btn_edit_balance" title="Edit" data-id="{{ $payment->id }}" data-placement="top" type="button">Edit</button>
                                                                        <button class="btn btn-sm btn-danger btn_delete_balance" title="Delete" data-id="{{ $payment->id }}" data-placement="top" type="button">Delete</button>
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" id="documents" class="tab-pane">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <form id="search_form" action="" method="GET">
                                                        <div class="form-group row">
                                                            <div id="data_22" class="col-12 col-md-6 col-lg-4 mb-2 mb-lg-0">
                                                                <div class="input-group date">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control" name="date" value="{{ $filters['date'] ?? '' }}" placeholder="Select Date">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 col-lg-4 mb-2 mb-lg-0 ">
                                                                <select class="select2 form-control" name="category" id="category">
                                                                    <option value="">Select Category</option>
                                                                    <?php foreach (get_complete_table('categories', '', '', '1') as $category) { ?>
                                                                        <option value="<?php echo $category->id; ?>"
                                                                            <?php echo (isset($filters['category']) && $filters['category'] == $category->id) ? 'selected' : ''; ?>>
                                                                            <?php echo $category->title; ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>

                                                            <div class="col-12 col-md-12 col-lg-4 mb-2 mb-lg-0">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" name="search_query" placeholder="Search by document name..." value="{{ old('search_query', $filters['search_query'] ?? '') }}">
                                                                    <span class="input-group-append">
                                                                        <button type="submit" class="btn btn-primary">Search</button>
                                                                        <a class="btn btn-danger ml-2" data-placement="top" title="View Payments" href="{{ url('/admin/users/manage-user/'.$user->id) }}">
                                                                            Clear
                                                                        </a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div class="table-responsive">
                                                        <table id="table_tbl" class="dataTables-example table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Sr #</th>
                                                                    <th>Document Title</th>
                                                                    <th>Document Category</th>
                                                                    <th>Created Date</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php($i = 1)
                                                                @foreach($documents as $document)
                                                                <tr id="tr">
                                                                    <td>{{ $i++ }}</td>
                                                                    <td>
                                                                        <a href="{{ asset('uploads/documents/' . $document->file_name) }}" target="_blank">
                                                                            {{ $document->file_title}}
                                                                        </a>
                                                                    </td>

                                                                    <td>{{ @get_single_value('categories', 'title',$document->category_id) }}</td>
                                                                    <td>{{ date_formated($document->created_at) }}</td>
                                                                    <td>

                                                                        <button class="btn btn-sm btn-success btn_edit_document" title="Edit" data-id="{{ $document->id }}" data-placement="top" type="button">Edit</button>
                                                                        <button class="btn btn-sm btn-danger btn_delete_document" title="Delete" data-id="{{ $document->id }}" data-placement="top" type="button">Delete</button>
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal inmodal" id="add_document" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <i class="fa fa-clock-o modal-icon"></i>
                <h4 class="modal-title">Add New Document</h4>
            </div>
            <div class="modal-body">
                <form id="add_document_form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id}}">

                    <div class="form-group">
                        <label for="category" class="form-label">Document Category</label>
                        <select class="select2 form-control" name="category" id="category">
                            <option value="">Select Category</option>
                            <?php foreach (get_complete_table('categories', '', '', '1') as $category) { ?>
                                <option value="<?php echo $category->id; ?>">
                                    <?php echo $category->title; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="documentTitle" class="form-label">Document Title</label>
                        <input type="text" class="form-control" id="documentTitle" name="title" placeholder="Enter document title" required>
                    </div>

                    <div class="mb-3">
                        <label for="documentDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="documentDescription" name="description" rows="4" placeholder="Enter document description" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="documentFile" class="form-label">Choose File</label>
                        <input type="file" class="form-control" id="documentFile" name="file" accept=".pdf,.doc,.docx,.txt" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btn_save_document">Add Document</button>
            </div>
        </div>
    </div>
</div>

<div class="modal inmodal show fade" id="edit_document_modalbox" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content animated flipInY" id="edit_document_modalbox_body">
        </div>
    </div>
</div>


<div class="modal inmodal" id="add_balance" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <i class="fa fa-clock-o modal-icon"></i>
                <h4 class="modal-title">Add Balance</h4>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="balance_form">
                    @csrf
                    <input type="hidden" name="user_id" value="{{$user->id}}">
                    <div class="form-group">
                        <label for="title">Balance Title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Enter title" required>
                    </div>
                    <div class="form-group">
                        <label for="balance">Amount</label>
                        <input type="number" name="balance" id="balance" class="form-control" step="0.01" min="0" placeholder="10.12" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btn_save_balace">Add Balance</button>
            </div>
        </div>
    </div>
</div>

<div class="modal inmodal show fade" id="edit_balance_modalbox" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content animated flipInY" id="edit_balance_modalbox_body">
        </div>
    </div>
</div>

<div class="modal inmodal show fade" id="view_balance_modalbox" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content animated flipInY" id="view_balance_modalbox_body">
        </div>
    </div>
</div>



@endsection
@push('scripts')
<script>

    $('.dataTables-example').dataTable({
        "paging": false,
        "searching": false,
        "bInfo": true,
        "responsive": true,
        "columnDefs": [
            { "responsivePriority": 1, "targets": 0 },
            { "responsivePriority": 2, "targets": 1 },
            { "responsivePriority": 3, "targets": -1 },
            { "responsivePriority": 4, "targets": -2 },
        ]
    });

    $('#data_22 .input-group.date').datepicker({
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        calendarWeeks: true,
        autoclose: true,
        format: "yyyy-mm-dd",
    });

    $(document).on("click" , "#btn_save_balace" , function() {
        var btn = $(this).ladda();
        btn.ladda('start');
        var formData =  new FormData($("#balance_form")[0]);
        $.ajax({
            url:"{{ url('admin/users/store-balance') }}",
            type: 'POST',
            data: formData,
            dataType:'json',
            cache: false,
            contentType: false,
            processData: false,
            success:function(status){
                if(status.msg=='success') {
                    toastr.success(status.response,"Success");
                    $('#balance_form')[0].reset();
                    setTimeout(function(){
                        location.reload(true);
                    }, 2000);
                } else if(status.msg == 'error') {
                    btn.ladda('stop');
                    toastr.error(status.response,"Error");
                } else if(status.msg == 'lvl_error') {
                    btn.ladda('stop');
                    var message = "";
                    $.each(status.response, function (key, value) {
                        message += value+"<br>";
                    });
                    toastr.error(message, "Error");
                }
            }
        });
    });
    $(document).on("click", ".btn_edit_balance", function() {
        var id = $(this).attr('data-id');
        $.ajax({
            url: "{{ url('admin/payments/show') }}",
            type: 'POST',
            dataType: 'json',
            data: {
                "_token": "{{ csrf_token() }}",
                'id': id
            },
            success: function(status) {
                $("#edit_balance_modalbox_body").html(status.response);
                $("#edit_balance_modalbox").modal('show');
            }
        });
    });
    $(document).on("click", ".btn_view_balance", function() {
        var id = $(this).attr('data-id');
        $.ajax({
            url: "{{ url('admin/payments/view-details') }}",
            type: 'POST',
            dataType: 'json',
            data: {
                "_token": "{{ csrf_token() }}",
                'id': id
            },
            success: function(status) {
                $("#view_balance_modalbox_body").html(status.response);
                $("#view_balance_modalbox").modal('show');
            }
        });
    });
    $(document).on("click", "#update_balance", function() {
        var btn = $(this).ladda();
        btn.ladda('start');
        var formData = new FormData($("#edit_balance_form")[0]);
        $.ajax({
            url: "{{ url('admin/payments/update') }}",
            type: 'POST',
            data: formData,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            success: function(status) {
                if (status.msg == 'success') {
                    toastr.success(status.response, "Success");
                    setTimeout(function() {
                        location.reload();
                    }, 500);
                } else if (status.msg == 'error') {
                    btn.ladda('stop');
                    toastr.error(status.response, "Error");
                } else if (status.msg == 'lvl_error') {
                    btn.ladda('stop');
                    var message = "";
                    $.each(status.response, function(key, value) {
                        message += value + "<br>";
                    });
                    toastr.error(message, "Error");
                }
            }
        });
    });
    $(document).on("click" , ".btn_delete_balance" , function(){
        var id = $(this).attr('data-id');
        swal({
            title: "Are you sure?",
            text: "You want to delete this balance!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, please!",
            cancelButtonText: "No, cancel please!",
            closeOnConfirm: false,
            closeOnCancel: true
        },
        function(isConfirm) {
            if (isConfirm) {
                $(".confirm").prop("disabled", true);
                $.ajax({
                    url:"{{ url('admin/payments/delete') }}",
                    type:'post',
                    data:{"_token": "{{ csrf_token() }}", 'id': id},
                    dataType:'json',
                    success:function(status){
                        $(".confirm").prop("disabled", false);
                        if(status.msg == 'success'){
                            swal({title: "Success!", text: status.response, type: "success"},
                                function(data){
                                    location.reload(true);
                                });
                        } else if(status.msg=='error'){
                            swal("Error", status.response, "error");
                        }
                    }
                });
            } else {
                swal("Cancelled", "", "error");
            }
        });
    });

    $(document).on("click" , "#btn_save_document" , function() {
        var btn = $(this).ladda();
        btn.ladda('start');
        var formData =  new FormData($("#add_document_form")[0]);
        $.ajax({
            url:"{{ url('admin/users/store-document') }}",
            type: 'POST',
            data: formData,
            dataType:'json',
            cache: false,
            contentType: false,
            processData: false,
            success:function(status){
                if(status.msg=='success') {
                    toastr.success(status.response,"Success");
                    $('#add_document_form')[0].reset();
                    setTimeout(function(){
                        location.reload(true);
                    }, 2000);
                } else if(status.msg == 'error') {
                    btn.ladda('stop');
                    toastr.error(status.response,"Error");
                } else if(status.msg == 'lvl_error') {
                    btn.ladda('stop');
                    var message = "";
                    $.each(status.response, function (key, value) {
                        message += value+"<br>";
                    });
                    toastr.error(message, "Error");
                }
            }
        });
    });
    $(document).on("click", ".btn_edit_document", function() {
        var id = $(this).attr('data-id');
        $.ajax({
            url: "{{ url('admin/documents/show') }}",
            type: 'POST',
            dataType: 'json',
            data: {
                "_token": "{{ csrf_token() }}",
                'id': id
            },
            success: function(status) {
                $("#edit_document_modalbox_body").html(status.response);
                $("#edit_document_modalbox").modal('show');
            }
        });
    });
    $(document).on("click", "#update_document", function() {
        var btn = $(this).ladda();
        btn.ladda('start');
        var formData = new FormData($("#edit_document_form")[0]);
        $.ajax({
            url: "{{ url('admin/documents/update') }}",
            type: 'POST',
            data: formData,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            success: function(status) {
                if (status.msg == 'success') {
                    toastr.success(status.response, "Success");
                    setTimeout(function() {
                        location.reload();
                    }, 500);
                } else if (status.msg == 'error') {
                    btn.ladda('stop');
                    toastr.error(status.response, "Error");
                } else if (status.msg == 'lvl_error') {
                    btn.ladda('stop');
                    var message = "";
                    $.each(status.response, function(key, value) {
                        message += value + "<br>";
                    });
                    toastr.error(message, "Error");
                }
            }
        });
    });
    $(document).on("click" , ".btn_delete_document" , function(){
        var id = $(this).attr('data-id');
        swal({
            title: "Are you sure?",
            text: "You want to delete this document!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, please!",
            cancelButtonText: "No, cancel please!",
            closeOnConfirm: false,
            closeOnCancel: true
        },
        function(isConfirm) {
            if (isConfirm) {
                $(".confirm").prop("disabled", true);
                $.ajax({
                    url:"{{ url('admin/documents/delete') }}",
                    type:'post',
                    data:{"_token": "{{ csrf_token() }}", 'id': id},
                    dataType:'json',
                    success:function(status){
                        $(".confirm").prop("disabled", false);
                        if(status.msg == 'success'){
                            swal({title: "Success!", text: status.response, type: "success"},
                                function(data){
                                    location.reload(true);
                                });
                        } else if(status.msg=='error'){
                            swal("Error", status.response, "error");
                        }
                    }
                });
            } else {
                swal("Cancelled", "", "error");
            }
        });
    });

    $(document).on("click" , ".btn_suspend_user" , function(){
        var id = $(this).attr('data-id');
        var datastatus = $(this).attr('data-status');

        swal({
            title: "Are you sure?",
            text: "You want to "+datastatus+" this user account!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, please!",
            cancelButtonText: "No, cancel please!",
            closeOnConfirm: false,
            closeOnCancel: true
        },
        function(isConfirm) {
            if (isConfirm) {
                $(".confirm").prop("disabled", true);
                $.ajax({
                    url:"{{ url('admin/users/suspend') }}",
                    type:'post',
                    data:{"_token": "{{ csrf_token() }}", 'id': id},
                    dataType:'json',
                    success:function(status){
                        $(".confirm").prop("disabled", false);
                        if(status.msg == 'success'){
                            swal({title: "Success!", text: status.response, type: "success"},
                                function(data){
                                    location.reload(true);
                                });
                        } else if(status.msg=='error'){
                            swal("Error", status.response, "error");
                        }
                    }
                });
            } else {
                swal("Cancelled", "", "error");
            }
        });
    });
    $(document).on("click" , "#btn_delete_user" , function(){
        var id = $(this).attr('data-id');
        swal({
            title: "Are you sure?",
            text: "You want to delete this user!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, please!",
            cancelButtonText: "No, cancel please!",
            closeOnConfirm: false,
            closeOnCancel: true
        },
        function(isConfirm) {
            if (isConfirm) {
                $(".confirm").prop("disabled", true);
                $.ajax({
                    url:"{{ url('admin/users/delete') }}",
                    type:'post',
                    data:{"_token": "{{ csrf_token() }}", 'id': id},
                    dataType:'json',
                    success:function(status){
                        $(".confirm").prop("disabled", false);
                        if(status.msg == 'success'){
                            swal({title: "Success!", text: status.response, type: "success"},
                                function(data){
                                    window.location.href = "{{ url('admin/users') }}";
                                });
                        } else if(status.msg=='error'){
                            swal("Error", status.response, "error");
                        }
                    }
                });
            } else {
                swal("Cancelled", "", "error");
            }
        });
    });

</script>
@endpush