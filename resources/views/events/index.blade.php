  @extends('layouts.app') {{--use the layouttemplate / view we defineds--}}

  {{--include main section / content section--}}
  @section('content')

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Events</h1>
          {{--loop through returned array of events--}}
          @if(count($events) > 0)
            @foreach ($events as $event)
              <div class="well">{{--/events/{{$event->id}}  go to events page with the id, go to contoller to show something n the page--}}
                <h3><a href="/events/{{$event->id}}">{{$event->name}}</a></h3>
                <p class="text-muted">{{$event->category->name}}</p>
                <p class="font-weight-normal">{{ $event->description }}</p>
              <!--  <p class="font-weight-normal">{{$event->venue}}</p> -->
                <small> Written on {{$event->created_at}}</small>
              </div>
              <hr>
            @endforeach
            {{--add pagination to events table--}}
            {{$events->links()}}
          @else
            <p> No Events found</p>
          @endif
            {{--button which links to the create page--}}
           <a href="/events/create" class="btn btn-outline-secondary" role="button"> Create Event</a>
       </div>
     </div>
    </div>


  @endsection
