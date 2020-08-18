@extends('professor.index')
@section('content')
    <!-- ADD POST MODAL -->


    <div>
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-success text-white">
            <h5 class="modal-title">Set Timer For Exam</h5>
          </div>
          <div class="modal-body">
            <form method="post">@csrf
              <div class="form-group">
                <label for="category">Exams</label>
                <select class="form-control" name="exam">
                    @foreach($data as $exam)
                        <option value="{{ $exam->id }}">{{ $exam->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="title">Set Password</label>
                <input type="text" class="form-control" placeholder="Password for this Exam.. " name="password">
              </div>
              <div class="modal-footer">
                <button class="btn btn-success" type="submit" data-dismiss="modal">Set Password</button>
              </div>
          </form>
        </div>
        </div>
      </div>
    </div>

@endsection
