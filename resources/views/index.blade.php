<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/bootstrab.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <title>Online Exam</title>
</head>

  <body id="home" data-spy="scroll" data-target="#main-nav">
    <nav class="navbar navbar-expand-md navbar-light fixed-top py-4" id="main-nav">
      <div class="container">
        <a href="#home" class="navbar-brand">
          <img src="img/logo.png" width="50" height="50" alt="">
          <h3 class="d-inline align-middle">Exams</h3>
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#home" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="#authors" class="nav-link">Meet The Authors</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/login') }}" class="nav-link">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
     <!-- SHOWCASE -->
     <section id= 'showcase'class='py-5'>
      <div class="primary-overlay text-white">
        <div class="container">
          <div class="row">
          <div class="col text-center">
            <h1 class="display-2 mt-5 pt-5">
              Doing Your Exams Of...
            </h1>
            <p class="lead">Chemistry, mathematics, physics, drawing, programming, history, geography, architecture, science.</p>
            <a href="#about" class="btn btn-outline-secondary btn-lg text-white">
              <i class="fas fa-arrow-right"></i> Read More
            </a>
          </div>
        </div>
      </div>
    </div>
     </section>
     <!-- BOXES -->
  <section id="boxes" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="card text-center border-primary mb-resp">
            <div class="card-body">
              <h3 class="text-primary">Be Better</h3>
              <p class="text-muted">
                Easy to make a exam and easy to doing it with student .
                </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-primary text-white mb-resp">
            <div class="card-body">
              <h3>Be Smarter</h3>
              <p>To using technology correctness in all sides of life .</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center border-primary mb-resp">
            <div class="card-body">
              <h3 class="text-primary">Be Faster</h3>
              <p class="text-muted">Easy of using and faster to make operation .</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-primary text-white">
            <div class="card-body">
              <h3>Be Stronger</h3>
              <p>Security of exams and reliability of exams doing it .</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about -->
  <section id= "about" class="py-5 text-center bg-light">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="header-info mb-5">
            <h1 class="text-primary pb-3">Why This Exams?</h1>
            <p class="lead pb-3">To be better when using it and most smarter by using technology in exams and faster to make exams and doing it  and stronger by security and reliability functions in app</p>
          </div>
          <div id="accordion">
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <div href="#collapse1" data-toggle="collapse" data-parent="#accordion">
                    <i class="fas fa-arrow-circle-down"></i> Get Inspired
                  </div>
                </h5>
              </div>

              <div id="collapse1" class="collapse show">
                <div class="card-body">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit odit laborum qui, debitis, sequi dolores nobis mollitia
                  labore quasi earum laboriosam nihil cupiditate magnam iusto nostrum doloremque accusantium repudiandae
                  expedita autem et, repellendus suscipit consequatur! Alias, maiores amet sunt ab inventore illo, deleniti
                  facilis consequatur tenetur nam pariatur fuga nisi!
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <div href="#collapse2" data-toggle="collapse" data-parent="#accordion">
                    <i class="fas fa-arrow-circle-down"></i> Gain The Knowledge
                  </div>
                </h5>
              </div>

              <div id="collapse2" class="collapse">
                <div class="card-body">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit odit laborum qui, debitis, sequi dolores nobis mollitia
                  labore quasi earum laboriosam nihil cupiditate magnam iusto nostrum doloremque accusantium repudiandae
                  expedita autem et, repellendus suscipit consequatur! Alias, maiores amet sunt ab inventore illo, deleniti
                  facilis consequatur tenetur nam pariatur fuga nisi!
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <div href="#collapse3" data-toggle="collapse" data-parent="#accordion">
                    <i class="fas fa-arrow-circle-down"></i> Open Your Mind
                  </div>
                </h5>
              </div>

              <div id="collapse3" class="collapse">
                <div class="card-body">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit odit laborum qui, debitis, sequi dolores nobis mollitia
                  labore quasi earum laboriosam nihil cupiditate magnam iusto nostrum doloremque accusantium repudiandae
                  expedita autem et, repellendus suscipit consequatur! Alias, maiores amet sunt ab inventore illo, deleniti
                  facilis consequatur tenetur nam pariatur fuga nisi!
                </div>
              </div>
        </div>
      </div>
    </div>
      </div>
    </div>
  </section>

  <!-- AUTHORS -->
  <section id="authors" class="my-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="info-header mb-5">
            <h1 class="text-primary pb-3">
              Meet The Authors
            </h1>
            <p class="lead">
              This app is making for the team of faculty of computer and information assuit university
            </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="img/person5.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h3>Taysir Hassan</h3>
              <h5 class="text-muted">Supervisor</h5>
              <p>Dean, Faculty of Computers and Information, Assiut University
                Vice Dean for Graduate Studies and Research Affairs, College of Computers and Information.</p>
              <div class="d-flex justify-content-center">
                <div class="p-4">
                  <a href="http://facebook.com">
                    <i class="fab fa-facebook"></i>
                  </a>
                </div>
                <div class="p-4">
                  <a href="http://twitter.com">
                    <i class="fab fa-twitter"></i>
                  </a>
                </div>
                <div class="p-4">
                  <a href="http://instagram.com">
                    <i class="fab fa-instagram"></i>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="img/person2.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h3>Mohamed Hammam</h3>
              <h5 class="text-muted">Team leader</h5>
              <p>student of Fci backend developer with +2 years of experience.</p>
              <div class="d-flex justify-content-center">
                <div class="p-4">
                  <a href="http://facebook.com">
                    <i class="fab fa-facebook"></i>
                  </a>
                </div>
                <div class="p-4">
                  <a href="http://twitter.com">
                    <i class="fab fa-twitter"></i>
                  </a>
                </div>
                <div class="p-4">
                  <a href="http://instagram.com">
                    <i class="fab fa-instagram"></i>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="img/person6.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h3>Omar Mohamad</h3>
              <h5 class="text-muted">Member</h5>
              <p>student of Fci frontend and ui/ux developer with +1 years of experience.</p>
              <div class="d-flex justify-content-center">
                <div class="p-4">
                  <a href="http://facebook.com">
                    <i class="fab fa-facebook"></i>
                  </a>
                </div>
                <div class="p-4">
                  <a href="http://twitter.com">
                    <i class="fab fa-twitter"></i>
                  </a>
                </div>
                <div class="p-4">
                  <a href="http://instagram.com">
                    <i class="fab fa-instagram"></i>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="img/person1.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h3>Nada Ahmed</h3>
              <h5 class="text-muted">Member</h5>
              <p>student of Fci frontend developer with +1 years of experience</p>
              <div class="d-flex justify-content-center">
                <div class="p-4">
                  <a href="http://facebook.com">
                    <i class="fab fa-facebook"></i>
                  </a>
                </div>
                <div class="p-4">
                  <a href="http://twitter.com">
                    <i class="fab fa-twitter"></i>
                  </a>
                </div>
                <div class="p-4">
                  <a href="http://instagram.com">
                    <i class="fab fa-instagram"></i>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="img/person3.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h3>Youssef Mohamed</h3>
              <h5 class="text-muted">Member</h5>
              <p>student of Fci Android developer with +2 years of experience</p>
              <div class="d-flex justify-content-center">
                <div class="p-4">
                  <a href="http://facebook.com">
                    <i class="fab fa-facebook"></i>
                  </a>
                </div>
                <div class="p-4">
                  <a href="http://twitter.com">
                    <i class="fab fa-twitter"></i>
                  </a>
                </div>
                <div class="p-4">
                  <a href="http://instagram.com">
                    <i class="fab fa-instagram"></i>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- login -->

  <!-- FOOTER -->
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
    <script>
      // Get the current year for the copyright
      $('#year').text(new Date().getFullYear());

      // Init Scrollspy
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
