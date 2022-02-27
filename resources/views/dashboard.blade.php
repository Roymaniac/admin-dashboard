@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header ">
                <div class="row">
                    <div class="col-sm-6 text-left">
                        <h5 class="card-category">Total Shipments</h5>
                        <h2 class="card-title">Performance</h2>
                    </div>
                    <div class="col-sm-6">
                        <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                            <label class="btn btn-sm btn-primary btn-simple active" id="0">
                                <input type="radio" name="options" checked>
                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Accounts</span>
                                <span class="d-block d-sm-none">
                                    <i class="tim-icons icon-single-02"></i>
                                </span>
                            </label>
                            <label class="btn btn-sm btn-primary btn-simple" id="1">
                                <input type="radio" class="d-none d-sm-none" name="options">
                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Purchases</span>
                                <span class="d-block d-sm-none">
                                    <i class="tim-icons icon-gift-2"></i>
                                </span>
                            </label>
                            <label class="btn btn-sm btn-primary btn-simple" id="2">
                                <input type="radio" class="d-none" name="options">
                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Sessions</span>
                                <span class="d-block d-sm-none">
                                    <i class="tim-icons icon-tap-02"></i>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="chartBig1"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="card card-chart">
            <div class="card-header">
                <h5 class="card-category">Total Shipments</h5>
                <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> 763,215</h3>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="chartLinePurple"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card card-chart">
            <div class="card-header">
                <h5 class="card-category">Daily Sales</h5>
                <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i> 3,500€</h3>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="CountryChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card card-chart">
            <div class="card-header">
                <h5 class="card-category">Completed Tasks</h5>
                <h3 class="card-title"><i class="tim-icons icon-send text-success"></i> 12,100K</h3>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="chartLineGreen"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-12">
        <div class="card card-tasks">
            <div class="card-header ">
                <h6 class="title d-inline">Tasks ({{ $tasks->count() }})</h6>
                <p class="card-category d-inline">today</p>
                <div class="dropdown">
                    <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
                        <i class="tim-icons icon-settings-gear-63"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#pablo">Action</a>
                        <a class="dropdown-item" href="#pablo">Another action</a>
                        <a class="dropdown-item" href="#pablo">Something else</a>
                    </div>
                </div>
            </div>
            <div class="card-body ">
                <div class="table-full-width table-responsive">
                    <table class="table">
                        <tbody>
                            @foreach ($tasks as $task)

                            <tr>
                                <td>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="">
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <p class="title text-info">{{ $task->title }}</p>
                                    <p class="text-muted">{{ $task->description }}</p>
                                </td>
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="" class="btn btn-link"
                                        data-original-title="Edit Task">
                                        <i class="tim-icons icon-pencil"></i>
                                    </button>
                                </td>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card ">
            <div class="card-header">
                <h4 class="card-title">Employees Table</h4>
            </div>
            <div class="card-body">
                <div class="table-full-width table-responsive">
                    <table class="table tablesorter" id="">
                        <thead>
                            <tr>
                                <th class="text-info">
                                    Name
                                </th>
                                <th class="text-info">
                                    Country
                                </th>
                                <th class="text-info">
                                    City
                                </th>
                                <th class="text-center text-info">
                                    Salary
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)

                            <tr>
                                <td>
                                    {{ $employee->name }}
                                </td>
                                <td>
                                    {{ $employee->country }}
                                </td>
                                <td>
                                    {{ $employee->city }}
                                </td>
                                <td class="text-center">
                                    $ {{ $employee->salary }}
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
<script>
    $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
</script>
@endpush