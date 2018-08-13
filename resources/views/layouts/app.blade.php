<!doctype html>
<html lang="{{ app()->getLocale() }}">
{{--Layout file for all pages--}}
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{--to load something from asset folder use double curly brackets, this gives you the css file--}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

         {{--  @yield('pageTitle') followed by the name of the app --}}
        <title>@yield('pageTitle') Aston Events</title>
    </head>
    <body>
      {{--include navigation bar file--}}
      @include('inc.navBar')
      <div class="container">
      @yield('content')
      </div>
    </body>
</html>
