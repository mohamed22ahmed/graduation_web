<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/bootstrab.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <title>pro 9</title>
</head>

  <body id="home" data-spy="scroll" data-target="#main-nav">
    <nav class="navbar navbar-expand-md navbar-light fixed-top py-4" id="main-nav">
      <div class="container">
        <a href="#home" class="navbar-brand">
          <img src="{{asset('img/logo.png')}}" width="50" height="50" alt="">
          <h3 class="d-inline align-middle">Exams</h3>
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Make exam</a>
                <div class="dropdown-menu">
                    <a href="{{ url('/addExam') }}" class="dropdown-item">Add Exam</a>
                    <a href="{{ url('/addMcq') }}" class="dropdown-item">Add MCQ</a>
                    <a href="{{ url('/addTf') }}" class="dropdown-item">Add True & False</a>
                    <a href="{{ url('/deleteExam') }}" class="dropdown-item">Delete Exam</a>
                    <a href="{{ url('/deleteMcq') }}" class="dropdown-item">Delete MCQ</a>
                    <a href="{{ url('/deleteTf') }}" class="dropdown-item">Delete True & False</a>
                </div>
            </li>

            <li class="nav-item">
              <a href="{{ url('/chooseExam') }}" class="nav-link">Show Exam</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/setTimer') }}" class="nav-link">Timer</a>
              </li>
            <li class="nav-item">
              <a href="{{ url('/examResult') }}" class="nav-link">Results</a>
            </li>
            <li class="nav-item">
                <a href="#contact" class="nav-link">Draw graph</a>
              </li>
          </ul>
        </div>
      </div>
  </nav>

    <!-- make exams -->
        <section id="exam" class="py-4 bg-light ">
            <div class="primary-overlay" >
            <div class="container">
                  @yield('content')
            </div>
        </div>
          </section>


          <footer id="main-footer" class="py-5 bg-primary text-white">
            <div class="container">
              <div class="row text-center">

                  <p class="lead text-center mr-auto">
                    Copyright 2020
                  </p>

              </div>
            </div>
          </footer>
          <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
          crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
          crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
          crossorigin="anonymous"></script>
          <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
          <script src="{{asset('js/app.js')}}"></script>
          <script>
          CKEDITOR.replace('editor1');
          CKEDITOR.replace('editor2');
          CKEDITOR.replace('editor3');
          $('body').scrollspy({ target: '#main-nav' });

          // Smooth Scrolling
          $("#main-nav a").on('click', function (event) {
            if (this.hash !== "") {
              event.preventDefault();

              const hash = this.hash;

              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 800, function () {

                window.location.hash = hash;
              });
            }
          });
          </script>
          </body>
          </html>
