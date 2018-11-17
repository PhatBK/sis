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
             // phần dùng chung cho mọi người vào trang
// lấy giao diện trang chủ
Route::get('/','PublicSearchController@getHomeView');
Route::get('home', 'PublicSearchController@getHomeView');
Route::post('search', 'PublicSearchController@postSearch');

// lấy giao diện hướng dẫn
Route::get('support/regist-subject', 'PublicSearchController@getSupportRegistView');
Route::get('support/department', 'PublicSearchController@getSupportDepartmentView');
Route::get('support/procedure', 'PublicSearchController@getSupportProcedureView');

// lấy feedback của người dùng
Route::get('student/feedback', 'PublicSearchController@getFeedbackView');
Route::post('student/feedback', 'PublicSearchController@postFeedback');



             // Phần dành cho sinh viên đã đăng nhập
// lấy giao diện thông tin sinh viên
Route::get('student/profile/{code_student}', 'StudentController@getStudentProfile');

// lấy giao diện cập nhật profile
Route::get('student/profile/update/{code_student}', 'StudentController@getStudentProfileUpdate');
Route::post('student/profile/update/{code_student}', 'StudentController@postStudentProfileUpdate');

// lấy thời khóa biểu sinh viên
Route::get('student/plan/{code_student}', 'StudentController@getStudentPlans');
// lấy thời khóa biểu sinh viên khác
Route::get('student/plans/search', 'StudentController@getPlanSearch');
Route::post('student/plans/search', 'StudentController@postPlanSearch');

// lấy kết quả học tập
Route::get('student/result/personal/{code_student}', 'StudentController@getResultPersonal');
Route::get('student/result/subjects/{code_student}', 'StudentController@getResultSubject');

// lấy kết quả thi toeic
Route::get('student/result/toeic', 'StudentController@getResultToeic');
Route::post('student/result/toeic/search', 'StudentController@postToeicSearch');

// đăng ký học phần
Route::get('student/regist/subjects/{code_student}', 'StudentController@getStudentRegistSubject');
// Route::post('student/regist/subject/{code_student}', 'StudentController@postStudentRegistSubject');
// Route::get('student/regist/subject/result', 'StudentController@getSubjectRegistResult');

Route::get('student/regist/subject/free/{code_student}', 'StudentController@getRegistSubjectFree');
Route::post('student/regist/subject/free/{code_student}', 'StudentController@postRegistSubjectFree');

// route đăng ký học phền sử dụng ajax
Route::post('RegistAjax',['as' => 'RegistAjax', 'uses' => 'StudentController@ajaxStudentRegistSubject']);
Route::post('SaveRegistSubject', ['as' => 'SaveRegistSubject', 'uses' => 'StudentController@saveRegistSubject']);

Route::post('RegistAjaxFree', ['as' => 'RegistAjaxFree', 'uses' => 'StudentController@ajaxStudentRegistSubjectFree']);
Route::post('SaveRegistSubjectFree', ['as' => 'SaveRegistSubjectFree', 'uses' => 'StudentController@saveRegistSubjectFree']);

// phần câu hỏi về các chủ đề của các sinh viên
Route::get('student/question', 'StudentController@getViewQuestion');
Route::post('student/question', 'StudentController@postQuestion');

// phần xem thông tin lớp học,...
Route::get('student/class/list','StudentController@getClassList');
Route::get('student/branch/result', 'StudentController@getBranchResult');
Route::get('student/regist/learning', 'StudentController@getStudentRegistLearning');
Route::get('student/learning/cost', 'StudentController@getStudentLearningCost');
Route::get('student/approval/project/final/result', 'StudentController@getStudentApprovalProjectFinal');

Route::get('date', function() {
	dd(date('Y-m-d H:i:s'));
});
