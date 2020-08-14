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
                <label for="title">Right choice</label>
                <input type="text" class="form-control" name="correct" placeholder="Enter 1 for True or 0 for False">
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
