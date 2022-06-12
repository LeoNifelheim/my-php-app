@extends('layouts.app')
@php use App\Http\Controllers\HobbiesController;@endphp
@section('content')
<section class="white-section" id="hobbies">
    <div class="container-fluid">
        @php HobbiesController::getTitle(); @endphp
        <div class="row">
            <div class="col-md-6">
                @php HobbiesController::hobbiesLine('Martial Arts', 'Right after the first time I saw a film of the well known actor Jackie Chan when I was little, I initiated my martial arts carreer with Taekwondo for 7 years, Karate one more year and finally met aikido and stayed there.'); @endphp
            </div>
            <div class="col-md-6">
                @php HobbiesController::hobbiesLine('Drawing', 'Since I was a child I had great imagination and learned to express that imagination learning how to draw, evolving my skills at the same time a growend in experience.'); @endphp
            </div>
            <div class="col-md-12">
                @php HobbiesController::hobbiesLine('Videogames', 'As part of my childhood, videogames had formed and still form a big inspiration for me to keep on this world of programing.'); @endphp
            </div>
        </div>
    </div>
</section>
@endsection
