@extends('professor.index')
@section('content')
    <!-- ADD POST MODAL -->
    <div>
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-danger  text-white">
            <h5 class="modal-title">Delete Exam</h5>
          </div>
          <div class="modal-body">
            <form method="post">@csrf
              <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" name="name">
              </div>
          <div class="modal-footer" style="margin-top:30px;">
            <button class="btn btn-danger" style="margin-bottom:5px"type="submit" data-dismiss="modal">Delete Exam</button>
          </div>
      </form>
    </div>
        </div>

      </div>
    </div>


@endsection
