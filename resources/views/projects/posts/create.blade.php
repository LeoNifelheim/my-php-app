@extends('layouts.app')
@php use App\Http\Controllers\PostsController;@endphp
@section('title', 'Create the post')

@section('content')
<section class="colored-section"  id="hobbies">
    <div class="container-fluid">
        @include('projects.posts.partials.showall')
        <div class="row">
            <div class="col-md-12">
                    <h1  class="text-center">Create Post</h1>
            </div>
        </div>
        <div class="row">
            <form action="{{ route('projects.posts.store') }}" method="POST">
                @csrf
                @include('projects.posts.partials.form')
                <div class="col-md-12"><input type="submit" value="Create" class="btn btn-primary"></div>
            </form>
        </div>
    </div>
</section>
@endsection
