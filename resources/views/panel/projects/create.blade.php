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
                        <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">Projects</a></li>
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
            <form method="post" action="{{ route('projects.store') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" placeholder="Project Name" name="name">
                            <label for="floatingInput">Title</label>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 mb-3">
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



                    <div class="col-md-12 col-lg-12 mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Project Description" name="description" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea">Description</label>
                        </div>

                    </div>

                    <div class="col-md-6 col-lg-6 mb-3">
                        <div class="form-floating">
                            <input type="date" class="form-control" id="start_date"  name="start_date">
                            <label for="floatingInput">Start Date</label>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 mb-3">
                        <div class="form-floating">
                            <input type="date" class="form-control" id="end_date"  name="end_date">
                            <label for="floatingInput">End Date</label>
                        </div>
                    </div>


                    <div class="d-flex justify-content-end mt-3">
                        <button type="submit" class="btn btn-primary float-end">Create Project</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection

<script type="text/javascript">

</script>
