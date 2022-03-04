@extends('layouts.master')
@section('posts', 'active')
@section('title', 'QuickTask|Posts')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">{{ __('Edit Post') }}</h4>
                        </div>
                        <div class="content">
                            <form action="{{ route('posts.update', $post->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="title">{{ __('Title') }}</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ $post->title }}">
                                    <small class="text-danger">{{ $errors->first('title') ?? '' }}</small>
                                </div>
                                <div class="form-group">
                                    <label for="slug">{{ __('Title') }}</label>
                                    <input type="text" class="form-control" id="slug" disabled name="slug"
                                        value="{{ $post->slug }}">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="descrition">{{ __('Descrition') }}</label>
                                    <textarea class="form-control" id="descrition" name="description" rows="3"
                                        value="">{{ $post->description }}</textarea>
                                    <small class="text-danger">{{ $errors->first('descrition') ?? '' }}</small>
                                </div>
                                <div class="form-group">
                                    <label for="content">{{ __('Content') }}</label>
                                    <textarea class="form-control tinymce-editor" id="content" name="content" rows="5"
                                        value="">{!! $post->content !!}</textarea>
                                    <small class="text-danger">{{ $errors->first('content') ?? '' }}</small>
                                </div>
                                <button type="submit"
                                    class="btn btn-info btn-fill pull-right">{{ __('Update Post') }}</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
