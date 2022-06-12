@extends('layouts.app')

@section('title', 'Update the post')

@section('content')
<section class="white-section" id="hobbies">
    <div class="container-fluid">
        <form action="{{ route('projects.posts.update', ['post' => $post->id]) }}" method="POST">
            @csrf
            @method('PUT')
            @include('projects.posts.partials.form')
            <div><input type="submit" value="Update" class="btn btn-primary btn-block"></div>
        </form>
    </div>
</section>
@endsection
