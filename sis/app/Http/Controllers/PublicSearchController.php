<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicSearchController extends Controller
{
    public function getHomeView() {
    	$data = "";
    	return view('customer.home',['data' => $data]);
    }
    public function postSearch(Request $req) {
    	dd($req->key_search);
    }
    public function getSupportRegistView() {
    	return view('customer.support_regist');
    }
    public function getSupportDepartmentView() {
    	return view('customer.support_department');
    }
    public function getSupportProcedureView() {
    	return view('customer.support_procedure');
    }
    public function getFeedbackView() {

    }
    public function postFeedback(Request $req) {

    }
   
}
