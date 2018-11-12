<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Result;
use App\Models\ClassSubject;
use Illuminate\Support\Facades\DB;


class Student extends Model
{
	/*Todo create function process data of student*/
	public function getFullStudentInfo($code_student) {
		$data = DB::table('users')
		        ->where('users.code_student', $code_student)
		        ->join('profile','users.code_student', '=', 'profile.code_student')
		        ->select('users.*','profile.*')
		        ->get();
		return $data;
	}
	public function getStudentPlans($code_student) {
		$data = DB::table('plans')
				->where('plans.code_student', $code_student)
				->join('class', 'class.code_class', '=', 'plans.code_class')
				->select('plans.*', 'class.*')
				->get();
		return $data;

	}
	public function getStudentResultClass($code_student) {

		$data = DB::table('results')
		                ->where('results.code_student', $code_student)
						->join('class', 'class.code_class', '=', 'results.code_class')
						->orderBy('class.semester', 'asc')
						// ->join('profiles', 'results.code_student', '=', 'profiles.code_student')
						// ->select('profiles.*', 'results.*', 'class.*')
						->join('subject_infos', 'subject_infos.code_subject', '=', 'class.code_subject')
						->select('results.*', 'class.*', 'subject_infos.*')
						->get();
		return $data;
		
	}
	public function getStudentResultSubjects($code_student) {
		$data = DB::table('results')
		                ->where('results.code_student', $code_student)
						->join('class', 'class.code_class', '=', 'results.code_class')
						->orderBy('class.semester', 'desc')
						// ->join('profiles', 'results.code_student', '=', 'profiles.code_student')
						// ->select('profiles.*', 'results.*', 'class.*')
						->join('subject_infos', 'subject_infos.code_subject', '=', 'class.code_subject')
						->select('results.*', 'class.*', 'subject_infos.*')
						->get();
		return $data;
	}
    public function getFeedBack($code_student) {
    	$data = DB::table('feedbacks')->where('code_student',$code_student)->get();
    	return $data;
    }
    public function getResult($code_student) {
    	$data = DB::table('results')->where('code_student', $code_student)->get();
    	return $data;
    }
    public function getPlans($code_student) {
    	$data = DB::table('plans')->where('code_student', $code_student)->get();
    	return $data;
    }
    public function getProfile($code_student) {
    	$data = DB::table('profiles')->where('code_student', $code_student)->first();
    	return $data;
    }
    public function getRegisSubject($code_student) {
    	$data = DB::table('regis_subjects')->where('code_student', $code_student)->get();
    	return $data;
    }

}
