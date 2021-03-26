<?php

use Illuminate\Database\Seeder;

class MathAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $calc = new \App\MathApp([
            'firstNumber'=>31,
            'operator'=>'/',
            'secondNumber'=>7,

            ]);
            $calc->save();
            $calc = new \App\MathApp([
                'firstNumber'=>342.4,
                'operator'=>'+',
                'secondNumber'=>99,
    
                ]);
                $calc->save();
                $calc = new \App\MathApp([
                    'firstNumber'=>0,
                    'operator'=>'-',
                    'secondNumber'=>88,
        
                    ]);
                    $calc->save();
                    $calc = new \App\MathApp([
                        'firstNumber'=>11,
                        'operator'=>'*',
                        'secondNumber'=>333,
            
                        ]);
                        $calc->save();
    }
}
