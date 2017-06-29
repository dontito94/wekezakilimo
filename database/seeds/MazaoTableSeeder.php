<?php

use Illuminate\Database\Seeder;

class MazaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath'=>'image/k10.jpg',
            'title'=>'mchele',
            'description'=>'mchele mzuri toka mbeya',
            'price'=>2000
        ]);
        $product = new \App\Product([
            'imagePath'=>'image/k10.jpg',
            'title'=>'mchele',
            'description'=>'mchele mzuri toka mbeya',
            'price'=>2000
        ]);
        $product = new \App\Product([
            'imagePath'=>'image/k10.jpg',
            'title'=>'mchele',
            'description'=>'mchele mzuri toka mbeya',
            'price'=>2000
        ]);

    }
}
