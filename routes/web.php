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
    Route::get('dashboard','DashboardController@dashboard')->name('dashboard');
});

//Route::namespace('Auth')->group(function (){
//    Route::get('e-login','AuthController@loginForm')->name('e.login.form');
//    Route::post('e-login','AuthController@loginProcess')->name('e.login');
//    Route::get('e-logout','AuthController@logoutProcess')->name('e.logout');
//
//});
Route::namespace('Admin')->group(function (){

});
Route::namespace('Academic')->group(function (){
    Route::get('academic/create-subject','AcademicController@createSubjectForm')->name('create.subject.form');
    Route::post('academic/create-subject','AcademicController@createSubject')->name('create.subject');
    Route::get('academic/subject-list','AcademicController@subjectList')->name('subject.list');
    Route::get('academic/edit-subject/{id}','AcademicController@editSubject')->name('edit.subject');
    Route::post('academic/update-subject/{id}','AcademicController@updateSubject')->name('update.subject');

    Route::get('academic/create-section','AcademicController@createSectionForm')->name('create.section.form');
    Route::post('academic/create-section','AcademicController@createSection')->name('create.section');
    Route::get('academic/section-list','AcademicController@sectionList')->name('section.list');
    Route::get('academic/edit-section/{id}','AcademicController@editSection')->name('edit.section');
    Route::post('academic/update-section/{id}','AcademicController@updateSection')->name('update.section');


    Route::get('academic/create-class','AcademicController@createClassForm')->name('create.class.form');
    Route::post('academic/create-class','AcademicController@createClass')->name('create.class');
    Route::get('academic/class-edit/{id}','AcademicController@editClass')->name('edit.class');
    Route::post('academic/class-update/{id}','AcademicController@updateClass')->name('update.class');
    Route::get('academic/delete-class/{id}','AcademicController@deleteClass')->name('delete.class');
    Route::get('academic/class-list','AcademicController@classList')->name('class.list');


    Route::get('academic/create-class-subject','AcademicController@createClassSubjectForm')->name('create.class.subject.form');
    Route::post('academic/create-class-subject','AcademicController@createClassSubject')->name('create.class.subject');


});
Route::namespace('ClassRoutine')->group(function (){
    Route::get('class-routine/create-class-routine','ClassRoutineController@createClassRoutineForm')->name('create.class.routine.form');
    Route::post('class-routine/create-class-routine','ClassRoutineController@createClassRoutine')->name('create.class.routine');
    Route::get('class-routine/show-class-routine','ClassRoutineController@showClassRoutine')->name('show.class.routine.form');

});
Route::namespace('Syllabus')->group(function (){
    Route::get('syllabus/create-syllabus','SyllabusController@createSyllabusForm')->name('create.syllabus.form');
    Route::post('syllabus/create-syllabus','SyllabusController@createSyllabus')->name('create.syllabus');
    Route::get('syllabus/edit-syllabus/{id}','SyllabusController@editSyllabus')->name('edit.syllabus');
    Route::post('syllabus/update-syllabus/{id}','SyllabusController@updateSyllabus')->name('update.syllabus');

    Route::get('syllabus/syllabus-list','SyllabusController@syllabusList')->name('syllabus.list');
    Route::get('syllabus/details-syllabus/{id}','SyllabusController@detailsSyllabus')->name('details.syllabus');
});




Route::namespace('Exam')->group(function (){
    Route::get('exam/exam-term-list','ExaminationController@examTermList')->name('exam.term.list');
    Route::get('exam/create-exam-term','ExaminationController@createExamTermForm')->name('create.exam.term.form');
    Route::post('exam/create-exam-term','ExaminationController@createExamTerm')->name('create.exam.term');

    Route::get('exam/edit-exam-term/{id}','ExaminationController@editExamTerm')->name('edit.exam.term');
    Route::post('exam/update-exam-term/{id}','ExaminationController@updateExamTerm')->name('update.exam.term');

    Route::get('exam/create-exam-routine','ExaminationController@createExamRoutineForm')->name('create.exam.routine.form');
    Route::post('exam/create-exam-routine','ExaminationController@createExamRoutine')->name('create.exam.routine');
});


