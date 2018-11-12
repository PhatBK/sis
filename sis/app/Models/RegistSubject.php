<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RegistSubject extends Model
{
    public function getAllRegistSubject() {
    	return DB::table('regist_subjects')->get();
    }
}
