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
                            <h4 class="title">{{ __('Create post') }}</h4>
                        </div>
                        <div class="content">
                            <div class="form-group">
                                <label for="title">{{ __('Title') }}</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $post->title }}">
                            </div>
                            <div class="form-group">
                                <label for="title">{{ __('Title') }}</label>
                                <input type="text" class="form-control" id="title" name="slug"
                                    value="{{ $post->slug }}">
                            </div>
                            <div class="form-group">
                                <label for="descrition">{{ __('Descrition') }}</label>
                                <textarea class="form-control" id="descrition" name="description" rows="3"
                                    value="">{{ $post->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="content">{{ __('Content') }}</label>
                                <textarea class="form-control tinymce-editor" id="content" name="content" rows="5"
                                    value="">{!! $post->content !!}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
