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
                        <h2 class="title">{{ __('List Posts') }}</h2>
                        <p class="category">{{ __('All Posts of systems') }}</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <a href="{{route('posts.create')}}" class="btn btn-primary">{{ __('Create post') }}</a>
                        <table class="table table-hover table-striped">
                            <thead class="thead-dark">
                                <th>ID</th>
                                <th>{{ __('Title') }}</th>
                                <th>{{ __('Description') }}</th>
                                <th>{{ __('Content') }}</th>
                                <th>{{ __('Author') }}</th>
                                <th>{{ __('Action') }}</th>
                            </thead>
                            <tbody>
                                @foreach ($posts as $key => $post)
                                <tr>
                                    <td>{{ ($posts->currentpage()-1) * $posts->perpage() + $key + 1 }}</td>
                                    <td class="text-truncate">{{ $post->title }}</td>
                                    <td class="text-truncate">{{ $post->description }}</td>
                                    <td class="text-truncate">{{ $post->content }}</td>
                                    <td class="text-truncate">{{ $post->username }}</td>
                                    <td>
                                        <a href="{{ route('posts.show',$post->id) }}" class="btn btn-success">{{ __('View') }}</a>
                                        <a href="{{ route('posts.edit',$post->id) }}"class="btn btn-primary">{{ __('Update') }}</a>
                                        <form style="display: inline" id="deleteForm" action="{{ route('posts.destroy',$post->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Are you sure?')"
                                                    class="btn btn-danger" data-toggle="tooltip"
                                                    data-placement="top" title="Delete">
                                                {{ __('Delete') }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
