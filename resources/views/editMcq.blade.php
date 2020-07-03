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
                <label for="title">Question</label>
                <input type="text" class="form-control" value="{{ $records->question }}" name="question">
              </div>
              <div class="form-group">
                <label for="title">First choice</label>
                <input type="text" class="form-control" name="c1" value="{{ $records->first_choice }}">
              </div>
              <div class="form-group">
                <label for="title">Second choice </label>
                <input type="text" class="form-control" name="c2" value="{{ $records->second_choice }}">
              </div>
              <div class="form-group">
                <label for="title">Third choice</label>
                <input type="text" class="form-control" name="c3" value="{{ $records->third_choice }}">
              </div>
              <div class="form-group">
                <label for="title">Fourth choice</label>
                <input type="text" class="form-control" name="c4" value="{{ $records->forth_choice }}">
              </div>
              <div class="form-group">
                <label for="title">Right choice</label>
                <input type="text" class="form-control" name="correct" value="{{ $records->correct_answer }}">
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
