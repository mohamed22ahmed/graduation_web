@extends('admin.index')
@section('page_name')
    Show Professors
@endsection

@section('content')
    <section class="showstudent">
        <div class="container-fluid">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="col ml-auto ml-5">
                    <div class="row align-items-center">
                        <div class=" col-12 mb-4 mb-xl-0">
                            <h3 class="text-muted text-center mb-3">Show Professors</h3>
                            @php
                                $i=1;
                            @endphp
                            <table class="table table-striped bg-light text-center">
                                <thead>
                                    <tr class="text-muted">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($professors as $professor)
                                        <tr>
                                            <th>{{ $i++ }}</th>
                                            <td>{{ $professor->name }}</td>
                                            <td>{{ $professor->email }}</td>
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
