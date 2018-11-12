<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Notification extends Model
{
    public function getAllNotifications() {
    	return DB::table('notifications')->get();
    }
    public function getOneNotification($id) {
    	return DB::table('notifications')->where('id', $id)->get();
    }
}
