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
                            <h4 class="title">{{ __('Profile Detail') }}</h4>
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" disabled placeholder="Company"
                                            value="{{ $user->email }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{ __('First Name') }}</label>
                                        <input type="text" class="form-control" placeholder="Username"
                                            value="{{ $user->first_name }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{ __('Last Name') }}</label>
                                        <input type="text" class="form-control" placeholder="Username"
                                            value="{{ $user->last_name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>{{ __('User Name') }}</label>
                                <input type="text" class="form-control" placeholder="City"
                                    value="{{ $user->username }}">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                    {{ $user->isActive == config('app.ACTIVE') ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ __('Active') }}
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                    {{ $user->isAdmin == config('app.ADMIN') ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexCheckChecked">
                                    {{ __('Admin') }}
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
