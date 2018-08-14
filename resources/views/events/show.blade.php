@extends('layouts.app') {{--use the layouttemplate / view we defineds--}}

{{--include main section / content secstion--}}
@section('content')
   {{--Link that takes you to the /posts page--}}
  <a href="/events" class="btn btn-default">Go Back</a>
  {{--Return post title and parse html!--}}
  <h1 align="center">{{$event->name}}</h1>
  <p class="text-muted">{{ $event->category->name }}</p>
  <div>
    {{--returns the post tbl body column data, this can be my description--}}
    {!!$event->description!!}
  </div>
  <hr>{{--inserts horizontal line--}}
  <small> Written on {{$event->created_at}}</small>
  <hr>

  <a href="/events/{{$event->id}}/edit" class="btn btn-outline-secondary">Edit event</a>

    {{--once form is opend run the destroy method for the given post
    inside the form there will be hidden spoofing method and submit
    --}}

  <div class="pull-right" style="float: right; width: 300px;">
    {!!Form::open(['action' => ['EventsController@destroy', $event->id], 'method'=> 'POST', 'class' => 'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class'=> 'btn btn-outline-danger'])}}
    {!!Form::close() !!}
  </div>
@endsection
