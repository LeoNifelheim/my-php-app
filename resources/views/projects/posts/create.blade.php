@extends('layouts.app')
@php use App\Http\Controllers\PostsController;@endphp
@section('title', 'Create the post')

@section('content')
<section class="colored-section"  id="hobbies">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @php PostsController::getTitle(); @endphp
            </div>
        </div>
        <div class="row">
            <form action="{{ route('projects.posts.store') }}" method="POST">
                @csrf
                <div class="col-md-12">
                    @include('projects.posts.partials.form')
                </div>
                <div class="col-md-12"><input type="submit" value="Create" class="btn btn-primary"></div>
            </form>
        </div>
    </div>
</section>
@endsection
