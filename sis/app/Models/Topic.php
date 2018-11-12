<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Topic extends Model
{
    public function getAllTopic() {
    	return DB::table('topics')->get();
    }
    public function getOneTopic($id) {
    	return DB::table('topics')->where('id', $id)->get();
    }
    public function getFeedbacks($id) {
    	return DB::table('feedbacks')->where('id_topic', $id)->get();
    }
}
