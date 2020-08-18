@extends('student.index')
@section('content')
    <section id="login" class="mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4> Exam Login </h4>
                        </div>

                        <div class="card-body">
                            <div class="col-md-12 alert-danger">
                                @if (session()->has('error'))
                                    {{ session('error') }}
                                @endif
                            </div>
                            <form method="POST" action="/doExam">
                                @csrf
                                <div class="form-group">
                                    <label for="category">Exams</label>
                                    <select class="form-control" name="exam" required>
                                        @foreach ($exams as $exam)
                                            <option value="{{ $exam->id }}">{{ $exam->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block">Access Exam</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
