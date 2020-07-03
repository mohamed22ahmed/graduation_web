@extends('professorPage')
@section('content')
    <!-- ADD POST MODAL -->
    <div>
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title">Add Exam</h5>
          </div>
          <div class="modal-body">
            <form method="post">@csrf
              <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" name="name">
              </div>

          <div class="modal-footer" style="margin-top:40px;">
            <button class="btn btn-primary" style="margin-bottom:5px"type="submit" data-dismiss="modal">Save Exam</button>
          </div>
      </form>
    </div>
        </div>

      </div>
    </div>
@endsection
