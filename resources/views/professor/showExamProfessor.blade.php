@extends('professor.index')
@section('content')
    @php
        $i=1;
    @endphp
    @if($McqData||$TfData)
        <section id="show" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <form>
                            <div class="card-header">
                                <h3>Exam </h3>
                            </div>
                            <div class="card-body">
                                @if($McqData)
                                    @foreach($McqData as $ques)
                                        <label class="d-inline">
                                            <i class="fas fa-circle d-inline text-danger"></i>
                                            <h4 class="d-inline">{{ $i++ }}. {{ $ques->question }}</h4>
                                        </label>
                                        <a class="float-right text-primary d-inline" href='{{ url("/mcq/edit/{$ques->id}") }}'><i class="fas fa-edit "></i> </a>
                                        <a class="float-right mr-3 text-secondary d-inline" href='{{ url("/mcq/delete/{$ques->id}") }}'><i class="fas fa-trash"></i></a>
                                        <a href="" class="float-right mr-3 text-info d-inline"><i class="fas fa-chart-pie"></i></a>
                                        <br>
                                        <input type="radio" name="q1" disabled>{{ $ques->first_choice }}<br>
                                        <input type="radio" name="q2" disabled>{{ $ques->second_choice }}<br>
                                        <input type="radio" name="q3" disabled>{{ $ques->third_choice }}<br>
                                        <input type="radio" name="q4" disabled>{{ $ques->forth_choice }}<br clear="both">
                                    @endforeach
                                @endif
                                @if($TfData)
                                    @foreach($TfData as $ques)
                                        <label class="d-inline">
                                            <i class="fas fa-circle d-inline text-danger"></i>
                                            <h4 class="d-inline">{{ $i++ }}. {{ $ques->question }}</h4>
                                        </label>
                                        <a class="float-right text-primary d-inline" href='{{ url("/tf/edit/{$ques->id}") }}'><i class="fas fa-edit "></i> </a>
                                        <a class="float-right mr-3 text-secondary d-inline" href='{{ url("/tf/delete/{$ques->id}") }}'><i class="fas fa-trash"></i></a>
                                        <a href="" class="float-right mr-3 text-info d-inline"><i class="fas fa-chart-pie"></i></a>
                                        <br>
                                        <input type="radio" name="true" disabled>true<br>
                                        <input type="radio" name="false" disabled>false<br clear="both">
                                    @endforeach
                                @endif
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
