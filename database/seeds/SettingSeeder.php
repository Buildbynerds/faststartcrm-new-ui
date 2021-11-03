<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting_input = [
                'website_title' => 'Laravel',
                'sidebar_title' => 'Laravel',
                'company_address' => 'Demo Address',
                'email' => 'example@gmail.com',
                'phone' => '0212456',
                'mobile' => '01600000000',
                'fav_icon' => '42180921012024.png',
                'logo' => '772180921011952.png',
                'footer_text' => 'Copyright © 2021 CompanyName',
                'current_version' => '1.0.0',
        ];

        Setting::create($setting_input);
    }
}
