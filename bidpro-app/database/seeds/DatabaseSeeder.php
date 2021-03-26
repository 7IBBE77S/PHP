<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BidTypeSeeder::class);
        $this->call(MathAppSeeder::class);
        $this->call(PilotSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
