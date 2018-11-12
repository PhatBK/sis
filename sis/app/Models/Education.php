<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Education extends Model
{
    public function getAllEducations() {
    	return DB::table('educations')->get();
    }
    public function getStudents($code_education) {
    	$data = DB::table('users')
    			->where('users.code_education', $code_education)
    			->get();
    	return $data;
    }
    public function getSubjects($code_education) {
    	$data = DB::table('subjects')
    			->where('subjects.code_education', $code_education)
    			->get();
    	return $data;
    }
}
