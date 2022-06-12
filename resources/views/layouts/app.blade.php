<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&family=Tajawal:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>
