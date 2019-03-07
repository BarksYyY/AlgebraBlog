@extends('auth.master')

@section('content')
    <div class="col-md-12 mt-4">
        <a href="{{ route('users.index') }}" class="btn btn-danger" role="button">Back</a>
        <hr>
        <h2>User name: {{ $user->name }}</h2>
        <br>
        <section>User email:
            {{ $user->email }}
        </section>
    </div>
@endsection
