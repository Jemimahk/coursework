{{--Check errors array and session success and error--}}
@if(count($errors) > 0)
@foreach ($errors ->all() as $error)
<div class="alert alert-danger">
  {{$error}}
</div>
@endforeach
@endif

{{--check for session sucess--}}
@if(session('success'))
  <div class="alert alert-success">
    {{session('success')}}
  </div>

@endif

{{--check for session error--}}
@if(session('error'))
  <div class="alert alert-danger">
    {{session('error')}}
  </div>

@endif
