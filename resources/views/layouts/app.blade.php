<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&family=Tajawal:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css?v=').time()}}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/672e514016.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styles.css">
    <title>Eric Personal Website</title>
</head>

<body>
    <section class="colored-section" id="heading">
        <div class="container-fluid heading-section">
            <!-- Nav Bar -->
            <nav class="navbar navbar-expand-md navbar-dark">
                <a class="navbar-brand" href="{{route('home.index')}}">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home.skills')}}">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home.hobbies')}}">Hobbies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('projects.index')}}">Projects</a>
                        </li>
                        @guest
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('logout')}}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a>
                            </li>
                            <form id="logout-form" action="{{route('logout')}}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        @endguest
                    </ul>
                </div>
            </nav>
        </div>
    </section>
    @yield('content')
    <section class="white-section " id="contact">
        <div class="container-fluid contact-section">
            <h3 class="contact-title">Contact Me!</h3>
            <p class="contact-text">Dont be affraid and go know me!</p>
            <button class="btn btn-lg btn-outline-dark" type="button"><i class="fas fa-envelope contact-icon"></i></button>
        </div>
    </section>

    <footer class="colored-section" id="footer">
        <div class="container-fluid footer-section">
            <a href="https://www.linkedin.com/in/eric-millan-rodriguez-a1125171/"><i class="fab fa-linkedin-in social-icon"></i></a>
            <a href="#"><i class="fab fa-facebook-f social-icon"></i></a>
            <a href="#"><i class="fab fa-instagram social-icon"></i></a>
            <a href="https://github.com/LeoNifelheim"><i class="fab fa-github social-icon"></i></a>
            <p class="copyright">© Copyright 2020 Éric Millán Rodríguez</p>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
        const neutralBtn = $('#neutralBtn');
        const beastBtn = $('#beastBtn');
        const devilBtn = $('#devilBtn');
        const mutantBtn = $('#mutantBtn');
        const plantBtn = $('#plantBtn');
        const insectBtn = $('#insectBtn');
        const jsrBtn = $('#jsrBtn');
        const wbrBtn = $('#wbrBtn');
        const raidsBtn = $('#raidsBtn');

        const race = document.getElementById("race");
        const type = document.getElementById("type");
        (function($){
            $.statsRequest = function(type) {
                if(jsrBtn.hasClass('btn-primary')){
                    data = {
                        "_token": $("meta[name='csrf-token']").attr("content"),
                        raid:'jsr',
                        type:type
                    };
                }else if(wbrBtn.hasClass('btn-primary')){
                    data = {
                        "_token": $("meta[name='csrf-token']").attr("content"),
                        raid:'wbr',
                        type:type
                    };
                }else if(raidsBtn.hasClass('btn-primary')){
                    data = {
                        "_token": $("meta[name='csrf-token']").attr("content"),
                        raid:'normal',
                        type:type
                    };
                }
                $.post('/projects/calculator/show', data, function(response) {
                    data = JSON.parse(response);
                    $('#critBoss').val(data.crit);
                    $('#cResBoss').val(data.cRes);
                    $('#blockBoss').val(data.block);
                    $('#bPenBoss').val(data.bPen);
                    $('#accuBoss').val(data.accu);
                    $('#evaBoss').val(data.eva);
                });
            };
        }(jQuery));
        $(document).ready(function(){
            neutralBtn.click(function(){
                neutralBtn.removeClass("btn-secondary").addClass("btn-primary");
                /**/
                plantBtn.removeClass("btn-primary").addClass("btn-secondary");
                mutantBtn.removeClass("btn-primary").addClass("btn-secondary");
                devilBtn.removeClass("btn-primary").addClass("btn-secondary");
                insectBtn.removeClass("btn-primary").addClass("btn-secondary");
                beastBtn.removeClass("btn-primary").addClass("btn-secondary");
                /**/
                race.textContent = 'Neutral';
            });
            beastBtn.click(function(){
                beastBtn.removeClass("btn-secondary").addClass("btn-primary");
                $.statsRequest('beast');
                neutralBtn.removeClass("btn-primary").addClass("btn-secondary");
                plantBtn.removeClass("btn-primary").addClass("btn-secondary");
                mutantBtn.removeClass("btn-primary").addClass("btn-secondary");
                devilBtn.removeClass("btn-primary").addClass("btn-secondary");
                insectBtn.removeClass("btn-primary").addClass("btn-secondary");
                race.textContent = 'Beast';
            });
            devilBtn.click(function(){
                devilBtn.removeClass("btn-secondary").addClass("btn-primary");
                $.statsRequest('devil');
                /**/
                neutralBtn.removeClass("btn-primary").addClass("btn-secondary");
                plantBtn.removeClass("btn-primary").addClass("btn-secondary");
                mutantBtn.removeClass("btn-primary").addClass("btn-secondary");
                insectBtn.removeClass("btn-primary").addClass("btn-secondary");
                beastBtn.removeClass("btn-primary").addClass("btn-secondary");
                /**/
                race.textContent = 'Devil';
            });
            mutantBtn.click(function(){
                mutantBtn.removeClass("btn-secondary").addClass("btn-primary");
                $.statsRequest('mutant');
                /**/
                neutralBtn.removeClass("btn-primary").addClass("btn-secondary");
                plantBtn.removeClass("btn-primary").addClass("btn-secondary");
                insectBtn.removeClass("btn-primary").addClass("btn-secondary");
                devilBtn.removeClass("btn-primary").addClass("btn-secondary");
                beastBtn.removeClass("btn-primary").addClass("btn-secondary");
                /**/
                race.textContent = 'Mutant';
            });
            plantBtn.click(function(){
                plantBtn.removeClass("btn-secondary").addClass("btn-primary");
                $.statsRequest('plant');
                /**/
                neutralBtn.removeClass("btn-primary").addClass("btn-secondary");
                insectBtn.removeClass("btn-primary").addClass("btn-secondary");
                mutantBtn.removeClass("btn-primary").addClass("btn-secondary");
                devilBtn.removeClass("btn-primary").addClass("btn-secondary");
                beastBtn.removeClass("btn-primary").addClass("btn-secondary");
                /**/
                race.textContent = 'Plant';
            });
            insectBtn.click(function(){
                insectBtn.removeClass("btn-secondary").addClass("btn-primary");
                $.statsRequest('insect');
                /**/
                neutralBtn.removeClass("btn-primary").addClass("btn-secondary");
                plantBtn.removeClass("btn-primary").addClass("btn-secondary");
                mutantBtn.removeClass("btn-primary").addClass("btn-secondary");
                devilBtn.removeClass("btn-primary").addClass("btn-secondary");
                beastBtn.removeClass("btn-primary").addClass("btn-secondary");
                /**/
                race.textContent = 'Insect';
            });
            jsrBtn.click(function(){
                jsrBtn.removeClass("btn-dark").addClass("btn-primary");
                /**/
                wbrBtn.removeClass("btn-primary").addClass("btn-dark");
                raidsBtn.removeClass("btn-primary").addClass("btn-dark");
                /**/
                type.textContent = 'Joint Strike';
            });
            wbrBtn.click(function(){
                wbrBtn.removeClass("btn-dark").addClass("btn-primary");
                /**/
                jsrBtn.removeClass("btn-primary").addClass("btn-dark");
                raidsBtn.removeClass("btn-primary").addClass("btn-dark");
                /**/
                type.textContent = 'Weekly Boss';
            });
            raidsBtn.click(function(){
                raidsBtn.removeClass("btn-dark").addClass("btn-primary");
                /**/
                jsrBtn.removeClass("btn-primary").addClass("btn-dark");
                wbrBtn.removeClass("btn-primary").addClass("btn-dark");
                /**/
                type.textContent = 'Normal Raids';
            });
        });

    </script>
</body>

</html>
