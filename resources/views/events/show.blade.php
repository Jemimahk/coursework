@extends('layouts.app') {{--use the layouttemplate / view we defineds--}}

{{--include main section / content secstion--}}
@section('content')
   {{--Link that takes you to the /posts page--}}
  <a href="/events" class="btn btn-default">Go Back</a>
  {{--Return post title--}}
  <h1>{{$event->name}}!</h1>
  <p class="text-muted">{{ $event->category->name }}</p>
  <div>
    {{--returns the post tbl body column data, this can be my description--}}
    {{$event->description}}
  </div>
  <hr>{{--inserts horizontal line--}}
  <small> Written on {{$event->created_at}}</small>

@endsection
