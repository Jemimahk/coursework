{{--use the app template from the layouts folder to stop code duplication ---}}
@extends('layouts.app')

@section('content')
  <div class="jumbotron text-center">
    <h1 class="display-4 text-center">Aston Events</h1>
    <p class="lead text-center">This is the official Aston Events wepsite, prowered by Student union</p>
  {{-- <hr class="my-4"> horizontal line--}}

  <!--Card image-->
   <div class="view overlay my-4">
       <img src="/images/pexels-photo-262524.jpeg" class="img-fluid" alt="">
       <a href="#">
           <div class="mask rgba-white-slight"></div>
       </a>
   </div>
    <p>Examples of the services we offer. Maybe sliding images ya'know</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
    </p>
  </div>
@endsection
