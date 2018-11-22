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
        //factory(App\company::class, 50)->create();
    	factory(App\order::class, 50)->create();
    }
}
