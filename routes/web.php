<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;


Route::namespace('Dashboard')->group(function (){
    Route::get('','DashboardController@home')->name('home');
    Route::get('dashboard','DashboardController@dashboard')->name('dashboard');
});

Route::namespace('Auth')->group(function (){
    Route::get('login','AuthController@loginForm')->name('login.form');
    Route::post('login','AuthController@loginProcess')->name('login');

});
Route::namespace('Admin')->group(function (){

});
Route::namespace('Academic')->group(function (){


    Route::get('academic/create-subject','AcademicController@createSubjectForm')->name('create.subject.form');
    Route::post('academic/create-subject','AcademicController@createSubject')->name('create.subject');

    Route::get('academic/create-shift','AcademicController@createShiftForm')->name('create.shift.form');
    Route::post('academic/create-shift','AcademicController@createShift')->name('create.shift');

    Route::get('academic/create-section','AcademicController@createSectionForm')->name('create.section.form');
    Route::post('academic/create-section','AcademicController@createSection')->name('create.section');

    Route::get('academic/create-class','AcademicController@createClassForm')->name('create.class.form');
    Route::post('academic/create-class','AcademicController@createClass')->name('create.class');
    Route::get('academic/delete-class/{id}','AcademicController@deleteClass')->name('delete.class');

    Route::get('academic/create-department','AcademicController@createDepartmentForm')->name('create.department.form');
    Route::post('academic/create-department','AcademicController@createDepartment')->name('create.department');

    Route::get('academic/create-designation','AcademicController@createDesignationForm')->name('create.designation.form');
    Route::post('academic/create-designation','AcademicController@createDesignation')->name('create.designation');

});
Route::namespace('employee')->group(function (){
    Route::get('join-employee','EmployeeController@joinEmployeeForm')->name('join.employee.form');
    Route::post('join-employee','EmployeeController@joinEmployee')->name('join.employee');
    Route::get('attendance-employee','EmployeeController@attendanceEmployeeForm')->name('attendance.employee.form');
    Route::post('attendance-employee','EmployeeController@attendanceEmployee')->name('attendance.employee');


});
Route::namespace('Student')->group(function (){
    Route::get('student/admission','StudentController@studentAdmissionForm')->name('student.admission.form');
    Route::post('student/admission','StudentController@studentAdmission')->name('student.admission');
    Route::get('student/student-lists','StudentController@studentList')->name('student.lists');
    Route::get('student-attendance','StudentController@studentAttendanceForm')->name('student.attendance.form');
    Route::post('student-attendance','StudentController@studentAttendance')->name('student.attendance');




});
Route::namespace('Staff')->group(function (){

});
Route::namespace('Guardian')->group(function (){

});
Route::namespace('Management')->group(function (){

});
