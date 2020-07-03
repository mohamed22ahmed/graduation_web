@extends('professorPage')
@section('content')
    <!-- ADD POST MODAL -->


    <div>
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-success text-white">
            <h5 class="modal-title">Add MCQ</h5>
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
                <label for="title">Question</label>
                <input type="text" class="form-control" name="question">
              </div>
              <div class="form-group">
                <label for="title">First choice</label>
                <input type="text" class="form-control" name="c1">
              </div>
              <div class="form-group">
                <label for="title">Second choice </label>
                <input type="text" class="form-control" name="c2">
              </div>
              <div class="form-group">
                <label for="title">Third choice</label>
                <input type="text" class="form-control" name="c3">
              </div>
              <div class="form-group">
                <label for="title">Fourth choice</label>
                <input type="text" class="form-control" name="c4">
              </div>
              <div class="form-group">
                <label for="title">Right choice</label>
                <input type="text" class="form-control" name="correct">
              </div>
              <div class="modal-footer">
                <button class="btn btn-success" type="submit" data-dismiss="modal">Save Changes</button>
              </div>
          </form>
        </div>
        </div>
      </div>
    </div>

@endsection