Route::namespace('Question')->group(function (){
    Route::get('exam/create-creative-question','QuestionController@createCreativeQuestionForm')->name('create.creative.question.form');
    Route::post('exam/create-creative-question','QuestionController@createCreativeQuestion')->name('create.creative.question');
    Route::get('exam/creative-question-list','QuestionController@creativeQuestionList')->name('creative.question.list');
    Route::get('exam/creative-question-details/{id}','QuestionController@creativeQuestionDetails')->name('creative.question.details');

    Route::get('exam/create-objective-question','QuestionController@createObjectiveQuestionForm')->name('create.objective.question.form');
    Route::post('exam/create-objective-question','QuestionController@createObjectiveQuestion')->name('create.objective.question');
    Route::get('exam/objective-question-list','QuestionController@objectiveQuestionList')->name('objective.question.list');
});

Route::namespace('Result')->group(function(){
    Route::get('result/insert-student-marks','ResultController@insertStudentMarksForm')->name('insert.student.marks.form');
    Route::post('result/insert-student-marks','ResultController@insertStudentMarks')->name('insert.student.marks');
    Route::get('result/result-show','ResultController@resultShow')->name('result.show');
});

Route::namespace('Notice')->group(function (){
    Route::get('notice/create-diary','NoticeController@createDiaryForm')->name('create.diary.form');
    Route::post('notice/create-diary','NoticeController@createDiary')->name('create.diary');
});

Route::namespace('Employee')->group(function (){
    Route::get('employee/create-designation','EmployeeController@createDesignationForm')->name('create.designation.form');
    Route::post('employee/create-designation','EmployeeController@createDesignation')->name('create.designation');
    Route::get('employee/designation-list','EmployeeController@designationList')->name('designation.list');
    Route::get('employee/edit-designation/{id}','EmployeeController@editDesignation')->name('edit.designation');
    Route::post('employee/update-designation/{id}','EmployeeController@updateDesignation')->name('update.designation');


    Route::get('employee/employee-join','EmployeeController@joinEmployeeForm')->name('employee.join.form');
    Route::post('employee/employee-join','EmployeeController@joinEmployee')->name('employee.join');
    Route::get('employee/employee-edit/{id}','EmployeeController@employeeEditForm')->name('employee.edit.form');
    Route::post('employee/employee-update/{id}','EmployeeController@employeeUpdate')->name('employee.update');

    Route::get('employee/change-password','EmployeeController@changePasswordFrom')->name('employee.change.password.form');
    Route::post('employee/change-password','EmployeeController@changePassword')->name('employee.change.password');


    Route::get('employee/employee-lists','EmployeeController@employeeList')->name('employee.lists');

    Route::get('employee/employee-details/{id}','EmployeeController@employeeDetails')->name('employee.details');

    Route::get('employee-profile','EmployeeController@employeeProfile')->name('employee.profile');


});
Route::namespace('Student')->group(function (){
    Route::get('student/admission','StudentController@studentAdmissionForm')->name('student.admission.form');
    Route::post('student/admission','StudentController@studentAdmission')->name('student.admission');
    Route::get('student/edit/{id}','StudentController@studentEditForm')->name('student.edit.form');
    Route::post('student/update/{id}','StudentController@studentUpdate')->name('student.update');

    Route::get('student/student-lists','StudentController@studentList')->name('student.lists');


    Route::get('student/student-details/{id}','StudentController@studentDetails')->name('student.details');



});
Route::namespace('Attendance')->group(function (){
    Route::get('attendance/student-attendance','StudentAttendanceController@studentAttendanceForm')->name('student.attendance.form');
    Route::post('attendance/student-attendance','StudentAttendanceController@studentAttendance')->name('student.attendance');
    Route::get('attendance/student-attendance-info','StudentAttendanceController@studentAttendanceInfo')->name('student.attendance.info');

    Route::get('attendance/student-attendance-change/{id}','StudentAttendanceController@studentAttendanceChange')->name('student.attendance.change');

    Route::get('attendance/employee-attendance','EmployeeAttendanceController@attendanceEmployeeForm')->name('employee.attendance.form');
    Route::post('attendance/employee-attendance','EmployeeAttendanceController@attendanceEmployee')->name('employee.attendance');
    Route::get('attendance/employee-attendance-info','EmployeeAttendanceController@attendanceEmployeeInfo')->name('employee.attendance.info');

    Route::get('attendance/employee-attendance-change/{id}','EmployeeAttendanceController@employeeAttendanceChange')->name('employee.attendance.change');

});

