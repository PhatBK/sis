<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Subject extends Model
{
    public function getAllSubject() {
    	$data = DB::table('subjects')
                ->get();
    	return $data;
    }
    public function getOneSubject($code_subject) {
    	$data = DB::table('subjects')
                ->where('code_subject', $code_subject)
                ->get();
    }
    public function getSubjectInfo($code_subject) {
    	$data = DB::table('subject_infos')
                ->where('code_subject', $code_subject)
                ->get();
    	return $data;
    }
    public function getClass($code_subject) {
    	$data = DB::table('class')
                ->where('code_subject', $code_subject)
                ->get();
    	return $data;
    }
    public function getSubjectCondition($code_subject) {
    	$data = DB::table('conditions')
                ->where('code_subject', $code_subject)
                ->get();
    	return $data;
    }
    public function getRegistSubject($code_subject) {
    	$data = DB::table('regist_subjects')
                ->where('code_subject', $code_subject)
                ->get();
    }
}
