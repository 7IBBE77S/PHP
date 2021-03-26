<?php

use Illuminate\Database\Seeder;

class BidTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bidType = new \App\BidType([
            'fleet'=>'737',
            'seat'=>'CPT',
            'domicile'=>'GEG',
            'status'=>0,
            'imported'=>now()
                
                    ]);
                    $bidType->save();
                    $bidType = new \App\BidType([
                        'fleet'=>'A30',
                        'seat'=>'FO',
                        'domicile'=>'LAS',
                        'status'=>0,
                        'imported'=>now()
                            
                                ]);
                                $bidType->save();

    }
}
