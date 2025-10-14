@extends('layouts.theme')


@section('content')
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-2 f-w-400 text-muted">Total Users</h6>
                    <h4 class="mb-0">{{ $totalUsers }}<span class="badge bg-light-primary border border-primary"><i
                                class="ti ti-trending-up"></i> 70.5%</span></h4>
                </div>
                <div id="total-value-graph-1"></div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-2 f-w-400 text-muted">Total Projects</h6>
                    <h4 class="mb-0">{{ $totalProjects }} <span class="badge bg-light-warning border border-warning"><i
                                class="ti ti-trending-down"></i> 27.4%</span></h4>
                </div>
                <div id="total-value-graph-2"></div>
            </div>
        </div>
    </div>
@endsection
