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
                        <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Roles</a></li>
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
            <form method="post" action="{{ route('roles.update' ,$role->id) }}">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" value="{{ $role->name ?? '' }}" name="name">
                            <label for="floatingInput">Name</label>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-12">
                        @foreach($permissions as $permission)
                            <div class="col-md-4 mt-2">
                                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" @if($role->hasPermissionTo($permission->name)) checked @endif id="{{ $permission->id }}"
                                           name="permissions[]" value="{{ $permission->name }}" autocomplete="off">
                                    <label class="btn btn-outline-primary"
                                           for="{{ $permission->id }}">{{ $permission->name }}</label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary float-end">Update Role</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection

<script type="text/javascript">

</script>
