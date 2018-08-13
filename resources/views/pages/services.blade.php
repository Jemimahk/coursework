{{-- use app template from layouts folder to stop code duplication--}}

@extends('layouts.app')

@section('content')
<h1>{{$title}}</h1>
{{--check for the services and loop through services array and output in a list--}}
@if(count($services) > 0)
  <ul class ="list-gorup">
        @foreach($services as $service)
          <li class="list-group-item">{{$service}}</li>
        @endforeach
    </ul>
   @endif
@endsection
