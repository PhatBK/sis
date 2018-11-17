<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\DB;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Student;
use App\Models\Subject;
use App\Models\ClassSubject;
use App\Models\FeedBack;
use App\Models\Condition;
use App\Models\Plan;
use App\Models\Profile;
use App\Models\RegistSubject;
use App\Models\Result;
use App\Models\SubjectInfo;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    /*Todo case of student*/
    public function getALlSubject() {

    }
    public function getSubjectInfo($code_subject) {

    }
    public function getStudentProfile($code_student) {
        $student = new Student;
        $profile = $student->getProfile($code_student);
        return view('customer.profile', ['pr' => $profile] );
    }
    public function getStudentProfileUpdate($code_student) {
        $obj = new Profile;
        $profile = $obj->getSutdentProfile($code_student);
        return view('customer.update_profile', ['profile' => $profile]);
    }
    public function postStudentProfileUpdate(Request $req, $code_student) {
        $req->validate([
            'name' => 'max:150',
            'nation' => 'max:100',
            'nationality' => 'max:100',
            'birthplace' => 'max:100',
            'graduating_year' => 'max:8',
            'school_3' => 'max:150',
            'object' => 'max:150',
            'id_card' => 'max:11',
            'current_address' => 'max:150',
            'place_range' => 'max:150',
        ]);
        
        DB::table('profiles')
            ->where('code_student', $code_student)
            ->update([
                'nation' => $req->nation,
                'nationality' => $req->nationality,
                'birthplace' => $req->birthplace,
                'graduating_year' => $req->graduating_year,
                'school_3' => $req->school_3,
                'object' => $req->object,
                'id_card' => $req->id_card,
                'date_range' => $req->date_range,
                'place_range' => $req->place_range,
                'current_address' => $req->current_address,
                'phone' => $req->phone,
                'birthday' => $req->birthday,
                'sex' => $req->sex
            ]);

        return redirect('student/profile/update/'.$code_student);
        

    }
    public function getStudentPlans($code_student) {
        $student = new Student;
        $planObj = new Plan;
        $claObj = new ClassSubject;

        $plans = $student->getPlans($code_student);
        $plansInfo = $student->getStudentPlans($code_student);
        

        return view('customer.plan',['plansInfo' => $plansInfo,
                                     'code_student' => $code_student,
                                    ]);
    }
    public function getPlanSearch() {
        return view('customer.plan_search');
    }
    public function postPlanSearch(Request $req) {
        $code_student = $req->code_student;
        $student = new Student;
        $planObj = new Plan;
        $claObj = new ClassSubject;

        $plans = $student->getPlans($code_student);
        $plansInfo = $student->getStudentPlans($code_student);
        

        return view('customer.plan_search_result',['plansInfo' => $plansInfo,
                                     'code_student' => $code_student,
                                    ]);
    }
    public function getAllClass() {

    }
    public function getOneClass($code_class) {

    }
    // tra cứu bảng điểm cá nhân
    public function getResultPersonal($code_student) {
        $studentObj = new Student;

        $results = $studentObj->getStudentResultClass($code_student);
        // dd($results);
        return view('customer.result_personal', [
            'results' => $results,
            'code_student' => $code_student
        ]);
    }
    // tra cứu bảng điểm học phần
    public function getResultSubject($code_student) {
        $studentObj = new Student;

        $results = $studentObj->getStudentResultSubjects($code_student);
        // dd($results);
        return view('customer.result_subject', [
            'results' => $results,
            'code_student' => $code_student
        ]);
        
    }
    // tra cứu điểm toeic
    public function getResultToeic() {

    }
    public function postResultToeic(Request $req) {

    }
    // đăng ký học tập
    public function getStudentRegistSubject($code_student) {
        return view('customer.regist_subject',['code_student' => $code_student]);
    }
    public function postStudentRegistSubject(Request $req, $code_student) {
        $arrays = [];
        $arrays['code_student'] = $code_student;
        $arrays['code_subject'] = $req->code_subject;
      
        $regist_subject = new RegistSubject;
        $created = $regist_subject->createRegistSubject($arrays);

        if(!$created) {
            return "Error create new record Regist Subject";
        }
        $data = $regist_subject->getAllRegistSubject();

        return redirect('student/regist/subjects/'.$code_student);
    }
    public function getStudentRegistSubjectFree() {
        return view('customer.regist_subject_free');
    }
    public function postStudentRegistSubjectFree(Request $req) {

    }
    // Ajax đăng ký học phần và học phần tự chọn tự
    public function ajaxStudentRegistSubject(Request $req) {
        $data_response = [];

        $code_subject = $req->code_subject;
        $date = $req->date;
        $code_student = $req->code_student;
        //$date = date("Ymd");
        $date = date('Y-m-d H:i:s');
        
        // $arrays['code_student'] = $req->code_student;
        // $arrays['code_subject'] = $req->code_subject;
        // $arrays['date'] = $date;
        // $regist_subject = new RegistSubject;
        // $created = $regist_subject->createRegistSubject($arrays);

        $subject = new Subject;
        $subject_info = $subject->getSubjectInfo($code_subject);
        
        $subject_info_full = $subject->getFullSubjectInfo($code_subject);
        $status = true;
        if($subject_info_full == null) {
            $status = false;
        }

        $data_response[0] = $subject_info_full;
        $data_response[1] = $date;
        $data_response[2] = $code_student;
        return response()->json($data_response);
    }
    public function saveRegistSubject(Request $req) {
        $code_subject_all = $req->code_subject_all;
        $code_student = $req->code_student;
        
        $regist_subject = new RegistSubject;
        for($i = 0; $i < count($code_subject_all); $i++) {
            $arrays = [];
            $arrays['code_student'] = intval($code_subject_all[$i][2]);
            $arrays['code_subject'] = $code_subject_all[$i][0];
            $arrays['date'] = $code_subject_all[$i][1];

            $created = $regist_subject->createRegistSubject($arrays);

        }

        return response()->json($code_subject_all);

    }
    public function ajaxStudentRegistSubjectFree(Request $req) {

    }
    public function saveRegistSubjectFree(Request $req) {

    }
    // phần dành cho hỏi đáp, phản hồi, tra cứu các hướng dẫn..
    public function getViewQuestion() {
        return view('customer.question');
    }
    public function postQuestion(Request $req) {
        
    }
    public function getClassList($code_student) {

    }
    public function getBranchResult($code_student) {

    }
    public function getStudentRegistLearningList($code_student) {

    }
    public function getStudentLearningCost($code_student) {

    }
    public function getStudentApprovalProjectFinal($code_student) {

    }

}
