@extends('professor.index')
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
                    @php $i=1; $x=0;$y=0;@endphp
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
                            @foreach($data as $record)
                                @foreach ($record->students as $item)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $item->name }}</td>

                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->pivot->degree}}</td>
                                        {{ $y++ }}{{ $item->pivot->degree>=50?$x++:'' }}
                                    </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-12 mr-auto">
                    <div class="card mt-5 bg-dark text-white" style="width: 20rem;">
                        <div class="card-body card-dark">
                            <h4 class="card-title">Total success</h4>
                            <h2 class="h1">{{ $x/$y*100 }}%</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
