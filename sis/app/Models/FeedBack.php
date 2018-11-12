<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FeedBack extends Model
{
    public function getAllFeedbacks() {
    	return DB::table('feedbacks')->get();
    }
    public function getOneFeedback($id) {
    	return DB::table('feedbacks')->where('id', $id);
    }
    public function getStudentFeedback($code_student) {
    	return DB::table('feedbacks')->where('code_student',$code_student)->get();
    }
    public function getTopNumberFeedback($number) {

    	$data = DB::table('feedbacks')
                ->select('code_student', DB::raw('count(*) as soluong'))
                ->groupBy('code_student')
                ->orderBy('soluong','desc')
                ->take($number)
                ->get();
		return $data;
    }
}
