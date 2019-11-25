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

//    Route::group(['middleware' => ['admin' or 'teacher']], function(){
//        Route::get('academic/create-subject', 'AcademicController@createSubjectForm')->name('create.subject.form');
//    });

   Route::get('academic/create-subject','AcademicController@createSubjectForm')->name('create.subject.form');
    Route::post('academic/create-subject','AcademicController@createSubject')->name('create.subject');

    Route::get('academic/create-section','AcademicController@createSectionForm')->name('create.section.form');
    Route::post('academic/create-section','AcademicController@createSection')->name('create.section');

    Route::get('academic/create-class','AcademicController@createClassForm')->name('create.class.form');
    Route::post('academic/create-class','AcademicController@createClass')->name('create.class');
    Route::get('academic/delete-class/{id}','AcademicController@deleteClass')->name('delete.class');

});
Route::namespace('ClassRoutine')->group(function (){
    Route::get('class-routine/create-class-routine','ClassRoutineController@createClassRoutineForm')->name('create.class.routine.form');
    Route::post('class-routine/create-class-routine','ClassRoutineController@createClassRoutine')->name('create.class.routine');
    Route::get('class-routine/show-class-routine','ClassRoutineController@showClassRoutine')->name('show.class.routine.form');

});
Route::namespace('Syllabus')->group(function (){
    Route::get('syllabus/create-syllabus','SyllabusController@createSyllabusForm')->name('create.syllabus.form');
    Route::post('syllabus/create-syllabus','SyllabusController@createSyllabus')->name('create.syllabus');
    Route::get('syllabus/syllabus-lists','SyllabusController@syllabusList')->name('syllabus.list');
    Route::get('syllabus/details-syllabus/{id}','SyllabusController@detailsSyllabus')->name('details.syllabus');
});

Route::namespace('Exam')->group(function (){
    Route::get('exam/create-exam-term','ExaminationController@createExamTermForm')->name('create.exam.term.form');
    Route::post('exam/create-exam-term','ExaminationController@createExamTerm')->name('create.exam.term');
});
Route::namespace('Employee')->group(function (){
    Route::get('employee/create-designation','EmployeeController@createDesignationForm')->name('create.designation.form');
    Route::post('employee/create-designation','EmployeeController@createDesignation')->name('create.designation');


    Route::get('employee/employee-join','EmployeeController@joinEmployeeForm')->name('employee.join.form');
    Route::post('employee/employee-join','EmployeeController@joinEmployee')->name('employee.join');
    Route::get('employee/employee-edit/{id}','EmployeeController@employeeEditForm')->name('employee.edit.form');
    Route::post('employee/employee-update/{id}','EmployeeController@employeeUpdate')->name('employee.update');

    Route::get('employee/change-password','EmployeeController@changePasswordFrom')->name('employee.change.password.form');
    Route::post('employee/change-password','EmployeeController@changePassword')->name('employee.change.password');


    Route::get('employee/employee-lists','EmployeeController@employeeList')->name('employee.lists');
    Route::get('employee/profile/{id}','EmployeeController@employeeProfile')->name('employee.profile');


});
Route::namespace('Student')->group(function (){
    Route::get('student/admission','StudentController@studentAdmissionForm')->name('student.admission.form');
    Route::post('student/admission','StudentController@studentAdmission')->name('student.admission');
    Route::get('student/edit/{id}','StudentController@studentEditForm')->name('student.edit.form');
    Route::post('student/update/{id}','StudentController@studentUpdate')->name('student.update');

    Route::get('student/student-lists','StudentController@studentList')->name('student.lists');


    Route::get('student/profile/{id}','StudentController@studentProfile')->name('student.profile');



});
Route::namespace('Attendance')->group(function (){
    Route::get('attendance/student-attendance','StudentAttendanceController@studentAttendanceForm')->name('student.attendance.form');
    Route::post('attendance/student-attendance','StudentAttendanceController@studentAttendance')->name('student.attendance');
    Route::get('attendance/student-attendance-info','StudentAttendanceController@studentAttendanceInfo')->name('student.attendance.info');

    Route::get('attendance/employee-attendance','EmployeeAttendanceController@attendanceEmployeeForm')->name('employee.attendance.form');
    Route::post('attendance/employee-attendance','EmployeeAttendanceController@attendanceEmployee')->name('employee.attendance');
    Route::get('attendance/employee-attendance-info','EmployeeAttendanceController@attendanceEmployeeInfo')->name('employee.attendance.info');

});

Route::namespace('Password')->group(function (){

    Route::get('employee-recovery-password','PasswordController@employeeRecoveryPasswordForm')->name('employee.recovery.password.form');
    Route::post('employee-recovery-password','PasswordController@employeeRecoveryPassword')->name('employee.recovery.password');

    Route::get('employee-reset-password/{token}','PasswordController@employeeResetPasswordForm')->name('employee.reset.password.form');
    Route::post('employee-reset-password/{token}','PasswordController@employeeResetPassword')->name('employee.reset.password');

});








Route::namespace('Teacher')->group(function (){
    Route::get('teacher/dashboard','TeacherController@teacherDashboard')->name('teacher.dashboard');
});
Route::namespace('staff')->group(function (){
    Route::get('staff/dashboard','staffController@staffDashboard')->name('staff.dashboard');
});
