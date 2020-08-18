@extends('student.index')
@section('content')
    <section id="show" class="py-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="d-inline">{{ $exam->name }}</h3>
                            <div class="timer float-right">
                            <span>{{ $exam->duration }} : 00</span>
                            <i class="fas fa-clock"></i>
                            </div>
                        </div>

                        @php $i=1; @endphp

                        <div class="card-body">
                            <form method="POST" action="/studentExam">
                                @csrf
                                @foreach ($mcq_questions as $mcq)
                                    <label><h4>{{ $i++ }} . {{ $mcq->question }}</h4></label><br>
                                    <input type="radio" name="{{ $mcq->question }}" value="{{ $mcq->first_choice }}"> &nbsp;{{ $mcq->first_choice }}<br>
                                    <input type="radio" name="{{ $mcq->question }}" value="{{ $mcq->second_choice }}"> &nbsp;{{ $mcq->second_choice }}<br>
                                    <input type="radio" name="{{ $mcq->question }}" value="{{ $mcq->third_choice }}"> &nbsp;{{ $mcq->third_choice }}<br>
                                    <input type="radio" name="{{ $mcq->question }}" value="{{ $mcq->forth_choice }}"> &nbsp;{{ $mcq->forth_choice }}<br>
                                @endforeach

                                @foreach ($tf_questions as $tf)
                                    <label><h4>{{ $i++ }} . {{ $tf->question }}</h4></label><br>
                                    <input type="radio" name="{{ $tf->question }}" value="true"> &nbsp;True<br>
                                    <input type="radio" name="{{ $tf->question }}" value="false"> &nbsp;False<br>
                                @endforeach
                                <button type="submit" class="btn btn-primary float-right">Submit Answer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
