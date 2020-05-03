<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Globals extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('globals')->insert([
            'fb_ads_pixel' => '',
            'google_analytics_tag' => '',
            'contact_email' => '',
        ]);
    }
}
