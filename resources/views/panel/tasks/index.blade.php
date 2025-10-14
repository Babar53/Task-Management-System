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
                        <li class="breadcrumb-item" aria-current="page">{{ $title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<div class="card">

   <div class="card-header">
       <div class="card-title">
          <h2> {{ $title }} </h2>
           <a href="{{ route('tasks.create') }}" class="btn btn-primary float-end">Add Task</a>
       </div>
   </div>

    <div class="card-body">

        <div class="row">

            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Priority</th>
                    <th width="150px">Action</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
{{--<script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>--}}
<!-- DataTables JS -->
{{--<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>--}}
<script type="text/javascript">
    $(function () {

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('tasks.index') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'title', name: 'title'},
                {
                    data: 'status',
                    name: 'status',
                    render: function(data, type, full, meta) {
                        // Format status with appropriate badge
                        const statusMap = {
                            'todo': 'secondary',
                            'in_progress': 'primary',
                            'in_review': 'info',
                            'completed': 'success'
                        };
                        const formattedStatus = data.replace('_', ' ').replace(/\b\w/g, l => l.toUpperCase());
                        return '<span class="badge bg-' + (statusMap[data] || 'secondary') + '">' + formattedStatus + '</span>';
                    }
                },
                {
                    data: 'priority',
                    name: 'priority',
                    render: function(data, type, full, meta) {
                        // Format priority with appropriate badge
                        const priorityMap = {
                            'low': 'info',
                            'medium': 'primary',
                            'high': 'warning',
                            'urgent': 'danger'
                        };
                        const formattedPriority = data.charAt(0).toUpperCase() + data.slice(1);
                        return '<span class="badge bg-' + (priorityMap[data] || 'secondary') + '">' + formattedPriority + '</span>';
                    }
                },
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

    });
</script>
<script type="module">
    window.Echo.channel('tasks')
        .listen('.create', (data) => {
            console.log('Order status updated: ', data);
            var d1 = document.getElementById('notification');
            d1.insertAdjacentHTML('beforeend', '<div class="alert alert-success alert-dismissible fade show"><span><i class="fa fa-circle-check"></i>  '+data.message+'</span></div>');
        });
</script>
