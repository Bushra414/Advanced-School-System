<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Teacher's-Dashboard</title>
</head>
<body>
    <div class="sidebar" id="sidebar">
        <div class="toggle-btn" onclick="toggleSidebar()"><i class='bx bxs-left-arrow-circle'></i></div>
        <a href="#Dashboard" class="tab" onclick="openTab('tab1')"><i class='bx bxs-dashboard'  ></i><span class="tab-text">Dashboard</span></a>
        <a href="#Students_Info" class="tab" onclick="openTab('tab4')"><i class="bx bxs-group" ></i><span class="tab-text">Students Info</span></a>
        <a href="#Add_Subject" class="tab" onclick="openTab('tab2')"><i class="bx bxs-book" ></i><span class="tab-text">Add Subject</span></a>
        <a href="{{ route('teacher-logout') }}" class="tab" onclick="logoutAndClearData()"><i class='bx bx-log-out'></i><span class="tab-text">Logout</span></a>
        <form id="logout-form" action="{{ route('teacher-logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

    </div>
    <div class="content" id="content">
        <div id="tab1" class="tab-content">
            @include('messeges.error')

            @include('dashboards.dash-parts.student-grade')
        </div>
        <div id="tab4" class="tab-content hidden">
            @include('dashboards.dash-parts.student-info')
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
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('index.js') }}"></script>
</body>
</html>
