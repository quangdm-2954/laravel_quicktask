@extends('layouts.master')
@section('posts','active')
@section('title','QuickTask|Post')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2 class="title">{{__('List Posts')}}</h2>
                        <p class="category">All Posts of systems</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead class="thead-dark">
                                <th>ID</th>
                                <th>{{__('Title')}}</th>
                                <th>{{__('Description')}}</th>
                                <th>{{__('Content')}}</th>
                                <th>{{__('Author')}}</th>
                                <th>{{__('Action')}}</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td class="text-truncate">Earum fuga molestiae officia.</td>
                                    <td class="text-truncate">Sunt velit sunt velit perspiciatis. Esse tempore reprehenderit voluptas. Incidunt et quae consequatur.</td>
                                    <td class="text-truncate">Sunt velit sunt velit perspiciatis. Esse tempore reprehenderit voluptas. Incidunt et quae consequatur.</td>
                                    <td class="text-truncate">Minh Quang</td>
                                    <td>
                                        <button type="button" class="btn btn-success">{{__('View')}}</button>
                                        <button type="button" class="btn btn-danger">{{__('Delete')}}</button>
                                        <button type="button" class="btn btn-primary">{{__('Update')}}</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">2</td>
                                    <td class="text-truncate">Earum fuga molestiae officia.</td>
                                    <td class="text-truncate">Sunt velit sunt velit perspiciatis. Esse tempore reprehenderit voluptas. Incidunt et quae consequatur.</td>
                                    <td class="text-truncate">Sunt velit sunt velit perspiciatis. Esse tempore reprehenderit voluptas. Incidunt et quae consequatur.</td>
                                    <td class="text-truncate">Minh Quang</td>
                                    <td>
                                        <button type="button" class="btn btn-success">{{__('View')}}</button>
                                        <button type="button" class="btn btn-danger">{{__('Delete')}}</button>
                                        <button type="button" class="btn btn-primary">{{__('Update')}}</button>
                                    </td>
                                </tr>
                                <<tr>
                                    <td scope="row">3</td>
                                    <td class="text-truncate">Earum fuga molestiae officia.</td>
                                    <td class="text-truncate">Sunt velit sunt velit perspiciatis. Esse tempore reprehenderit voluptas. Incidunt et quae consequatur.</td>
                                    <td class="text-truncate">Sunt velit sunt velit perspiciatis. Esse tempore reprehenderit voluptas. Incidunt et quae consequatur.</td>
                                    <td class="text-truncate">Minh Quang</td>
                                    <td>
                                        <button type="button" class="btn btn-success">{{__('View')}}</button>
                                        <button type="button" class="btn btn-danger">{{__('Delete')}}</button>
                                        <button type="button" class="btn btn-primary">{{__('Update')}}</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">4</td>
                                    <td class="text-truncate">Earum fuga molestiae officia.</td>
                                    <td class="text-truncate">Sunt velit sunt velit perspiciatis. Esse tempore reprehenderit voluptas. Incidunt et quae consequatur.</td>
                                    <td class="text-truncate">Sunt velit sunt velit perspiciatis. Esse tempore reprehenderit voluptas. Incidunt et quae consequatur.</td>
                                    <td class="text-truncate">Minh Quang</td>
                                    <td>
                                        <button type="button" class="btn btn-success">{{__('View')}}</button>
                                        <button type="button" class="btn btn-danger">{{__('Delete')}}</button>
                                        <button type="button" class="btn btn-primary">{{__('Update')}}</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">5</td>
                                    <td class="text-truncate">Earum fuga molestiae officia.</td>
                                    <td class="text-truncate">Sunt velit sunt velit perspiciatis. Esse tempore reprehenderit voluptas. Incidunt et quae consequatur.</td>
                                    <td class="text-truncate">Sunt velit sunt velit perspiciatis. Esse tempore reprehenderit voluptas. Incidunt et quae consequatur.</td>
                                    <td class="text-truncate">Minh Quang</td>
                                    <td>
                                        <button type="button" class="btn btn-success">{{__('View')}}</button>
                                        <button type="button" class="btn btn-danger">{{__('Delete')}}</button>
                                        <button type="button" class="btn btn-primary">{{__('Update')}}</button>
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
