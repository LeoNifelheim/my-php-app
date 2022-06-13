@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <section class="white-section" id="posts">
        <div class="container-fluid">
            @include('projects.posts.partials.showall')
            <div class="row">
                <div class="col-md-12">
                    <h1  class="text-center">{{ $post->title }}</h1>
                </div>
                <div class="col-md-12">
                    <p class="text-center">{{ $post->content }}</p>
                </div>
                <div class="col-md-12">
                    <p class="text-center">Added {{ $post->created_at->diffForHumans() }}</p>
                </div>
                @if( now()->diffInMinutes($post->created_at) < 5 )
                    <p class="alert alert-info col-md-12 text-center">New!</p>
                @endif
            </div>
        </div>
    </section>
@endsection
