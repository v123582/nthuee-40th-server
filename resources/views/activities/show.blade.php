@extends('layouts.app')

@section('header')
<div class="page-header">
        <h1>Activities / Show #{{$activity->id}}</h1>
        <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('activities.edit', $activity->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static"></p>
                </div>

                <div class="form-group">
                     <label for="topic">TOPIC</label>
                     <p class="form-control-static">{{$activity->topic}}</p>
                </div>

                <div class="form-group">
                     <label for="title">TITLE</label>
                     <p class="form-control-static">{{$activity->title}}</p>
                </div>
                <div class="form-group">
                     <label for="time">TIME</label>
                     <p class="form-control-static">{{$activity->time}}</p>
                </div>
                <div class="form-group">
                     <label for="location">LOCATION</label>
                     <p class="form-control-static">{{$activity->location}}</p>
                </div>
                    <div class="form-group">
                     <label for="introduction">INTRODUCTION</label>
                     <p class="form-control-static">{{$activity->introduction}}</p>
                </div>
                    <div class="form-group">
                     <label for="content">CONTENT</label>
                     <p class="form-control-static">{{$activity->content}}</p>
                </div>
                    <div class="form-group">
                     <label for="others">OTHERS</label>
                     <p class="form-control-static">{{$activity->others}}</p>
                </div>
                    <div class="form-group">
                     <label for="url">URL</label>
                     <p class="form-control-static">{{$activity->url}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('activities.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection