@extends('layouts.theme')

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
@section('content')

    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">Users</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <table class="table table-bordered data-table">
        <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th> <!-- NEW COLUMN -->
            <th width="150px">Action</th> <!-- slightly wider for two buttons -->
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
@endsection
{{--<script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>--}}
<!-- DataTables JS -->
{{--<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>--}}
<script type="text/javascript">
    $(function () {

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('users.index') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'role', name: 'role'}, // NEW COLUMN
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

    });
</script>
