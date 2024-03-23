<h2>Dashboard</h2>
<div class="input-group mb-3" style="width: 230px;">
    <input type="text" id="searchInput" onkeyup="searchStudentName()" class="form-control" placeholder="Search for student name..." title="Type in a name">
</div>
<table id="resultsTable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>SID</th>
            <th>Student Name</th>
            @foreach($subjects as $subject)
            <th>{{ $subject->subject_name }}</th>
            @endforeach
            <th>Add Marks</th>
            <th>Edit Marks</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->SID }}</td>
            <td>{{ $student->fullname }}</td>
            @foreach($subjects as $subject)
            <td>{{ (new App\Http\Controllers\resultController)->getmarks($student->SID, $subject->SubID) }}</td>
            @endforeach
            <td>
                <button data-toggle="modal" data-target="#insertModal{{ $student->SID }}" class="btn btn-success"><i class="bx bxs-plus-circle"></i></button>
                @include('operations.add', ['student' => $student, 'subjects' => $subjects])
            </td>
            <td>
                <button data-toggle="modal" data-target="#editModal{{ $student->SID }}" class="btn btn-primary"><i class="bx bxs-edit"></i></button>
                @include('operations.edit', ['student' => $student, 'subjects' => $subjects])
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
