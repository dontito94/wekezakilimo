<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



    	
        $role_user = new Role();
        $role_user->name='user';
        $role_user->description='a normal user';
        $role_user->save();

        $role_farmer = new Role();
        $role_farmer->name='farmer';
        $role_farmer->description='a farmer user';
        $role_farmer->save();

        $role_agriculturalOfficer = new Role();
        $role_agriculturalOfficer->name='agriculturalOfficer';
        $role_agriculturalOfficer->description='a agriculturalOfficer user';
        $role_agriculturalOfficer->save();

        $role_FarmInputSupplier = new Role();
        $role_FarmInputSupplier->name='FarmInputSupplier';
        $role_FarmInputSupplier->description='a FarmInputSupplier';
        $role_FarmInputSupplier->save();

        $role_AgriculturalRetailer= new Role();
        $role_AgriculturalRetailer->name='AgriculturalRetailer';
        $role_AgriculturalRetailer->description='a AgriculturalRetailer';
        $role_AgriculturalRetailer->save();
    }
}
