@extends('layouts.app')
@php use App\Http\Controllers\PostsController;@endphp
@section('title', 'Blog Posts')

@section('content')
<section class="white-section" id="hobbies">
    <div class="container-fluid">
        @php PostsController::getTitle(); @endphp
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-dark" href="{{route('projects.posts.create')}}" ><i class="fa-solid fa-circle-plus"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @forelse ($posts as $key => $post)
                    @include('projects.posts.partials.post', [])
                @empty
                   <p class="text-danger">No posts found!</p>
                @endforelse
            </div>
        </div>
    </div>
</section>
@endsection
