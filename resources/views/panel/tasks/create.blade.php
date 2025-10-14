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
                        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
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
            </div>
        </div>

        <div class="card-body">
            <form method="post" action="{{ route('tasks.store') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="title" placeholder="Task Title" name="title" value="{{ old('title') }}">
                            <label for="floatingInput">Title</label>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="form-floating">
                            <select class="form-select" name="project_id" id="project_id"
                                    aria-label="Floating label select example">
                                @foreach($projects as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Select Project</label>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="form-floating">
                            <select class="form-select" name="user_id" id="user"
                                    aria-label="Floating label select example">
                                @foreach($users as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Assign To</label>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 md-3">
                        <div class="form-floating">
                            <select class="form-select" name="priority" id="priority"
                                    aria-label="Floating label select example">
                                <option value="low">Low</option>
                                <option value="medium">Medium</option>
                                <option value="high">High</option>
                                <option value="urgent">Urgent</option>
                            </select>
                            <label for="floatingSelect">Priority</label>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-12 mt-3">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" name="description"
                                      id="floatingTextarea2" style="height: 100px">{{ old('description') }}</textarea>
                            <label for="floatingTextarea2">Description</label>
                        </div>
                    </div>
<div class=" row align-items-center mt-3">
                    <div class="col-auto ">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="is_time_limit" >
                            <label class="form-check-label" for="is_time_limit">Time Limit ?</label>
                        </div>
                    </div>

                    <div class="col-auto col-lg-5">
                        <div class="form-floating" id="due_date">
                            <input type="date" class="form-control" id="endtime" placeholder="Task Title" name="due_date" value="{{ old('due_date') }}">
                            <label for="floatingInput">Due Date</label>
                        </div>
                    </div>
</div>

                    <div class="d-flex justify-content-end mt-2">
                        <button type="submit" class="btn btn-primary float-end">Create Task</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', () => {
        const timeLimitCheckbox = document.getElementById("is_time_limit");
        const dueDateField = document.getElementById('due_date');

        if (!timeLimitCheckbox || !dueDateField) {
            console.error("Required elements not found!");
            return;
        }

        // Function to toggle visibility
        const toggleDueDate = () => {
            dueDateField.style.display = timeLimitCheckbox.checked ? "block" : "none";
        };

        // Initialize and add event listener
        toggleDueDate();
        timeLimitCheckbox.addEventListener('change', toggleDueDate);
    });
</script>
