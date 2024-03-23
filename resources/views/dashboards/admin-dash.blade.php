<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Admin Dashboard</title>
</head>
<body>
    <div class="sidebar" id="sidebar">
        <div class="toggle-btn" onclick="toggleSidebar()"><i class='bx bxs-left-arrow-circle'></i></div>
        <a href="#Dashboard" class="tab" onclick="openTab('tab1')"><i class='bx bxs-dashboard'  ></i><span class="tab-text">Dashboard</span></a>
        <a href="#Students_Info" class="tab" onclick="openTab('tab4')"><i class="fas fa-bars" ></i><span class="tab-text">Students Info</span></a>
        <a href="#Add_Subject" class="tab" onclick="openTab('tab2')"><i class="bx bxs-book" ></i><span class="tab-text">Add Subject</span></a>
        <a href="#Add_Class" class="tab" onclick="openTab('tab3')"><i class="bx bx-plus" ></i><span class="tab-text">Add Class</span></a>

    </div>
    <div class="content" id="content">
        <div id="tab1" class="tab-content">
            <h2>Dashboard</h2>
            <table>
                <tr>
                    <th>SID</th>
                    <th>Student Name</th>
                    <th>Add</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->SID }}</td>
                    <td>{{ $student->fullname }}</td>
                    <td><a href="#">Add</a></td>
                    <td><a href="#">Update</a></td>
                    <td><a href="#">Delete</a></td>
                </tr>
                @endforeach
            </table>
        </div>
        <div id="tab4" class="tab-content hidden">
            <h2>Student's Info</h2>
            <p>This is the content of Tab 4.</p>
        </div>
        <div id="tab2" class="tab-content hidden">
            <h2>Add Subject</h2>
            @include('messeges.success')
            @include('messeges.error')
            <form action="{{route('teacher-add-subject')}}" method="POST" class="form">
                @csrf
                <div class="form-group">
                    <label for="subject_name">Subject Name</label>
                    <input type="text" class="form-control" id="subject_name" name="subject_name" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Subject</button>
            </form>
        </div>
        
        <div id="tab3" class="tab-content hidden">
            <h2>Add Class</h2>
            @include('messeges.success')
            @include('messeges.error')
            <form action="{{route('teacher-add-class')}}" method="POST" class="form">
                @csrf
                <div class="form-group">
                    <label for="class_name">Class Name</label>
                    <input type="text" class="form-control" id="class_name" name="class_name" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Class</button>
            </form>
        </div>
    </div>
    <script src="index.js"></script>
</body>
</html>
