@extends('admin.admin_app')
@section('title', 'Manage Mosque')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8 col-sm-8 col-xs-8">
        <h2>Mosques</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('admin/dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ url('admin/mosques') }}"><strong>Mosque</strong></a>
            </li>
            <li class="breadcrumb-item active">
                <a href="#"><strong>Manage Mosque</strong></a>
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
                    <h5>Mosque Details</h5>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <strong class="text-dark">Mosque Name:</strong>
                                    <span>{{ $mosque->mosque_name }}</span>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <strong class="text-dark">Email:</strong>
                                    <span class="text-navy"><a href="mailto:{{ $mosque->email }}" target="_blank" class="text-navy">{{ $mosque->email }}</a></span>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <strong class="text-dark">ID:</strong>
                                    <span>{{ $mosque->unique_id }}</span>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <strong class="text-dark">App Name:</strong>
                                    <span>{{ $mosque->app_name }}</span>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <strong class="text-dark">Country:</strong>
                                    <span>{{ $mosque->country }}</span>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <strong class="text-dark">City:</strong>
                                    <span>{{ $mosque->city }}</span>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <strong class="text-dark">Created Date:</strong>
                                    <span>{{ date_formated($mosque->created_at) }}</span>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <strong class="text-dark">Message Expire Date:</strong>
                                    <span>{{ date_formated($mosque->message_expire_date) }}</span>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <strong class="text-dark">Account Status:</strong>
                                    <span class="label {{ $mosque->status == 1 ? 'bg-success' : 'bg-danger' }}">
                                        {{ $mosque->status == 1 ? 'Active' : 'Suspended' }}
                                    </span>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <strong class="text-dark">Message:</strong>
                                    <span>{{ $mosque->message }}</span>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-2">
                            @if( @$mosque->qr_code)
                            <a href="{{ @$mosque->qr_code }}" target="_blank">
                                <img src="{{ @$mosque->qr_code }}" alt="{{ @$mosque->mosque_name }}" class="media img_width">
                            </a>
                            @endif
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            @if($mosque->status == 0)
                            <button class="btn btn-sm btn-success btn_update_statuses" title="Activate Account" data-status="active" data-id="{{ $mosque->id }}" data-placement="top" type="button">Activate Account</button>
                            @elseif($mosque->status == 1)
                            <button class="btn btn-sm btn-secondary btn_update_statuses" title="Suspend Account" data-status="suspend" data-id="{{ $mosque->id }}" data-placement="top" type="button">Suspend Account</button>
                            @endif
                            <button class="btn btn-sm btn-danger btn_delete_record" title="Delete" data-id="{{ $mosque->id }}" data-bs-placement="top" type="button">Delete</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script>
    $(document).on("click" , ".btn_update_statuses" , function(){
        var id = $(this).attr('data-id');
        var datastatus = $(this).attr('data-status');

        swal({
            title: "Are you sure?",
            text: "You want to "+datastatus+" this mosque account!",
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
                    url:"{{ url('admin/mosques/update_status') }}",
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
    $(document).on("click" , ".btn_delete_record" , function(){
        var id = $(this).attr('data-id');
        swal({
            title: "Are you sure?",
            text: "You want to delete this mosque account!",
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
                    url:"{{ url('admin/mosques/delete') }}",
                    type:'post',
                    data:{"_token": "{{ csrf_token() }}", 'id': id},
                    dataType:'json',
                    success:function(status){
                        $(".confirm").prop("disabled", false);
                        if(status.msg == 'success'){
                            swal({title: "Success!", text: status.response, type: "success"},
                                function(data){
                                    window.location.href = "{{ url('admin/mosques') }}";
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