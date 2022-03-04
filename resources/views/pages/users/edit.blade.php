@extends('layouts.master')
@section('users', 'active')
@section('title', 'QuickTask|Users')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">{{ __('Edit Profile') }}</h4>
                        </div>
                        <div class="content">
                            <form action="{{ route('users.update', $user->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" disabled placeholder="Email"
                                                value="{{ $user->email }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>{{ __('First Name') }}</label>
                                            <input type="text" class="form-control" placeholder="First Name"
                                                name="first_name" value="{{ $user->first_name }}">
                                            <small class="text-danger">{{ $errors->first('first_name') ?? '' }}</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>{{ __('Last Name') }}</label>
                                            <input type="text" class="form-control" placeholder="Last Name"
                                                name="last_name" value="{{ $user->last_name }}">
                                            <small class="text-danger">{{ $errors->first('last_name') ?? '' }}</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>{{ __('User Name') }}</label>
                                    <input type="text" class="form-control" placeholder="User Name" name="username"
                                        value="{{ $user->username }}">
                                    <small class="text-danger">{{ $errors->first('username') ?? '' }}</small>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="isActive" name="isActive"
                                        id="isActive" {{ $user->isActive == config('app.ACTIVE') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="isActive">
                                        {{ __('Active') }}
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="isAdmin" name="isAdmin"
                                        id="isAdmin" {{ $user->isAdmin == config('app.ADMIN') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="isAdmin">
                                        {{ __('Admin ') }}
                                    </label>
                                </div>
                                <button type="submit"
                                    class="btn btn-info btn-fill pull-right">{{ __('Edit Profile') }}</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
