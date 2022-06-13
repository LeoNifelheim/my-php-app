@extends('layouts.app')
@php use App\Http\Controllers\ProjectsController;@endphp
@section('content')
<section class="white-section" id="hobbies">
    <div class="container-fluid">
        @php ProjectsController::getTitle(); @endphp
        <div class="row">
            <div class="col-md-4">
               <a class="btn btn-danger" href="{{route('projects.posts.index')}}">Posts</a>
            </div>
            <div class="col-md-4">
                <a class="btn btn-danger">Themes</a>
            </div>
            <div class="col-md-4">
                <a class="btn btn-danger">Others</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
               <p>CRUD in a Posts/Forum environment</p>
            </div>
            <div class="col-md-4">
                <p>WIP</p>
            </div>
            <div class="col-md-4">
                <p>WIP</p>
            </div>
        </div>
    </div>
</section>
@endsection
