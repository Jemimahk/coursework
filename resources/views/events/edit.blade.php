{{--edit form--}}
@extends('layouts.app') {{--use the layouttemplate / view we defineds--}}

{{--include main section / content section--}}
@section('content')
  <h1> Edit Event</h1>
    <a href="/events" class="btn btn-default">Go Back</a>
    {{--set action to update function in event controller, event id --}}
  {!! Form::open(['action' => ['EventsController@update',$event->id], 'method' => 'EVENT']) !!}
  <div class="form-group">
    {{--add label and textfield--}}
    {{form::label('category_id', 'Category Id')}}
    {{form::text('category_id', $event->category_id, ['class' => 'form-control', 'placeholder' =>' Enter category id associated with your event'])}}
</div>

      <div class="form-group">
        {{--add label and textfield--}}
        {{form::label('name', 'Event name')}}
        {{form::text('name', $event->name, ['class' => 'form-control', 'placeholder' =>' Enter event name'])}}
    </div>

    <div class="form-group">
      {{--add labels--}}
      {{form::label('description', 'Description')}}
      {{form::textarea('description', $event->description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' =>'Event description'])}}
  </div>

  <div class="form-group">
    {{--add labels--}}
    {{form::label('venue', 'Venue')}}
    {{form::text('venue', $event->venue, ['class' => 'form-control', 'placeholder' =>'Event venue'])}}
</div>

<div class="form-group">
  {{--add labels--}}
  {{form::label('created_by', 'Created by')}}
  {{form::text('created_by', 1, ['class' => 'form-control', 'placeholder' =>'Enter your name here'])}}
</div>
  {{Form::hidden('_method','PUT')}}
  {{--submit event form, when submitted it should make a post request to store--}}
  {{Form::submit('Submit form', ['class'=>'btn btn-primary'])}}


  {!! Form::close() !!}
@endsection
