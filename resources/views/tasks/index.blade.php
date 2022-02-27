@extends('layouts.app', ['page' => __('Task Management'), 'pageSlug' => 'tasks'])

@section('content')

<div class="col-lg-12 col-md-12">
    @include('alerts.success')
    <div class="card card-tasks">
        <div class="card-header ">
            <h6 class="title d-inline">Tasks ({{ $tasks->count() }})</h6>
            <p class="card-category d-inline">today</p>
            <div class="dropdown">
                <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
                    <i class="tim-icons icon-simple-add"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('task.create') }}">Add New Task</a>
                    {{-- <a class="dropdown-item" href="#pablo">Another action</a>
                    <a class="dropdown-item" href="#pablo">Something else</a> --}}
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
                                <a href="/task/{{ $task->id }}}/edit" rel="tooltip" title="" class="btn btn-link"
                                    data-original-title="Edit Task">
                                    <i class="tim-icons icon-pencil"></i>
                                </a>
                            </td>
                            <td class="td-actions text-right">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-link dropdown-toggle btn-icon"
                                        data-toggle="dropdown">
                                        <i class="tim-icons icon-settings-gear-63"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <form method="post" action="/task/{{ $task->id }}">
                                            @csrf
                                            @method('delete')
                                            <button class="dropdown-item">Delete Task </button>
                                        </form>
                                    </div>
                                </div>
                                {{-- <button type="button" class="btn btn-link dropdown-toggle btn-icon">
                                    <i class="tim-icons icon-trash-simple">
                                        <form method="post" action="/task/{{ $task->id }}">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </i>

                                </button> --}}

                            </td>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection