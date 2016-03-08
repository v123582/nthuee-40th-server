@extends('layouts.app')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Activities / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('activities.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">


                <div class="form-group @if($errors->has('topic')) has-error @endif">
                  <label for="topic-field">topic</label>
                  <input type="text" id="topic-field" name="topic" class="form-control" value="{{ old("topic") }}"/>
                  @if($errors->has("topic"))
                    <span class="help-block">{{ $errors->first("topic") }}</span>
                  @endif
                </div>

                <div class="form-group @if($errors->has('title')) has-error @endif">
                  <label for="title-field">Title</label>
                  <input type="text" id="title-field" name="title" class="form-control" value="{{ old("title") }}"/>
                  @if($errors->has("title"))
                    <span class="help-block">{{ $errors->first("title") }}</span>
                  @endif
                </div>



                <div class="form-group @if($errors->has('time')) has-error @endif">
                  <label for="time-field">time</label>
                  <input type="text" id="time-field" name="time" class="form-control" value="{{ old("time") }}"/>
                  @if($errors->has("time"))
                    <span class="help-block">{{ $errors->first("time") }}</span>
                  @endif
                </div>


                <div class="form-group @if($errors->has('location')) has-error @endif">
                  <label for="location-field">location</label>
                  <input type="text" id="location-field" name="location" class="form-control" value="{{ old("location") }}"/>
                  @if($errors->has("location"))
                    <span class="help-block">{{ $errors->first("location") }}</span>
                  @endif
                </div>
                    <div class="form-group @if($errors->has('introduction')) has-error @endif">
                       <label for="introduction-field">Introduction</label>
                    <textarea class="form-control" id="introduction-field" rows="3" name="introduction">{{ old("introduction") }}</textarea>
                       @if($errors->has("introduction"))
                        <span class="help-block">{{ $errors->first("introduction") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('content')) has-error @endif">
                       <label for="content-field">Content</label>
                    <textarea class="form-control" id="content-field" rows="3" name="content">{{ old("content") }}</textarea>
                       @if($errors->has("content"))
                        <span class="help-block">{{ $errors->first("content") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('others')) has-error @endif">
                       <label for="others-field">Others</label>
                    <textarea class="form-control" id="others-field" rows="3" name="others">{{ old("others") }}</textarea>
                       @if($errors->has("others"))
                        <span class="help-block">{{ $errors->first("others") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('url')) has-error @endif">
                       <label for="url-field">Url</label>
                    <input type="text" id="url-field" name="url" class="form-control" value="{{ old("url") }}"/>
                       @if($errors->has("url"))
                        <span class="help-block">{{ $errors->first("url") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('activities.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
@endsection