<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::updateOrCreate([
            'id' => 1
        ],[
            'id' => 1,
            'title' => 'Product 1',
            'description' => 'description',
            'price' => 100,
            'category_id' => 1,
            'brand_id' => 1,
            'tag_id' => 4,
            'view_count' => 1000
        ]);

        Product::updateOrCreate([
            'id' => 2
        ],[
            'id' => 2,
            'title' => 'Product 2',
            'description' => 'description',
            'price' => 100,
            'category_id' => 1,
            'brand_id' => 1,
            'tag_id' => 4,
            'view_count' => 100
        ]);

        Product::updateOrCreate([
            'id' => 3
        ],[
            'id' => 3,
            'title' => 'Product 3',
            'description' => 'description',
            'price' => 100,
            'category_id' => 1,
            'brand_id' => 1,
            'tag_id' => 4,
            'view_count' => 200
        ]);

        Product::updateOrCreate([
            'id' => 4
        ],[
            'id' => 4,
            'title' => 'Product 4',
            'description' => 'description',
            'price' => 100,
            'category_id' => 1,
            'brand_id' => 2,
            'tag_id' => 4,
            'view_count' => 2200
        ]);

        Product::updateOrCreate([
            'id' => 5
        ],[
            'id' => 5,
            'title' => 'Product 5',
            'description' => 'description',
            'price' => 100,
            'category_id' => 2,
            'brand_id' => 2,
            'tag_id' => 4,
            'view_count' => 1200
        ]);

        Product::updateOrCreate([
            'id' => 6
        ],[
            'id' => 6,
            'title' => 'Product 6',
            'description' => 'description',
            'price' => 100,
            'category_id' => 3,
            'brand_id' => 2,
            'tag_id' => 3,
            'view_count' => 300
        ]);

        Product::updateOrCreate([
            'id' => 8
        ],[
            'id' => 8,
            'title' => 'Product 8',
            'description' => 'description',
            'price' => 100,
            'category_id' => 3,
            'brand_id' => 3,
            'tag_id' => 3,
            'view_count' => 1200
        ]);

        Product::updateOrCreate([
            'id' => 9
        ],[
            'id' => 9,
            'title' => 'Product 9',
            'description' => 'description',
            'price' => 100,
            'category_id' => 4,
            'brand_id' => 3,
            'tag_id' => 3,
            'view_count' => 2300
        ]);

        Product::updateOrCreate([
            'id' => 10
        ],[
            'id' => 10,
            'title' => 'Product 10',
            'description' => 'description',
            'price' => 100,
            'category_id' => 4,
            'brand_id' => 3,
            'tag_id' => 3,
            'view_count' => 2300
        ]);

        Product::updateOrCreate([
            'id' => 11
        ],[
            'id' => 11,
            'title' => 'Product 11',
            'description' => 'description',
            'price' => 100,
            'category_id' => 4,
            'brand_id' => 4,
            'tag_id' => 3,
            'view_count' => 2120
        ]);

        Product::updateOrCreate([
            'id' => 12
        ],[
            'id' => 12,
            'title' => 'Product 12',
            'description' => 'description',
            'price' => 100,
            'category_id' => 4,
            'brand_id' => 4,
            'tag_id' => 3,
            'view_count' => 100
        ]);

        Product::updateOrCreate([
            'id' => 13
        ],[
            'id' => 13,
            'title' => 'Product 13',
            'description' => 'description',
            'price' => 100,
            'category_id' => 4,
            'brand_id' => 4,
            'tag_id' => 1,
            'tag_id' => 2,
            'view_count' => 1200
        ]);

        Product::updateOrCreate([
            'id' => 14
        ],[
            'id' => 14,
            'title' => 'Product 14',
            'description' => 'description',
            'price' => 100,
            'category_id' => 4,
            'brand_id' => 5,
            'tag_id' => 2,
            'view_count' => 2300
        ]);

        Product::updateOrCreate([
            'id' => 15
        ],[
            'id' => 15,
            'title' => 'Product 15',
            'description' => 'description',
            'price' => 100,
            'category_id' => 4,
            'brand_id' => 5,
            'tag_id' => 2,
            'view_count' => 200
        ]);

        Product::updateOrCreate([
            'id' => 16
        ],[
            'id' => 16,
            'title' => 'Product 16',
            'description' => 'description',
            'price' => 100,
            'category_id' => 4,
            'brand_id' => 5,
            'tag_id' => 2,
            'view_count' => 200
        ]);

        Product::updateOrCreate([
            'id' => 17
        ],[
            'id' => 17,
            'title' => 'Product 17',
            'description' => 'description',
            'price' => 100,
            'category_id' => 4,
            'brand_id' => 5,
            'tag_id' => 2,
            'view_count' => 200
        ]);

    }
}
