<?php

use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $this->call(MazaoTableSeeder::class);
        $this->call(AgriculturalInputTableSeeder::class);


    }
}
