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
           <a href="{{ route('projects.create') }}" class="btn btn-primary float-end">Add Project</a>
       </div>
   </div>

    <div class="card-body">

        <div class="row">

            <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Priority</th>
                    <th>Status</th> <!-- NEW COLUMN -->
                    <th width="150px">Action</th> <!-- slightly wider for two buttons -->
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>


    <!-- Assign Project Modal -->
    <div class="modal fade" id="assignProjectModal" tabindex="-1" aria-labelledby="assignProjectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="assignProjectModalLabel">Assign Project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="assignProjectForm">
                    @csrf
                    <input type="hidden" name="project_id" id="project_id">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="user_id" class="form-label">Select User</label>
                            <select class="form-select" id="user_id" name="user_id" required>
                                <option value="">Loading users...</option>
                            </select>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" name="notes"  id="notes" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Notes</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Assign Project</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
{{--    <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Open first modal</button>--}}
@endsection

<script type="text/javascript">
    $(function () {
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('projects.index') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'priority', name: 'priority'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

        // Handle Assign Project Button Click
        $(document).on('click', '.assign-project', function(e) {
            e.preventDefault();
            var projectId = $(this).data('project-id');
            $('#project_id').val(projectId);

            // Fetch users via AJAX
            $.ajax({
                url: '{{ route("users.list") }}',
                type: 'GET',
                success: function(response) {
                    var userSelect = $('#user_id');
                    userSelect.empty();
                    userSelect.append('<option value="">Select User</option>');

                    $.each(response.users, function(key, user) {
                        userSelect.append('<option value="' + user.id + '">' + user.name + ' (' + user.email + ')</option>');
                    });

                    $('#assignProjectModal').modal('show');
                },
                error: function(xhr) {
                    alert('Error loading users. Please try again.');
                }
            });
        });

        // Handle Form Submission
        $('#assignProjectForm').on('submit', function(e) {
            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                url: '{{ route("projects.assign") }}',
                type: 'POST',
                data: formData,
                success: function(response) {
                    if (response.success) {
                        $('#assignProjectModal').modal('hide');
                        alert('Project assigned successfully!');
                        table.ajax.reload();
                    } else {
                        alert(response.message || 'Error assigning project');
                    }
                },
                error: function(xhr) {
                    alert('Error assigning project. Please try again.');
                }
            });
        });
    });
</script>
