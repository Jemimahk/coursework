{{--use the app template from the layouts folder to stop code duplication ---}}
@extends('layouts.app')

@section('content')
  <div class="jumbotron text-center">
    <h1 class="display-4 text-center">Aston Events</h1>
  {{-- <hr class="my-4"> horizontal line--}}
  <!--Card image-->
   <div class="view overlay my-4">
       <img src="/images/pexels-photo-262524.jpeg" class="img-fluid" alt="">
       <a href="#">
           <div class="mask rgba-white-slight"></div>
       </a>
   </div>
      <p class="lead text-center">This is the official Aston Events website! Powered by Student union
         <br> Here you can browse events, register and show interest to an event of your choice.

      </p>
  </div>
@endsection
