@extends('admin.index')
@section('page_name')
    Delete Student
@endsection

@section('content')
<section class="showstudent">
    <div class="container-fluid">
      <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
        <div class="col ml-auto">
          <div class="row align-items-center">
            <div class=" col-12 mb-4 mb-xl-0">
              <h3 class="text-muted text-center mb-3">Delete Student</h3>

                @php
                $i=1;
                @endphp
                <table class="table table-striped bg-light text-center">
                    <thead>
                        <tr class="text-muted">
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <th>{{ $i++ }}</th>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td class="remove"><a href="/admin/delete_one_student/{{ $student->id }}"class="btn btn-danger text-light"><i class="fas fa-trash"></i> &nbsp;Remove</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
