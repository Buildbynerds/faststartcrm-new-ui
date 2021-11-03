<?php

namespace App\Http\Controllers;

use Spatie\Activitylog\Models\Activity;
use Illuminate\Http\Request;

class HelperController extends Controller
{
    // show all activities from activityLog 
    public function activityLog(){
        $logs = Activity::orderBy('id', 'DESC')->get();
        return view('activity_log.log_list', compact('logs'));
        
  }
  
  // user role wise notification list
      public function notification(){
        return view('notifications.notification_list');
   }
}
