@extends('layouts.app', ['page' => __('Task Management'), 'pageSlug' => 'tasks'])

@section('content')
<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
            </div>
            <form method="post" action="{{ route('task.store') }}" autocomplete="off">
                <div class="card-body">
                    @csrf
                    @method('post')

                    @include('alerts.success')

                    <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                        <label>{{ __('Title') }}</label>
                        <input type="text" name="title"
                            class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                            placeholder="{{ __('Title') }}" value="{{ old('title') }}">
                        @include('alerts.feedback', ['field' => 'title'])
                    </div>

                    <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                        <label>{{ __('Description') }}</label>
                        <input type="description" name="description"
                            class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                            placeholder="{{ __('Description') }}" value="{{ old('description') }}">
                        @include('alerts.feedback', ['field' => 'description'])
                    </div>
                </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-fill btn-primary">{{ __('Save') }}</button>
        </div>
        </form>
    </div>

</div>

</div>
</div>
</div>
@endsection