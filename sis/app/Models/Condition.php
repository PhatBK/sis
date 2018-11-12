<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Condition extends Model
{
    public function getAllConditions() {
    	$data = DB::table('conditions')->get();
    	return $data;
    }
    public function getOneCondition($code_condition) {
    	$data = DB::table('conditions')
    			->where('code_condition', $code_condition)
    			->get();
    	return $data;
    }
    public function getSubjectInfo($code_subject) {
    	$data = DB::table('subject_infos')
    			->where('code_subject', $code_subject)
    			->get();
    	return $data;
    }
}
