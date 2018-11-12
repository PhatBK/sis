<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ClassSubject extends Model
{
    public function getAllClass() {
    	$data = DB::table('class')->get();
    	return $data;
    }
    public function getOneClass($code_class) {
    	$data = DB::table('class')
    			->where('code_class', $code_class)
    			->get();
    	return $data;
    }
    public function getResults($code_class) {
    	$data = DB::table('results')
    			->where('results.code_class', $code_class)
    			->get();
    	return $data;
    }
    public function getPlans($code_class) {
    	$data = DB::table('plans')
    			->where('plans.code_class', $code_class)
    			->get();
    	return $data;
    }
    public function getSubjectInfo($code_subject) {
    	$data = DB::table('subject_infos')
    			->where('subject_infos.code_subject', $code_subject)
    			->get();
    	return $data;
    }
}

