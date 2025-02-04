@extends('admin.admin_app')
@section('title', 'Contact Messages')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8 col-sm-8 col-xs-8">
        <h2>Contact Messages</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('admin/dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="{{ url('admin/contacts') }}"><strong>Contact Messages</strong></a>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>Contact Messages</h5>
                </div>
                <div class="ibox-content">
                    <form id="search_form" action="" method="GET">
                        <div class="form-group row justify-content-end">
                            <div class="col-12 col-lg-5 col-md-6 mb-2 col-md-3 mb-lg-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search_query" placeholder="Search by name, email..." value="{{ old('search_query', $filters['search_query'] ?? '') }}">
                                    <span class="input-group-append">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                        <a class="btn btn-danger ml-3 " data-placement="top" title="View Payments" href="{{ url('admin/contacts') }}">Clear
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
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Received At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i = 1)
                                @foreach($messages as $message)
                                <tr id="tr">
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $message->email }}</td>
                                    <td>{{ $message->subject }}</td>
                                    <td>{{ $message->created_at->format('d M Y, H:i') }}</td>
                                    <td>
                                        <button class="btn btn-secondary btn-sm btn_view" data-id="{{ $message->id }}" type="button" data-placement="top" title="View">View</button>

                                        <button class="btn btn-sm btn-danger btn_delete_record" title="Delete" data-id="{{ $message->id }}" data-bs-placement="top" type="button">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            <p>Showing {{ $messages->firstItem() }} to {{ $messages->lastItem() }} of {{ $messages->total() }} entries</p>
                        </div>
                        <div class="col-md-3 text-right">
                            {{ $messages->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal inmodal show fade" id="view_modalbox" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content animated fadeInDown" id="view_modalbox_body">
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

   $(document).on("click" , ".btn_view" , function() {
        var id = $(this).attr('data-id');
        $.ajax({
            url:"{{ url('admin/contacts/show') }}",
            type: 'POST',
            dataType:'json',
            data: {"_token": "{{ csrf_token() }}", 'id': id},
            success:function(status){
                $("#view_modalbox_body").html(status.response);
                $("#view_modalbox").modal('show');
            }
        });
    });


    $(document).on("click" , ".btn_delete_record" , function(){
        var id = $(this).attr('data-id');
        swal({
            title: "Are you sure?",
            text: "You want to delete this message account!",
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
                    url:"{{ url('admin/contacts/delete') }}",
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
