<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::updateOrCreate([
            'id' => 1
        ],[
            'id'   => 1,
            'name' => 'Category 1'
        ]);

        Category::updateOrCreate([
            'id' => 2
        ],[
            'id'   => 2,
            'name' => 'Category 2'
        ]);

        Category::updateOrCreate([
            'id' => 3
        ],[
            'id'   => 3,
            'name' => 'Category 3'
        ]);

        Category::updateOrCreate([
            'id' => 4
        ],[
            'id'   => 4,
            'name' => 'Category 4'
        ]);

        Category::updateOrCreate([
            'id' => 5
        ],[
            'id'   => 5,
            'name' => 'Category 5'
        ]);

        Category::updateOrCreate([
            'id' => 6
        ],[
            'id'   => 6,
            'name' => 'Category 6'
        ]);

        Category::updateOrCreate([
            'id' => 7
        ],[
            'id'   => 7,
            'name' => 'Category 7'
        ]);

        Category::updateOrCreate([
            'id' => 1
        ],[
            'id'   => 1,
            'name' => 'Category 1'
        ]);

        Category::updateOrCreate([
            'id' => 1
        ],[
            'id'   => 1,
            'name' => 'Category 1'
        ]);

        Category::updateOrCreate([
            'id' => 1
        ],[
            'id'   => 1,
            'name' => 'Category 1'
        ]);

        Category::updateOrCreate([
            'id' => 1
        ],[
            'id'   => 1,
            'name' => 'Category 1'
        ]);
    }
}
