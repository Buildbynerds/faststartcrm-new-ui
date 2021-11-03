<?php 
namespace App\Helpers;

use App\Aggregator;
use App\Cooks;
use App\School;
use App\User;
use Carbon\Carbon;

class StaticData{
    public static function sevenDays(){
         $days = array(
              'Sunday' => 'Sunday',
              'Monday' => 'Monday',
              'Tuesday' => 'Tuesday',
              'Wednesday' => 'Wednesday',
              'Thursday' => 'Thursday',
              'Friday' => 'Friday',
              'Saturday' => 'Saturday',
         );
         return $days;
    }

//     account status
  public static function account_status(){
           $profile_status = array(
            'Pending' => 'Pending',
             'Approved' => 'Approved', 
             'Cancel' => 'Cancel'
           );
      return $profile_status;
      }

//  account authenticate expire days
   public static function profile_expire(){
      $today = Carbon::now();
      $_7days = $today->addDays(7)->toDateString();
      $_14days = $today->addDays(14)->toDateString();
      $_30days = $today->addDays(30)->toDateString();
      $_60days = $today->addDays(60)->toDateString();
      $_90days = $today->addDays(90)->toDateString();
      $_180days = $today->addDays(180)->toDateString();
             $expire_profile = array(
                    $_7days  => '7 days',
                    $_14days => '14 days',
                    $_30days => '30 days',
                    $_60days => '2 months',
                    $_90days => '3 months',
                    $_180days => '6 months',
             );

             return $expire_profile;
       } 
}