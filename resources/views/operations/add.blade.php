<div class="modal fade" id="insertModal{{$student->SID}}" tabindex="-1" role="dialog" aria-labelledby="insertModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="insertModalLabel">Add Marks</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('add-marks') }}" class="mt-4">
                    @csrf
                    <div class="form-group">
                        <label for="SID">Student:</label>
                        <input type="text" class="form-control" value="{{ $student->fullname }}" readonly>
                        <input type="hidden" name="SID" value="{{ $student->SID }}">
                    </div>
                    <div class="form-group">
                        <label for="SubID">Subject:</label>
                        <select name="SubID" id="SubID" class="form-control" required>
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->SubID }}">{{ $subject->subject_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="marks">Marks:</label>
                        <input type="number" name="marks" id="marks" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3" name="insert_marks_button">Insert Marks</button>
                </form>
            </div>
        </div>
    </div>
</div>
