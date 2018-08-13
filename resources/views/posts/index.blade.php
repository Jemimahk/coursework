  @extends('layouts.app') {{--use the layouttemplate / view we defineds--}}

  {{--include main section / content section--}}
  @section('content')
    <h1>Posts</h1>
    {{--loop through returned array of posts--}}
    @if(count($posts) > 0)
  @foreach ($posts as $post)
    <div class="Well">{{--/posts/{{$post->id}}  go to posts page with the id, go to contoller to show something n the page--}}
      <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3
      <small> Written on {{$post->created_at}}</small>
    </div>
  @endforeach
  {{--add pagination to posts table--}}
  {{$posts->links()}}


    @else
      <p> No Posts found</p>

    @endif

  @endsection
