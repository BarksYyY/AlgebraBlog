@extends('layouts.master')

@section('content')

<div class="col-sm-8 blog-main">

    @if(session()->has('flash_message'))
        <div class="alert alert-success alert-dismissible">
            {{ session()->get('flash_message') }}
        </div>
    @endif

    <div class="blog-post">
        <a href="{{ route('posts.show', $post->id) }}">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
        </a>
        <p class="blog-post-meta"> {{ $post->created_at->toFormattedDateString() }} by <a href="#">{{ $post->user->name }}</a></p>

        <section>
            {{ $post->body }}
        </section>
        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <a href="{{ route('posts.edit', $post->id)}}" class="btn btn-primary btn-sm" role="button" style="margin-top: 20px">Edit</a>
            <button class="btn btn-danger btn-sm" style="margin-top: 20px">Delete</button>
            <a href="{{ route('posts') }}" class="btn btn-info btn-sm" role="button" style="margin-top: 20px">Back</a>
        </form>

    </div>
</div>
@endsection