Route::namespace('Password')->group(function (){

    Route::get('employee-recovery-password','PasswordController@employeeRecoveryPasswordForm')->name('employee.recovery.password.form');
    Route::post('employee-recovery-password','PasswordController@employeeRecoveryPassword')->name('employee.recovery.password');

    Route::get('employee-reset-password/{token}','PasswordController@employeeResetPasswordForm')->name('employee.reset.password.form');
    Route::post('employee-reset-password/{token}','PasswordController@employeeResetPassword')->name('employee.reset.password');

});

Route::namespace('Payment')->group(function (){

    Route::get('payment/employee-payment','PaymentController@employeePaymentForm')->name('employee.payment.form');
    Route::post('payment/employee-payment','PaymentController@employeePayment')->name('employee.payment');

    Route::get('payment/employee-payment-edit/{id}','PaymentController@employeePaymentEdit')->name('employee.payment.edit');
    Route::post('payment/employee-payment-update/{id}','PaymentController@employeePaymentUpdate')->name('employee.payment.update');

    Route::get('payment/employee-payment-list','PaymentController@employeePaymentList')->name('employee.payment.list');

});






Route::namespace('Teacher')->group(function (){
    Route::get('teacher/dashboard','TeacherController@teacherDashboard')->name('teacher.dashboard');
});
Route::namespace('staff')->group(function (){
    Route::get('staff/dashboard','staffController@staffDashboard')->name('staff.dashboard');
});



Route::namespace('StudentPanel')->group(function (){
    Route::get('student/dashboard','StudentController@studentDashboard')->name('student.dashboard');
    Route::get('student/logout','StudentController@studentLogout')->name('student.logout');
    Route::get('student/id-card','StudentController@studentIdCard')->name('student.id.card');
    Route::get('student/syllabus','StudentController@studentSyllabus')->name('student.syllabus');
    Route::get('student/attendance-report','StudentController@studentAttendanceReport')->name('student.attendance.report');

    Route::get('student/change-password','StudentController@changePasswordFrom')->name('student.change.password.form');
    Route::post('student/change-password','StudentController@changePassword')->name('student.change.password');

    Route::get('student/student-profile','StudentController@studentProfile')->name('student.profile');


});



Route::namespace('Fontend')->group(function (){
    Route::get('/','HomeController@home')->name('home');
    Route::get('student/student-login','StudentAuthController@studentLoginForm')->name('student.login.form');
    Route::post('student/student-login','StudentAuthController@studentLogin')->name('student.login');
    Route::get('student-password-recovery','StudentAuthController@studentPasswordRecoveryForm')->name('student.password.recovery.form');
    Route::post('student-password-recovery','StudentAuthController@studentPasswordRecovery')->name('student.password.recovery');

    Route::get('student-password-recovery-system/{id}','StudentAuthController@studentPasswordRecoverySystemForm')->name('student.password.recovery.system.form');
    Route::post('student-password-recovery-system/{id}','StudentAuthController@studentPasswordRecoverySystem')->name('student.password.recovery.system');

    Route::get('student-password-reset/{token}','StudentAuthController@studentPasswordResetForm')->name('student.password.reset.form');
    Route::post('student-password-reset/{token}','StudentAuthController@studentPasswordReset')->name('student.password.reset');


    Route::get('admission','AdmissionController@admissionForm')->name('admission.form');
    Route::post('admission','AdmissionController@admission')->name('admission');

    Route::get('teacher-slider','HomeController@teacherSlider')->name('teacher.slider');
    Route::get('gallery','HomeController@gallery')->name('gallery');
    Route::get('blog','HomeController@blog')->name('blog');
    Route::get('contact-us','HomeController@contactUs')->name('contact.us');
    Route::get('about-us','HomeController@aboutUs')->name('about.us');
    Route::get('events','HomeController@events')->name('events');
    Route::get('event-details/{id}','HomeController@eventDetails')->name('event.details');



});


Auth::routes(['register' => false,'reset'=>false]);
//
//Route::get('/home', 'HomeController@index')->name('home');
