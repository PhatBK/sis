<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SubjectInfo extends Model
{
    public function getSubjectInfo($code_subject) {
    	return DB::table('subject_infos')->where('code_subject', $code_subject)->get();
    }
}
