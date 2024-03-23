<?php

namespace App\Http\Controllers;

use App\Http\Controllers\teachersController;
use App\Models\results;
use Illuminate\Http\Request;

class resultController extends teachersController
{
    public function getMarks($studentId, $subjectId)
    {
        $marks = results::where('SID', $studentId)
                            ->where('SubID', $subjectId)
                            ->first();
        if ($marks) {
            return $marks->marks;
        } else {
            return "N/A";
        }
    }

    public function addMarks(Request $request)
    {
        $studentId = $request->input('SID');
        $subjectId = $request->input('SubID');
        $marks = $request->input('marks');

        $existingMark = results::where('SID', $studentId)->where('SubID', $subjectId)->first();
        
        if ($existingMark) {
            return redirect()->route('teacher-dashboard')->with('error', "Error: The student is already graded for this subject");
        } else {
            $studentResult = new results;
            $studentResult->SID = $studentId;
            $studentResult->SubID = $subjectId;
            $studentResult->marks = $marks;
        
            if ($studentResult->save()) {
                return redirect()->route('teacher-dashboard');
            } else {
                return false; 
            }
        }
    }

    public function updateMarks(Request $request)
    {
        $studentId = $request->input('SID');
        $subjectId = $request->input('SubID');
        $marks = $request->input('marks');

        $existingMark = results::where('SID', $studentId)->where('SubID', $subjectId)->first();
        
        if ($existingMark) {
            $existingMark->marks = $marks;
            if ($existingMark->save()) {
                return redirect()->route('teacher-dashboard');
            } else {
                return redirect()->route('teacher-dashboard')->with('error', 'Failed to update marks');
            }
        } else {
            return redirect()->route('teacher-dashboard')->with('error', 'Error: Marks not found');
        }
    }
}
