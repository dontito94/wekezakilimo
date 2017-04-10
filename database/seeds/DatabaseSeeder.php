<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{


	      factory(App\User::class, 10)->create();
	       factory(App\AgriculturalOfficer::class, 10)->create();
	        factory(App\AgriculturalRetailer::class, 10)->create();
	        factory(App\Farmer::class, 10)->create();
	       factory(App\FarmInputSupplier::class, 10)->create();



    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    }
}
