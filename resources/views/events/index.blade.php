  @extends('layouts.app') {{--use the layouttemplate / view we defineds--}}

  {{--include main section / content section--}}
  @section('content')
    <h1>Events</h1>
    {{--loop through returned array of posts--}}
    @if(count($events) > 0)
  @foreach ($events as $event)
    <div class="well">{{--/posts/{{$post->id}}  go to posts page with the id, go to contoller to show something n the page--}}
      <h3><a href="/events/{{$event->id}}">{{$event->name}}</a></h3>
      <p>{{ $event->description }}</p>
      <small> Written on {{$event->created_at}}</small>
    </div>
  @endforeach
  {{--add pagination to posts table--}}
  {{$events->links()}}
    @else
      <p> No Events found</p>
    @endif
  @endsection
