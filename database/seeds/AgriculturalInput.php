<?php

use Illuminate\Database\Seeder;

class AgriculturalInputTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $AgriculturalInput = new \App\AgriculturaInput([
            'imagePath'=>'image/k18.jpg',
            'title'=>'mchele',
            'price'=>2000
        ]);

        $AgriculturalInput->save();

        $AgriculturalInput = new \App\AgriculturaInput([
            'imagePath'=>'image/k18.jpg',
            'title'=>'mchele',
            'price'=>2000
        ]);

        $AgriculturalInput->save();
        $AgriculturalInput = new \App\AgriculturaInput([
            'imagePath'=>'image/k18.jpg',
            'title'=>'mchele',
            'price'=>2000
        ]);

        $AgriculturalInput->save();
    }
}
