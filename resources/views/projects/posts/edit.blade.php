@extends('layouts.app')

@section('title', 'Update the post')

@section('content')
    <section class="white-section" id="hobbies">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                        <h1  class="text-center">Edit Post</h1>
                </div>
            </div>
            @include('projects.posts.partials.showall')
            <div class="row">
                <form action="{{ route('projects.posts.update', ['post' => $post->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    @include('projects.posts.partials.form')
                    <div class="col-md-12"><input type="submit" value="Update" class="btn btn-primary btn-block"></div>
                </form>
            </div>
        </div>
    </section>
@endsection
