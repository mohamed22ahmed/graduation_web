@extends('professorPage')
@section('content')
    <!-- ADD POST MODAL -->
    <div>
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-success  text-white">
            <h5 class="modal-title">Choose Exam</h5>
          </div>
          <div class="modal-body">
            <form method="post" >@csrf
                <div class="form-group">
                  <label for="category">Exams</label>
                  <select class="form-control" name="exam">
                      @foreach($data as $exam)
                          <option value="{{ $exam->id }}">{{ $exam->name }}</option>
                      @endforeach
                  </select>
                </div>
              <div class="modal-footer" style="margin-top:30px;">
                <button class="btn btn-success" style="margin-bottom:5px"type="submit" data-dismiss="modal">Show Degrees</button>
              </div>
          </form>
        </div>
        </div>
      </div>
    </div>
@endsection
