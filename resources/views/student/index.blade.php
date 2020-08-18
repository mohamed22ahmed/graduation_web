<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/bootstrab.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="icon" type="image/png" href="{{ asset('mlogo.png') }}"/>
        <title>Student</title>
    </head>

    <body id="home" data-spy="scroll" data-target="#main-nav">
        <nav class="navbar navbar-expand-md navbar-light fixed-top py-4" id="main-nav">
            <div class="container">
                <a href="#home" class="navbar-brand">
                    <img src="{{ asset('img/logo.png') }}" width="50" height="50" alt="">
                    <h3 class="d-inline align-middle">Exams</h3>
                </a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="/doExam" class="nav-link">DO Exam</a>
                        </li>
                        <li class="nav-item">
                            <a href="/studentDegree" class="nav-link">Show degree</a>
                        </li>
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"crossorigin="anonymous"></script>
    </body>
</html>
