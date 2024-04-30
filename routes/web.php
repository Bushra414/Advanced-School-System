<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\teachersController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\resultController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// views
// Teachers views
// Route::view('/teacher-dashboard', 'dashboards.teacher-dash')->middleware('teacher.auth'); // Remove or comment out this line
Route::view('/teacher-sign-up', 'forms.teacher-sign-up')->name('teacher-sign-up');
Route::view('/teacher-sign-in-form', 'forms.teacher-sign-in')->name('teacher-sign-in-form');

// Student views

Route::view('/student-sign-up', 'forms.student-sign-up')->name('student-sign-up');
Route::view('/student-sign-in', 'forms.student-sign-in')->name('student-sign-in');



// Controllers
// Teacher controller
Route::get('/teacher-dashboard', [teachersController::class, 'showDashboard'])->name('teacher-dashboard')->middleware('teacher.auth');
Route::post('/teacher-create', [teachersController::class, 'create'])->name('teacher-create');
Route::post('/teacher-add-subject', [teachersController::class, 'addSubject'])->name('teacher-add-subject');
Route::post('/teacher-add-class', [teachersController::class, 'addClass'])->name('teacher-add-class');
Route::post('/teacher-logout', [teachersController::class, 'logout'])->name('teacher-logout');


Route::post('/teacher-sign-in', [teachersController::class, 'signIn'])->name('teacher-sign-in');




// Student controller
Route::post('/student-create', [studentController::class, 'create'])->name('student-create');
Route::post('/student-login', [studentController::class, 'login'])->name('student-login');
Route::get('/student-dashboard', [studentController::class, 'studentDash'])->name('student-dashboard');


// Results controller
Route::post('/add-marks', [resultController::class, 'addMarks'])->name('add-marks');
Route::post('/update-marks', [resultController::class, 'updateMarks'])->name('update-marks');



// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin-dashboard', function () {
    $students = App\Models\Student::all();
    return view('dashboards.admin-dash', ['students' => $students]);
})->name('admin-dashboard');
