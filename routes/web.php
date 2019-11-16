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
    Route::get('logout','AuthController@logoutProcess')->name('logout');

});
Route::namespace('Admin')->group(function (){

});
Route::namespace('Academic')->group(function (){


    Route::get('academic/create-subject','AcademicController@createSubjectForm')->name('create.subject.form');
    Route::post('academic/create-subject','AcademicController@createSubject')->name('create.subject');

    Route::get('academic/create-section','AcademicController@createSectionForm')->name('create.section.form');
    Route::post('academic/create-section','AcademicController@createSection')->name('create.section');

    Route::get('academic/create-class','AcademicController@createClassForm')->name('create.class.form');
    Route::post('academic/create-class','AcademicController@createClass')->name('create.class');
    Route::get('academic/delete-class/{id}','AcademicController@deleteClass')->name('delete.class');


    Route::get('academic/create-designation','AcademicController@createDesignationForm')->name('create.designation.form');
    Route::post('academic/create-designation','AcademicController@createDesignation')->name('create.designation');

});
Route::namespace('employee')->group(function (){
    Route::get('employee/employee-join','EmployeeController@joinEmployeeForm')->name('employee.join.form');
    Route::post('employee/employee-join','EmployeeController@joinEmployee')->name('employee.join');
    Route::get('employee/employee-edit/{id}','EmployeeController@employeeEditForm')->name('employee.edit.form');
    Route::post('employee/employee-update/{id}','EmployeeController@employeeUpdate')->name('employee.update');

    Route::get('employee/employee-attendance','EmployeeController@attendanceEmployeeForm')->name('employee.attendance.form');
    Route::post('employee/employee-attendance','EmployeeController@attendanceEmployee')->name('employee.attendance');
    Route::get('employee/employee-lists','EmployeeController@employeeList')->name('employee.lists');
    Route::get('employee/profile/{id}','EmployeeController@employeeProfile')->name('employee.profile');


});
Route::namespace('Student')->group(function (){
    Route::get('student/admission','StudentController@studentAdmissionForm')->name('student.admission.form');
    Route::post('student/admission','StudentController@studentAdmission')->name('student.admission');
    Route::get('student/edit/{id}','StudentController@studentEditForm')->name('student.edit.form');
    Route::post('student/update/{id}','StudentController@studentUpdate')->name('student.update');

    Route::get('student/student-lists','StudentController@studentList')->name('student.lists');

    Route::get('student/attendance','StudentController@studentAttendanceForm')->name('student.attendance.form');
    Route::post('student/attendance','StudentController@studentAttendance')->name('student.attendance');
    Route::get('student/profile/{id}','StudentController@studentProfile')->name('student.profile');





});
Route::namespace('Staff')->group(function (){

});
Route::namespace('Guardian')->group(function (){

});
Route::namespace('Management')->group(function (){

});
