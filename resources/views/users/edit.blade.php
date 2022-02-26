@extends('layouts.app', ['page' => __('User Management'), 'pageSlug' => 'management'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="title">{{ __('Update User') }}</h5>
            </div>
            <form method="post" action="/user/{{ $user->id }}" autocomplete="off">
                <div class="card-body">
                    @csrf
                    @method('put')

                    @include('alerts.success')

                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <label>{{ __('Name') }}</label>
                        <input type="text" name="name"
                            class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                            placeholder="{{ __('Name') }}" value="{{ old('name', $user->name) }}">
                        @include('alerts.feedback', ['field' => 'name'])
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