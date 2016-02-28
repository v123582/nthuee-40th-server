@extends('layouts.app')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Basic / Edit </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">


            <form action="{{ route('basics.update', $basic->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('headerTitle')) has-error @endif">
                  <label for="headerTitle-field">headerTitle</label>
                  <input type="text" id="headerTitle-field" name="headerTitle" class="form-control" value="{{ $basic->headerTitle }}"/>
                  @if($errors->has("headerTitle"))
                    <span class="help-block">{{ $errors->first("headerTitle") }}</span>
                  @endif
                </div>
                <div class="form-group @if($errors->has('headerDescription')) has-error @endif">
                  <label for="headerDescription-field">headerDescription</label>
                  <input type="text" id="headerDescription-field" name="headerDescription" class="form-control" value="{{ $basic->headerDescription }}"/>
                  @if($errors->has("headerDescription"))
                    <span class="help-block">{{ $errors->first("headerDescription") }}</span>
                  @endif
                </div>
                <div class="form-group @if($errors->has('headerContent')) has-error @endif">
                   <label for="headerContent-field">headerContent</label>
                <textarea class="form-control" id="headerContent-field" rows="3" name="headerContent">{{ $basic->headerContent }}</textarea>
                   @if($errors->has("headerContent"))
                    <span class="help-block">{{ $errors->first("headerContent") }}</span>
                   @endif
                </div>
                <div class="form-group @if($errors->has('state1Title')) has-error @endif">
                  <label for="state1Title-field">state1Title</label>
                  <input type="text" id="state1Title" name="state1Title" class="form-control" value="{{ $basic->state1Title }}"/>
                  @if($errors->has("state1Title"))
                    <span class="help-block">{{ $errors->first("state1Title") }}</span>
                  @endif
                </div>
                <div class="form-group @if($errors->has('state1Description')) has-error @endif">
                  <label for="state1Description-field">state1Description</label>
                  <input type="text" id="state1Description" name="state1Description" class="form-control" value="{{ $basic->state1Description }}"/>
                  @if($errors->has("state1Description"))
                    <span class="help-block">{{ $errors->first("state1Description") }}</span>
                  @endif
                </div>
                <div class="form-group @if($errors->has('state1Content')) has-error @endif">
                   <label for="state1Content-field">state1Content</label>
                <textarea class="form-control" id="state1Content" rows="3" name="state1Content">{{ $basic->state1Content }}</textarea>
                   @if($errors->has("state1Content"))
                    <span class="help-block">{{ $errors->first("state1Content") }}</span>
                   @endif
                </div>
                <div class="form-group @if($errors->has('state2Title')) has-error @endif">
                  <label for="state2Title-field">state2Title</label>
                  <input type="text" id="state2Title" name="state2Title" class="form-control" value="{{ $basic->state2Title }}"/>
                  @if($errors->has("state2Title"))
                    <span class="help-block">{{ $errors->first("state2Title") }}</span>
                  @endif
                </div>
                <div class="form-group @if($errors->has('state2Description')) has-error @endif">
                  <label for="state2Description-field">state2Description</label>
                  <input type="text" id="state2Description" name="state2Description" class="form-control" value="{{ $basic->state2Description }}"/>
                  @if($errors->has("state2Description"))
                    <span class="help-block">{{ $errors->first("state2Description") }}</span>
                  @endif
                </div>
                <div class="form-group @if($errors->has('state2Content')) has-error @endif">
                   <label for="state2Content">state2Content</label>
                <textarea class="form-control" id="state2Content-field" rows="3" name="state2Content">{{ $basic->state2Content }}</textarea>
                   @if($errors->has("state2Content"))
                    <span class="help-block">{{ $errors->first("state2Content") }}</span>
                   @endif
                </div>
                <div class="form-group @if($errors->has('state3Title')) has-error @endif">
                  <label for="state3Title-field">state3Title</label>
                  <input type="text" id="state3Title" name="state3Title" class="form-control" value="{{ $basic->state3Title }}"/>
                  @if($errors->has("state3Title"))
                    <span class="help-block">{{ $errors->first("state3Title") }}</span>
                  @endif
                </div>
                <div class="form-group @if($errors->has('state3Description')) has-error @endif">
                  <label for="state3Description-field">state3Description</label>
                  <input type="text" id="state3Description" name="state3Description" class="form-control" value="{{ $basic->state3Description }}"/>
                  @if($errors->has("state3Description"))
                    <span class="help-block">{{ $errors->first("state3Description") }}</span>
                  @endif
                </div>
                <div class="form-group @if($errors->has('state3Content')) has-error @endif">
                   <label for="state3Content">state3Content</label>
                <textarea class="form-control" id="state3Content-field" rows="3" name="state3Content">{{ $basic->state3Content }}</textarea>
                   @if($errors->has("state3Content"))
                    <span class="help-block">{{ $errors->first("state3Content") }}</span>
                   @endif
                </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="/"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            </form>



        </div>
    </div>

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
@endsection