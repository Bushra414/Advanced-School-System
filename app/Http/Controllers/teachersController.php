<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\classes;
use App\Models\student;
use App\Models\subjects;
use App\Models\teachers;
use Illuminate\Support\Facades\Session;


class teachersController extends Controller
{
    public function create(Request $request)
    {
       
        $request->validate([
            'full_name' => 'required',
            'date_of_birth' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'class' => 'required'
        ]);


        $teacher = teachers::create([
            'full_name' => $request->input('full_name', ''),
            'date_of_birth' => $request->input('date_of_birth',''),
            'phone_number' => $request->input('phone_number',''),
            'email' => $request->input('email',''),
            'class' => $request->input('class','')
        ]);

        if($teacher) {
            return redirect()->route('teacher-sign-up')->with('success', 'Teacher created successfully');
        } else {
            return redirect()->route('teacher-sign-up')->with('error', 'Failed to create teacher');
        }
    }



public function signIn(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'phone_number' => 'required'
    ]);

    $teacher = teachers::where('email', $request->input('email'))
        ->where('phone_number', $request->input('phone_number'))
        ->first();

    if($teacher) {
        // Storing teacher ID in session
        Session::put('teacher_id', $teacher->TID);
        
        // Assuming you have a route named 'teacher-dashboard' that points to the dashboard view
        return redirect()->route('teacher-dashboard');
    } else {
        // Redirecting back to sign-in page with an error message
        return redirect()->route('teacher-sign-in')->with('error', 'Failed to sign in teacher');
    }
}


    public function showDashboard()
    {
        $teacherId = session('teacher_id');
      
        $teacher = teachers::where('TID', $teacherId)->first();
        $teacherClass =  $teacher->class;
        $class = classes::where('class_name', $teacherClass)->first();
        
        $classId = $class->CID;
        
        $students = student::where('class', $teacherClass)->get();
        $subjects = subjects::where('CID', $classId)->get();

        return view('dashboards.teacher-dash', ['students' => $students, 'subjects' => $subjects]);
    }

    public function addSubject(Request $request)
    {
        $request->validate([
            'subject_name' => 'required',
        ]);
       
        $teacher = teachers::find(session('teacher_id'));
        $teacherClass =  $teacher->class;
        $class = classes::where('class_name', $teacherClass)->first();
        
        $classId = $class->CID;
        
        

        $subject = $request->input('subject_name', '');

        $existingSubject = subjects::where('subject_name', $subject)
            ->where('CID', $classId)
            ->first();
        if($existingSubject){
            return redirect()->route('teacher-dashboard')->with('message', 'Subject already exists');
        }else{
            $subjectAdd = subjects::create([
                'subject_name' => $subject,
                'CID' => $classId,
            ]);
        }
        
        

        if($subjectAdd) {
            return redirect()->route('teacher-dashboard')->with('message', 'Subject added successfully');
        } else {
            return redirect()->route('teacher-dashboard')->with('error', 'Failed to add subject');
        }

    }

    public function addClass(Request $request)
    {
        $request->validate([
            'class_name' => 'required',
        ]);

        $class = classes::create([
            'class_name' => $request->input('class_name', ''),
        ]);

        if($class) {
            return redirect()->route('admin-dashboard')->with('success', 'Class added successfully');
        } else {
            return redirect()->route('admin-dashboard')->with('error', 'Failed to add class');
        }
    }

    public function logout(Request $request)
    {
        Session::flush(); 
        return redirect('/teacher-sign-in-form')->with('reload', true); 
    }
    
}

