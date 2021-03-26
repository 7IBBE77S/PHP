<?php

use Illuminate\Database\Seeder;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $website = new \App\Website([
            'name'=>'Plankcooking',
            'url'=>'https;//plankcooking.com'
        ]);
        $website->save();
    }
}
