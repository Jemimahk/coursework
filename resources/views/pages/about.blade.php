    {{--use the app template from the layouts folder to stop code duplication ---}}
    @extends('layouts.app')

      @section('content')
      <h1> About</h1>
      <p> This is a the about page, reusing the index page code </p>

      @endsection
