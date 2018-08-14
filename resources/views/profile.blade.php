@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Your Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p class="font-weight-light">Welcome to your Aston organiser user profile </p>
                    <a href="/events/create" class="btn btn-outline-secondary">  Create Event</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
