<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Plan extends Model
{
    public function getAllPlans() {
    	return DB::table('plans')->get();
    }
    public function getOnePlan($id) {
    	return DB::table('plans')->where('id', $id)->get();
    }
}
