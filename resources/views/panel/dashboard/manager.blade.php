@extends('layouts.theme')

@section('content')
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-2 f-w-400 text-muted">Total Tasks Completed</h6>
                    <h4 class="mb-0">{{ $completedTasks ?? 0 }}<span class="badge bg-light-primary border border-primary"><i
                                class="ti ti-trending-up"></i> 70.5%</span></h4>
                </div>
                <div id="total-value-graph-1"></div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-2 f-w-400 text-muted">Pending Tasks</h6>
                    <h4 class="mb-0">{{ $pendingTasks ?? 0 }}<span class="badge bg-light-primary border border-primary"><i
                                class="ti ti-trending-up"></i> 70.5%</span></h4>
                </div>
                <div id="total-value-graph-1"></div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-2 f-w-400 text-muted">High Priority Tasks</h6>
                    <h4 class="mb-0">{{ $urgentTasks ?? 0 }}<span class="badge bg-light-primary border border-primary"><i
                                class="ti ti-trending-up"></i> 70.5%</span></h4>
                </div>
                <div id="total-value-graph-1"></div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-2 f-w-400 text-muted">Assigned Projects</h6>
                    <h4 class="mb-0">{{ $assignedProjects ?? 0}} <span class="badge bg-light-warning border border-warning"><i
                                class="ti ti-trending-down"></i> 27.4%</span></h4>
                </div>
                <div id="total-value-graph-2"></div>
            </div>
        </div>
    </div>
@endsection
