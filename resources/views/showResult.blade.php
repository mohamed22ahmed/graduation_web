@extends('professorPage')
@section('content')
    {{-- <ul>
        @foreach($data as $student)
            <li style="color:white">{{ $student->exams['name'] }}</li>
        @endforeach
    </ul> --}}
    <section id="result" class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-dark mt-5">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th> Name</th>
                                <th>Email</th>
                                <th>Dgree</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>John Doe</td>
                                <td>jdoe@gmail.com</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Will Johnson</td>
                                <td>will@yahoo.com</td>
                                <td>70</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Shannon Williams</td>
                                <td>shannon@yahoo.com</td>
                                <td>90</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 mr-auto">
                    <div class="card mt-5 bg-dark text-white" style="width: 20rem;">
                        <div class="card-body card-dark">
                            <h4 class="card-title">Total success</h4>

                            <h2 class="h1">60%</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
