<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';

    protected $fillable = [
            'website_title',
            'sidebar_title',
            'company_address',
            'email',
            'phone',
            'mobile',
            'fav_icon',
            'logo',
            'footer_text',
            'current_version',
    ];

    public function getLogoAttribute($value)
    {
         if($value){
            return asset('uploads/'. $value);
         }else{
              return asset('uploads/772180921011952.png');
         }
    }

    public function getFavIconAttribute($value)
    {
         if($value){
            return asset('uploads/'. $value);
         }else{
              return asset('uploads/42180921012024.png');
         }
    }
}
