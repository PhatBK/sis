<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RegistSubject extends Model
{
    public function getAllRegistSubject() {
    	return DB::table('regist_subjects')->get();
    }
    public function createRegistSubject($arrays) {
    	$success = false;
    	if(count($arrays) != 0) {
	    	DB::table('regist_subjects')->insert([
	    		[
	    			'code_student' => $arrays['code_student'],
	    			'code_subject' => $arrays['code_subject'],
                    'created_at' => $arrays['date'],
	    		],
	    	]);
	    	$success = true;
    	}
    	return $success;
    }
    public function getLastRecord() {
        
    }
}
