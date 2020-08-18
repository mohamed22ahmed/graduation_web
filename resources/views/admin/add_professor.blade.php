@extends('admin.index')
@section('page_name')
    Add Professors
@endsection
@section('content')
<section class="addstudent mt-5">
    <div class="container">
        <div class="row">
                <div class="col-md-12">
                    <div class="card p-4">
                      <div class="card-body pt-5">
                        <h3 class="text-center text-primary ">Please Fill Out This Form To Add Professor</h3>
                        <hr>
                        <form action="/admin/add_professor" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Professor Name" name="name" required>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Professor Email" name="email" required>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Professor Password" name="password" required>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <input type="text" class="form-control" placeholder="Professor Subject" name="subject" required>
                                    </div>
                                  </div>
                              </div>
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <input type="submit" value="Add Professor" class="btn btn-primary btn-block" id="submit">
                                  </div>
                                </div>
                              </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3"></div>
                  <div class="col-md-6 my-4 ">
                    <div class="card card-common">
                        <div class="card-body">
                          <div class="d-flex justify-content-between">
                            <i class="fas fa-users fa-3x text-primary"></i>
                            <div class="text-right text-primary">
                              <h5>Professors</h5>
                              <h3 id="num">{{ $professors_number }}</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-3"></div>
            </div>
        </div>
    </div>

</section>
@endsection
