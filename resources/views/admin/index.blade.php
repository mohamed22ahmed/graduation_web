<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="images/admin.png">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrab.css">
    <link rel="stylesheet" href="style.css">
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
              <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">Hello Admin: Max</a>
              <div class="bottom-border pb-3">
                <img src="images/admin.png" width="50" class="rounded-circle mr-3">
                <a href="#" class="text-white">Admin Exam</a>
              </div>
              <ul class="navbar-nav flex-column mt-4">
                <li class="nav-item"><a href="index.html" class="nav-link text-white p-3 mb-2 current"><i class="fas fa-users text-light fa-lg mr-3"></i>Show Student</a></li>
                <li class="nav-item"><a href="deletestudent.html" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-minus-circle text-light fa-lg mr-3"></i>Delete Student</a></li>
                <li class="nav-item"><a href="addstudent.html" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-plus-square text-light fa-lg mr-3"></i>Add Student</a></li>
                <li class="nav-item"><a href="sdos.html" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-chart-bar text-light fa-lg mr-3"></i>Show Dgree Of Student</a></li>

                <li class="nav-item"><a href="showprofessor.html" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-user-friends text-light fa-lg mr-3"></i>Show Professor</a></li>

                <li class="nav-item"><a href="deleteprofessor.html" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-trash text-light fa-lg mr-3"></i>Delete Professor</a></li>
                <li class="nav-item"><a href="appprofessor.html" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-user-plus text-light fa-lg mr-3"></i>Add Professor</a></li>
              </ul>
            </div>
            <!-- end of sidebar -->

            <!-- top-nav -->
            <div class="col-lg-9 col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
              <div class="row align-items-center">
                <div class="col-md-4">
                  <h4 class="text-light text-uppercase mb-0">show student</h4>
                </div>
                <div class="col-md-5">
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control search-input" placeholder="Search...">
                      <button type="button" class="btn btn-white search-button"><i class="fas fa-search text-primary"></i></button>
                    </div>
                  </form>
                </div>
                <div class="col-md-3">
                  <ul class="navbar-nav">

                    <li class="nav-item ml-md-auto"><a href="#" class="nav-link" data-toggle="modal" data-target="#sign-out"><i class="fas fa-sign-out-alt text-primary fa-lg"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- end of top-nav -->
          </div>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->
    <div class="modal fade" id="sign-out">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Want to leave?</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            Press logout to leave
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Stay Here</button>
            <a href="../index.html"class="btn btn-danger"  >Logout</a>
          </div>
        </div>
      </div>
    </div>


    <section class="showstudent">
      <div class="container-fluid">
        <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
          <div class="col ml-auto ml-5">
            <div class="row align-items-center">
              <div class=" col-12 mb-4 mb-xl-0">
                <h3 class="text-muted text-center mb-3">Show Student</h3>
                <table class="table table-striped bg-light text-center">
                  <thead>
                    <tr class="text-muted">
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Level</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>1</th>
                      <td>John doe</td>
                      <td>jhon@gamil.com</td>
                      <td>3</td>

                    </tr>
                    <tr>
                      <th>2</th>
                      <td>Ann smith</td>
                      <td>smith @yahoo.com</td>
                      <td>5</td>

                    </tr>
                    <tr>
                      <th>3</th>
                      <td>Mark che</td>
                      <td>che@facebook.com</td>
                      <td>4</td>

                    </tr>
                    <tr>
                      <th>4</th>
                      <td>Mary clod</td>
                      <td>maryclod@gamil.com</td>
                      <td>2</td>

                    </tr>
                    <tr>
                      <th>5</th>
                      <td>Bob brad</td>
                      <td>bob @ gmail.com</td>
                      <td>1</td>

                    </tr>
                    <tr>
                      <th>6</th>
                      <td>Bob brad</td>
                      <td>bob @ gmail.com</td>
                      <td>1</td>

                    </tr>
                    <tr>
                      <th>7</th>
                      <td>Mary clod</td>
                      <td>maryclod@gamil.com</td>
                      <td>2</td>

                    </tr>
                    <tr>
                      <th>8</th>
                      <td>Mary clod</td>
                      <td>maryclod@gamil.com</td>
                      <td>2</td>

                    </tr>
                    <tr>
                      <th>9</th>
                      <td>Mary clod</td>
                      <td>maryclod@gamil.com</td>
                      <td>2</td>

                    </tr>
                    <tr>
                      <th>10</th>
                      <td>Mary clod</td>
                      <td>maryclod@gamil.com</td>
                      <td>2</td>

                    </tr>
                  </tbody>
                </table>

                <!-- pagination -->
                <nav>
                  <ul class="pagination justify-content-center pag ">
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        <span>&laquo;</span>
                      </a>
                    </li>
                    <li class="page-item active">
                      <a href="#" class="page-link py-2 px-3">
                        1
                      </a>
                    </li>
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        2
                      </a>
                    </li>
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        3
                      </a>
                    </li>
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        <span>&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>






