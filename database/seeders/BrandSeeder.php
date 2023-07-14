<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::updateOrCreate([
            'id' => 1,
        ],[
            'id'   => 1,
            'name' => 'Brand 1',
            'image' => 'brand_1.png'
        ]);

        Brand::updateOrCreate([
            'id' => 2,
        ],[
            'id'   => 2,
            'name' => 'Brand 2',
            'image' => 'brand_1.png'
        ]);

        Brand::updateOrCreate([
            'id' => 3,
        ],[
            'id'   => 3,
            'name' => 'Brand 3',
            'image' => 'brand_3.png'
        ]);

        Brand::updateOrCreate([
            'id' => 4,
        ],[
            'id'   => 4,
            'name' => 'Brand 4',
            'image' => 'brand_4.png'
        ]);

        Brand::updateOrCreate([
            'id' => 5,
        ],[
            'id'   => 5,
            'name' => 'Brand 5',
            'image' => 'brand_5.png'
        ]);

        Brand::updateOrCreate([
            'id' => 6,
        ],[
            'id'   => 6,
            'name' => 'Brand 6',
            'image' => 'brand_6.png'
        ]);
        
        Brand::updateOrCreate([
            'id' => 7,
        ],[
            'id'   => 7,
            'name' => 'Brand 7',
            'image' => 'brand_7.png'
        ]);

        Brand::updateOrCreate([
            'id' => 8,
        ],[
            'id'   => 8,
            'name' => 'Brand 8',
            'image' => 'brand_8.png'
        ]);
    }
}
