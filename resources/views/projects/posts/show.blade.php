@extends('layouts.app')

@section('title', $post->title)

@section('content')

<section class="white-section" id="posts">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $post->title }}</h1>
            </div>
            <div class="col-md-12">
                <p>{{ $post->content }}</p>
            </div>
            <div class="col-md-12">
                <p>Added {{ $post->created_at->diffForHumans() }}</p>
            </div>
            @if( now()->diffInMinutes($post->created_at) < 5 )
                <div class="alert alert-info col-md-12">New!</div>
            @endif
            <div class="col-md-12">
                <a class="btn btn-dark" href="{{ route('projects.posts.index')}}"><i class="fa-solid fa-list"></i></a>
            </div>
        </div>
    </div>
</section>
@endsection
