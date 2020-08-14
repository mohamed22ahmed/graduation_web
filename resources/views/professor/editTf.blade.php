@extends('professor.index')
@section('content')
    <!-- ADD POST MODAL -->


    <div>
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-warning text-white">
            <h5 class="modal-title">Add True & False</h5>
          </div>
          <div class="modal-body">
            <form method="post">@csrf
              <div class="form-group">
                <label for="title">Question</label>
                <input type="text" class="form-control" value="{{ $records->question }}"name="question">
              </div>
              <div class="form-group">
                <label for="title">Right choice</label><br>
                <span style="color:red">1 means True, 0 means False</span><br>
                <input type="text" class="form-control" name="correct"value="{{ $records->correct_answer }}">
              </div>
              <div class="modal-footer">
                <button class="btn btn-warning" type="submit" data-dismiss="modal">Save Changes</button>
              </div>
          </form>
        </div>
        </div>
      </div>
    </div>

@endsection
