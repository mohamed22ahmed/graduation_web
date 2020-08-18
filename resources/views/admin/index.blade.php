<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="{{ asset('admin/images/admin.png') }}">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrab.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/style.css') }}">
    <title>Admin Exam</title>
  </head>
  <body>
     <!-- navbar -->
     <nav class="navbar navbar-expand-md navbar-light">
      <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
          <div class="row">
            <!-- sidebar -->
            <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
             <div class="bottom-border pb-3">
                <img src="{{ asset('admin/images/admin.png') }}" width="50" class="rounded-circle mr-3">
                <div style="color:white">{{ session('admin_name') }}</div>
              </div>
              <ul class="navbar-nav flex-column mt-4">
                <li class="nav-item"><a href="/adminPage" class="nav-link text-white p-3 mb-2 {{ url()->current()==url('/adminPage')?'current':'' }}"><i class="fas fa-users text-light fa-lg mr-3"></i>Show Student</a></li>
                <li class="nav-item"><a href="/admin/delete_student" class="nav-link text-white p-3 mb-2 sidebar-link {{ url()->current()==url('/admin/delete_student')?'current':'' }}"><i class="fas fa-minus-circle text-light fa-lg mr-3"></i>Delete Student</a></li>
                <li class="nav-item"><a href="/admin/add_student" class="nav-link text-white p-3 mb-2 sidebar-link {{ url()->current()==url('/admin/add_student')?'current':'' }}"><i class="fas fa-plus-square text-light fa-lg mr-3"></i>Add Student</a></li>
                <li class="nav-item"><a href="/admin/student_degrees" class="nav-link text-white p-3 mb-2 sidebar-link {{ url()->current()==url('/admin/student_degrees')?'current':'' }}"><i class="fas fa-chart-bar text-light fa-lg mr-3"></i>Student Degree</a></li>

                <li class="nav-item"><a href="/admin/show_professors" class="nav-link text-white p-3 mb-2 sidebar-link {{ url()->current()==url('/admin/show_professors')?'current':'' }}"><i class="fas fa-user-friends text-light fa-lg mr-3"></i>Show Professor</a></li>

                <li class="nav-item"><a href="/admin/delete_professor" class="nav-link text-white p-3 mb-2 sidebar-link {{ url()->current()==url('/admin/delete_professor')?'current':'' }}"><i class="fas fa-trash text-light fa-lg mr-3"></i>Delete Professor</a></li>
                <li class="nav-item"><a href="/admin/add_professor" class="nav-link text-white p-3 mb-2 sidebar-link {{ url()->current()==url('/admin/add_professor')?'current':'' }}"><i class="fas fa-user-plus text-light fa-lg mr-3"></i>Add Professor</a></li>
              </ul>
            </div>
            <!-- end of sidebar -->

            <!-- top-nav -->
            <div class="col-lg-9 col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
              <div class="row align-items-center">
                <div class="col-md-4">
                  <h4 class="text-light text-uppercase mb-0">@yield('page_name')</h4>
                </div>
                <div class="col-md-5">
                </div>
                <div class="col-md-3">
                  <ul class="navbar-nav">
                    <li class="nav-item ml-md-auto"><a href="/admin/logout" class="nav-link"><i class="fas fa-sign-out-alt text-primary fa-lg"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- end of top-nav -->
          </div>
        </div>
      </div>
    </nav>

    @yield('content')

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    {{--  <script src="{{ asset('admin/js/script.js') }}"></script>  --}}
  </body>
</html>






