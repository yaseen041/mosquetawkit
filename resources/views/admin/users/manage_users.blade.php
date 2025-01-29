@extends('admin.admin_app')
@section('title', 'Users')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8 col-sm-8 col-xs-8">
        <h2>Users</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('admin/dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="{{ url('admin/users') }}"><strong>Users</strong></a>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>Users</h5>
                </div>
                <div class="ibox-content">
                    <form id="search_form" action="" method="GET">
                        <div class="form-group row justify-content-end">
                            <div class="col-12 col-lg-3 col-md-6 mb-2 col-md-3 mb-lg-0">
                                <select name="status" class="select2 form-control ">
                                    <option value="">All Statuses</option>
                                    <option value="0" {{ isset($filters['status']) && $filters['status'] == '0' ? 'selected' : '' }}>Suspended</option>
                                    <option value="1" {{ isset($filters['status']) && $filters['status'] == '1' ? 'selected' : '' }}>Active</option>
                                </select>
                            </div>

                            <div class="col-12 col-lg-4 col-md-6 mb-2 col-md-3 mb-lg-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search_query" placeholder="Search by name, email..." value="{{ old('search_query', $filters['search_query'] ?? '') }}">
                                    <span class="input-group-append">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                        <a class="btn btn-danger ml-3 " data-placement="top" title="View Payments" href="{{ url('/admin/users') }}">Clear
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i = 1)
                                @foreach($users as $user)
                                <tr id="tr">
                                    <td>{{ $i++ }}</td>
                                    <td>
                                        <?php if(empty($user->first_name) && empty($user->last_name)){
                                            echo $user->full_name;
                                        } else {
                                            echo $user->first_name.' '. $user->last_name;
                                        } ?>
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if($user->status == 1)
                                        <span class="label label-success">Active</span>
                                        @elseif($user->status == 0)
                                        <span class="label label-warning">Suspended</span>
                                        @endif
                                    </td>
                                    <td>
                                       {{--  <a class="btn btn-primary btn-sm" data-placement="top" title="Manage User" href="{{ url('/admin/users/manage-user/'.$user->id) }}">
                                            Manage User
                                        </a> --}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            <p>Showing {{ $users->firstItem() }} to {{ $users->lastItem() }} of {{ $users->total() }} entries</p>
                        </div>
                        <div class="col-md-3 text-right">
                            {{ $users->links('pagination::bootstrap-4') }}
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
    $('#table_tbl').dataTable({
        "paging": false,
        "searching": false,
        "bInfo":false,
        "responsive": true,
        "lengthMenu": [ [ 25, 50, 100, -1], [ 25, 50, 100, "All"] ],
        "columnDefs": [
            { "responsivePriority": 1, "targets": 0 },
            { "responsivePriority": 2, "targets": -1 },
            { "responsivePriority": 3, "targets": -2 },
        ]
    });

    $(document).on("click" , ".btn_suspend" , function(){
        var id = $(this).attr('data-id');
        swal({
            title: "Are you sure?",
            text: "You want to suspend this user account!",
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

    $(document).on("click" , ".btn_delete" , function(){
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
</script>
@endpush