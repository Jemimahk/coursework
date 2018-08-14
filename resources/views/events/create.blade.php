@extends('layouts.app') {{--use the layouttemplate / view we defineds--}}

{{--include main section / content section--}}
@section('content')
  <h1> Create Event</h1>
    <a href="/events" class="btn btn-default">Go Back</a>
    {{--set action to store function in event controller --}}
  {!! Form::open(['action' => 'EventsController@store', 'method' => 'EVENT']) !!}
  <div class="form-group">
    {{--add label and textfield--}}
    {{form::label('category_id', 'Category Id')}}
    {{form::text('category_id', '', ['class' => 'form-control', 'placeholder' =>' Enter category id associated with your event'])}}
</div>

      <div class="form-group">
        {{--add label and textfield--}}
        {{form::label('name', 'Event name')}}
        {{form::text('name', '', ['class' => 'form-control', 'placeholder' =>' Enter event name'])}}
    </div>

    <div class="form-group">
      {{--add labels--}}
      {{form::label('description', 'Description')}}
      {{form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' =>'Event description'])}}
  </div>

  <div class="form-group">
    {{--add labels--}}
    {{form::label('venue', 'Venue')}}
    {{form::text('venue', '', ['class' => 'form-control', 'placeholder' =>'Event venue'])}}
</div>

<div class="form-group">
  {{--add labels--}}
  {{form::label('created_by', 'Created by')}}
  {{form::text('created_by', '', ['class' => 'form-control', 'placeholder' =>'Enter your name here'])}}
</div>
  {{--submit event form, when submitted it should make a post request to store--}}
  {{Form::submit('Submit form', ['class'=>'btn btn-primary'])}}


  {!! Form::close() !!}
@endsection
