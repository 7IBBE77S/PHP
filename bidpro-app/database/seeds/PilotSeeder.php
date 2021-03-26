<?php

use Illuminate\Database\Seeder;

class PilotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pilot = new \App\Pilot([
            'firstName'=>'Nic',
            'lastName'=>'Tibbetts',
            'email'=>'nictibbs97@live.com',
            'fleet'=>'737',
            'seat'=>'CPT',
            'domicile'=>'GEG',
            
                
                    ]);
                    $pilot->save();
                   
    }
}
