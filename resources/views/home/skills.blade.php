@extends('layouts.app')
@php use App\Http\Controllers\SkillsController;@endphp
@section('content')
<section class="colored-section" id="skills">
    <div class="container-fluid">
        @php SkillsController::getTitle(); @endphp
        <div class="row">
            <div class="col-md-6">
                <h3 class="skill-name">Front-End</h3>
                <div class="row">
                    @php
                    SkillsController::skillLine('HTML', 4, 1);
                    SkillsController::skillLine('CSS', 3, 1);
                    SkillsController::skillLine('Bootstrap', 3, 1);
                    SkillsController::skillLine('JavaScript', 2, 1);
                    SkillsController::skillLine('JQuery', 2, 0);
                    SkillsController::skillLine('PHP', 5, 0);
                    @endphp
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="skill-name">Back-End</h3>
                <div class="row">
                     @php
                    SkillsController::skillLine('NodeJS', 2, 1);
                    SkillsController::skillLine('Java', 3, 0);
                    SkillsController::skillLine('MySQL', 4, 0);
                    SkillsController::skillLine('Python', 2, 1);
                    SkillsController::skillLine('SAP ABAP', 1, 0);
                    SkillsController::skillLine('C', 3, 1);
                    @endphp
                </div>
            </div>
        </div>
        <div class="row">
            @php SkillsController::getSentence('What you can see, is only a part of what I could make!'); @endphp
        </div>
    </div>
</section>
@endsection
