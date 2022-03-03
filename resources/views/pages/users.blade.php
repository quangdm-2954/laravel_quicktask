@extends('layouts.master')
@section('users','active')
@section('title','QuickTask|Users')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2 class="title">List Users</h2>
                        <p class="category">All users of systems</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead class="thead-dark">
                                <th>ID</th>
                                <th>{{__('First Name')}}</th>
                                <th>{{__('Last Name')}}</th>
                                <th>{{__('User Name')}}</th>
                                <th>{{__('Email')}}</th>
                                <th>{{__('Status')}}</th>
                                <th>{{__('Action')}}</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td>Minh Quang</td>
                                    <td>Doan</td>
                                    <td>Doan-Minh-Quang</td>
                                    <td>Dmquang1999@gmail.com</td>
                                    <td>Active</td>
                                    <td>
                                        <a href="{{route('posts.index')}}" class="btn btn-info">{{__('List Posts')}}</a>
                                        <a href="{{route('users.show','1')}}" class="btn btn-success">{{__('View')}}</a>
                                        <a href="{{route('users.destroy','1')}}" class="btn btn-danger">{{__('Delete')}}</a>
                                        <a href="{{route('users.edit','1')}}"class="btn btn-primary">{{__('Update')}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">2</td>
                                    <td>Minh Quang</td>
                                    <td>Doan</td>
                                    <td>Doan-Minh-Quang</td>
                                    <td>Dmquang1999@gmail.com</td>
                                    <td>Active</td>
                                    <td>
                                        <a href="{{route('posts.index')}}" class="btn btn-info">{{__('List Posts')}}</a>
                                        <a href="{{route('users.show','1')}}" class="btn btn-success">{{__('View')}}</a>
                                        <a href="{{route('users.destroy','1')}}" class="btn btn-danger">{{__('Delete')}}</a>
                                        <a href="{{route('users.edit','1')}}"class="btn btn-primary">{{__('Update')}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">3</td>
                                    <td>Minh Quang</td>
                                    <td>Doan</td>
                                    <td>Doan-Minh-Quang</td>
                                    <td>Dmquang1999@gmail.com</td>
                                    <td>Active</td>
                                    <td>
                                        <a href="{{route('posts.index')}}" class="btn btn-info">{{__('List Posts')}}</a>
                                        <a href="{{route('users.show','1')}}" class="btn btn-success">{{__('View')}}</a>
                                        <a href="{{route('users.destroy','1')}}" class="btn btn-danger">{{__('Delete')}}</a>
                                        <a href="{{route('users.edit','1')}}"class="btn btn-primary">{{__('Update')}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">4</td>
                                    <td>Minh Quang</td>
                                    <td>Doan</td>
                                    <td>Doan-Minh-Quang</td>
                                    <td>Dmquang1999@gmail.com</td>
                                    <td>Active</td>
                                    <td>
                                        <a href="{{route('posts.index')}}" class="btn btn-info">{{__('List Posts')}}</a>
                                        <a href="{{route('users.show','1')}}" class="btn btn-success">{{__('View')}}</a>
                                        <a href="{{route('users.destroy','1')}}" class="btn btn-danger">{{__('Delete')}}</a>
                                        <a href="{{route('users.edit','1')}}"class="btn btn-primary">{{__('Update')}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">5</td>
                                    <td>Minh Quang</td>
                                    <td>Doan</td>
                                    <td>Doan-Minh-Quang</td>
                                    <td>Dmquang1999@gmail.com</td>
                                    <td>Active</td>
                                    <td>
                                        <a href="{{route('posts.index')}}" class="btn btn-info">{{__('List Posts')}}</a>
                                        <a href="{{route('users.show','1')}}" class="btn btn-success">{{__('View')}}</a>
                                        <a href="{{route('users.destroy','1')}}" class="btn btn-danger">{{__('Delete')}}</a>
                                        <a href="{{route('users.edit','1')}}"class="btn btn-primary">{{__('Update')}}</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
