<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Profile extends Model
{
    public function getSutdentProfile($code_student) {
    	return DB::table('profiles')->where('code_student', $code_student)->get();
    }
    public function createNewProfile() {
    	
    }
}
