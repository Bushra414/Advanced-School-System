<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\results;
use App\Models\student;
use App\Models\subjects;
use App\Models\classes;

use Illuminate\Support\Facades\Session;

class studentController extends Controller
{
    public function create(Request $request){
        $request->validate([
            'fullname' => 'required',
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:male,female',
            'phone_number' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'parents_phone_number' => 'required',
            'class' => 'required'
        ]);

        $student = student::create([
            'fullname' => $request->input('fullname'),
            'date_of_birth' => $request->input('date_of_birth'),
            'gender' => $request->input('gender'),
            'phone_number' => $request->input('phone_number'),
            'father_name' => $request->input('father_name'),
            'mother_name' => $request->input('mother_name'),
            'parents_phone_number' => $request->input('parents_phone_number'),
            'class' => $request->input('class')
        ]);
        if($student){
            return redirect()->route('student-sign-up')->with('success', 'Student created successfully');
        } else {
            return redirect()->route('student-sign-up')->with('error', 'Failed to create student');
        }
    }

    public function studentDash(){
        $studentId = session('student_id');
        $student = student::find($studentId);
        if (!$student) {
            return redirect()->back()->with('error', 'Student not found');
        }
        $studentFullName = $student->fullname;
        session(['studentFullName' => $studentFullName]);
        $class = classes::where('class_name', $student->class)->first();
        
        $classId = $class->CID;        
        $subjects = subjects::where('CID', $classId)->get();
        return view('dashboards.student-dash', ['subjects' => $subjects, 'studentId' => $studentId, 'studentFullName' => $studentFullName]);
    }
    
    public function login(Request $request){
        $student = student::where('phone_number', $request->input('phone_number'))->first();

        if ($student) {
            session([
                'student_name' => $student->first_name,
                'student_id' => $student->SID
            ]);
            return redirect()->route('student-dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid phone number');
        }
    }
    public function getStudentMarks($studentId, $subjectId) {
        $mark = results::where(['SID' => $studentId, 'SubID' => $subjectId])->value('marks');
        return $mark ?? "N/A";
    }
}

