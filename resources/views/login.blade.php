
<html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
      <link rel="stylesheet" href="{{ asset('css/bootstrab.css') }}">
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <title>Online Exam</title>
    </head>

      <body id="home" data-spy="scroll" data-target="#main-nav">
        <nav class="navbar navbar-expand-md navbar-light fixed-top py-4" id="main-nav">
          <div class="container">
            <a href="#home" class="navbar-brand">
              <img src="img/logo.png" width="50" height="50" alt="">
              <h3 class="d-inline align-middle">Exams Login</h3>
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">

        </nav>
        <section id="contact" class="bg-light py-5">
            <div class="container">
              <div class="row">
                <div class="col-lg-9">
                  <h3>Login Now</h3>
                  <p class="lead"><bold>Hint!</bold> If you are a Professor login as a Professor</p>
                  <form method="post" action="/login">
                      @csrf
                    <div class="input-group input-group-lg mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-envelope"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Email" name="email">
                    </div>

                    <div class="input-group input-group-lg mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-unlock"></i>
                        </span>
                      </div>
                      <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <button type="submit" class=" btn btn-outline-primary  mr-3 pl-3 pr-3">Login</button>
                  </form>
                </div>

                <div class="col-lg-3 align-self-center">
                  <img src="img/mlogo.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
          </section>

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
      </body>
</html>
