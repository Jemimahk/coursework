@extends('layouts.app') {{--use the layouttemplate / view we defineds--}}

{{--include main section / content secstion--}}
@section('content')
   {{--Link that takes you to the /posts page--}}
  <a href="/posts" class="btn btn-default">Go Back</a>
  {{--Return post title--}}
  <h1>{{$post->title}}</h1>
  <div>
    {{--returns the post tbl body column data, this can be my description--}}
    {{$post->body}}
  </div>
  <hr>{{--inserts horizontal line--}}
  <small> Written on{{$post->created_at}}</small>

@endsection
