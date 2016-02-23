@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Activities / Edit #{{$activity->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('activities.update', $activity->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('title')) has-error @endif">
                       <label for="title-field">Title</label>
                    <input type="text" id="title-field" name="title" class="form-control" value="{{ $activity->title }}"/>
                       @if($errors->has("title"))
                        <span class="help-block">{{ $errors->first("title") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('introduction')) has-error @endif">
                       <label for="introduction-field">Introduction</label>
                    <textarea class="form-control" id="introduction-field" rows="3" name="introduction">{{ $activity->introduction }}</textarea>
                       @if($errors->has("introduction"))
                        <span class="help-block">{{ $errors->first("introduction") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('content')) has-error @endif">
                       <label for="content-field">Content</label>
                    <textarea class="form-control" id="content-field" rows="3" name="content">{{ $activity->content }}</textarea>
                       @if($errors->has("content"))
                        <span class="help-block">{{ $errors->first("content") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('others')) has-error @endif">
                       <label for="others-field">Others</label>
                    <textarea class="form-control" id="others-field" rows="3" name="others">{{ $activity->others }}</textarea>
                       @if($errors->has("others"))
                        <span class="help-block">{{ $errors->first("others") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('url')) has-error @endif">
                       <label for="url-field">Url</label>
                    <input type="text" id="url-field" name="url" class="form-control" value="{{ $activity->url }}"/>
                       @if($errors->has("url"))
                        <span class="help-block">{{ $errors->first("url") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('activities.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection