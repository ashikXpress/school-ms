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

});
Route::namespace('Admin')->group(function (){

});
Route::namespace('Teacher')->group(function (){

});
Route::namespace('Employee')->group(function (){
    Route::get('category/create-designation','EmployeeController@createDesignationForm')->name('create.designation.form');
    Route::post('category/create-designation','EmployeeController@createDesignation')->name('create.designation');
});
Route::namespace('Student')->group(function (){
    Route::get('student/admission','StudentController@studentAdmissionForm')->name('student.admission.form');
    Route::post('student/admission','StudentController@studentAdmission')->name('student.admission');
    Route::get('student/student-lists','StudentController@studentList')->name('student.lists');

    Route::get('category/create-subject','StudentController@createSubjectForm')->name('create.subject.form');
    Route::post('category/create-subject','StudentController@createSubject')->name('create.subject');

    Route::get('category/create-shift','StudentController@createShiftForm')->name('create.shift.form');
    Route::post('category/create-shift','StudentController@createShift')->name('create.shift');

    Route::get('category/create-section','StudentController@createSectionForm')->name('create.section.form');
    Route::post('category/create-section','StudentController@createSection')->name('create.section');

    Route::get('category/create-class','StudentController@createClassForm')->name('create.class.form');
    Route::post('category/create-class','StudentController@createClass')->name('create.class');
    Route::get('category/delete-class/{id}','StudentController@deleteClass')->name('delete.class');

    Route::get('category/create-department','StudentController@createDepartmentForm')->name('create.department.form');
    Route::post('category/create-department','StudentController@createDepartment')->name('create.department');
});
Route::namespace('Staff')->group(function (){

});
Route::namespace('Guardian')->group(function (){

});
Route::namespace('Management')->group(function (){

});
