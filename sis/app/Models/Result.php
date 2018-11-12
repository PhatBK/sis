<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Result extends Model
{
    public function getAllResults() {
    	return DB::table('results')->get();
    }
    public function getResultStudent($code_student) {
    	return DB::table('results')
    					->where('results.code_student', '=', $code_student)
    					->get();
    }
}
