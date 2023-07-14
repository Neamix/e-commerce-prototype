<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::updateOrCreate([
            'id' => 1
        ],[
            'id'   => 1,
            'name' => 'normal'
        ]);

        Tag::updateOrCreate([
            'id' => 2
        ],[
            'id'   => 2,
            'name' => 'Best Selling'
        ]);

        Tag::updateOrCreate([
            'id' => 3
        ],[
            'id'   => 3,
            'name' => 'Most Viewed'
        ]);

        Tag::updateOrCreate([
            'id' => 4
        ],[
            'id'   => 4,
            'name' => 'Special Offer'
        ]);
    }
}
