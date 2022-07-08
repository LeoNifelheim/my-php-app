@extends('layouts.app')
@php
    use App\Http\Controllers\ProjectsController;
@endphp
@section('content')
<section class="white-section" id="hobbies">
    <div class="container-fluid calculator">
        @php ProjectsController::getTitle("Stats Calculator"); @endphp
        <br>
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-4">
                        <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Joint Strike Raid" id="jsrBtn">J</button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Weekly Boss Raid" id="wbrBtn">W</button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="In-game Raids" id="raidsBtn">R</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-2">
                        <button class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Beast" id="beastBtn">B</button>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Devil" id="devilBtn">D</button>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Mutant" id="mutantBtn">M</button>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Plant" id="plantBtn">P</button>
                    </div>
                    <div class="col-md-2">
                        <buttton class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Insect" id="insectBtn">I</button>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Neutral" id="neutralBtn">N</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <h3><span id="type">Select Type of Raid</span> | <span id="race">Select Race<span></h3>
            </div>
            <div class="col-md-4">
            </div>
        </div>
        <br>
        <div class="row">
            @include('projects.calculator.partials.stats', ['id' => 'critUser', 'name'=>"Your Crit.", 'value'=> "8470", 'active'=>"true"])
            @include('projects.calculator.partials.stats', ['id' => 'cResUser', 'name'=>"Your Crit Def.", 'value'=> "1072", 'active'=>"true"])
            @include('projects.calculator.partials.stats', ['id' => 'blockUser', 'name'=>"Your Block", 'value'=> "1345", 'active'=>"true"])
            @include('projects.calculator.partials.stats', ['id' => 'bPenUser', 'name'=>"Your Block Pen.", 'value'=> "3000", 'active'=>"true"])
            @include('projects.calculator.partials.stats', ['id' => 'evaUser', 'name'=>"Your Evasion", 'value'=> "5000", 'active'=>"true"])
            @include('projects.calculator.partials.stats', ['id' => 'accuUser', 'name'=>"Your Accuracy", 'value'=> "6220", 'active'=>"true"])
        </div>
        <br>
        <div class="row">
            @include('projects.calculator.partials.stats', ['id' => 'cResBoss', 'name'=>"Boss Crit. Def.", 'value'=> "8470"])
            @include('projects.calculator.partials.stats', ['id' => 'critBoss', 'name'=>"Boss Crit.", 'value'=> "1072"])
            @include('projects.calculator.partials.stats', ['id' => 'bPenBoss', 'name'=>"Boss Block Pen.", 'value'=> "1345"])
            @include('projects.calculator.partials.stats', ['id' => 'blockBoss', 'name'=>"Boss Block", 'value'=> "3000"])
            @include('projects.calculator.partials.stats', ['id' => 'accuBoss', 'name'=>"Boss Accuracy", 'value'=> "5000"])
            @include('projects.calculator.partials.stats', ['id' => 'evaBoss', 'name'=>"Boss Evasion", 'value'=> "6220"])
        </div>
        <br>
        <div class="row">
            @include('projects.calculator.partials.stats', ['id' => 'critRateUser', 'name'=>"Your Crit. Rate", 'value'=> "70.27", 'result'=>'true', 'crit'=>'true'])
            @include('projects.calculator.partials.stats', ['id' => 'critRateBoss', 'name'=>"Boss Crit. Rate", 'value'=> "96.49", 'result'=>'true', 'boss'=>'true'])
            @include('projects.calculator.partials.stats', ['id' => 'blockRateUser', 'name'=>"Your Block Rate", 'value'=> "0.00", 'result'=>'true'])
            @include('projects.calculator.partials.stats', ['id' => 'blockRateBoss', 'name'=>"Boss Block Rate", 'value'=> "0.00", 'result'=>'true', 'boss'=>'true'])
            @include('projects.calculator.partials.stats', ['id' => 'dogdeRateUser', 'name'=>"Your Dodge Rate", 'value'=> "43.65", 'result'=>'true', 'boss'=>'true'])
            @include('projects.calculator.partials.stats', ['id' => 'dodgeRateBoss', 'name'=>"Boss Dodge Rate", 'value'=> "0.00", 'result'=>'true'])
        </div>
    </div>
</section>
@endsection
