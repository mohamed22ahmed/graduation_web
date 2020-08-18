@extends('admin.index')
@section('page_name')
    Show Results
@endsection
@section('content')
    <section class="showstudent">
        <div class="container-fluid">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="col ml-auto">
                    <div class="row align-items-center">
                        <div class=" col-12 mb-4 mb-xl-0">
                            <h3 class="text-muted text-center mb-3 ">Show Degree Of Student</h3>
                            @php
                                $i=1;
                            @endphp
                            <table class="table table-dark table-hover text-center sdos">
                                <thead>
                                    <tr class="text-muted">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Degree</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $record)
                                        @foreach ($record->students as $item)
                                            <tr>
                                                <th>{{ $i++ }}</th>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $i%2==0?'C++':'Java' }}</td>
                                                <td>{{ $item->pivot->degree}}</td>
                                                <td><span class="badge badge-{{ $item->pivot->degree>=50?'success':'danger' }} w-75 py-2">{{ $item->pivot->degree>=50?'Success':'Failed' }}</span></td>
                                            </tr>
                                        @endforeach
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
