@extends('layouts.app') {{--use the layouttemplate / view we defineds--}}

{{--include main section / content section--}}
@section('content')
  <h1> Create Event</h1>
  {!! Form::open(['action' => 'EventsController@store', 'method' => 'EVENT']) !!}
      <div class="form-group">
        {{--add label and textfield--}}
        {{form::label('event', 'Event')}}
        {{form::text('event', '', ['class' => 'form-control', 'placeholder' =>'Event name'])}}
    </div>

    <div class="form-group">
      {{--add labels--}}
      {{form::label('description', 'Description')}}
      {{form::textarea('description', '', ['class' => 'form-control', 'placeholder' =>'Event description'])}}
  </div>
  {{--submit event form, when submitted it should make a post request to store--}}
  {{Form::submit('Submit form', ['class'=>'btn btn-primary'])}}


  {!! Form::close() !!}
@endsection
