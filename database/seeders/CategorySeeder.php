<?php

namespace Database\Seeders;

use App\Models\Category;
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
        $data = [
            ['name' => 'animal', 'is_public' => true],
            ['name' => 'country', 'is_public' => true],
            ['name' => 'location', 'is_public' => true],
            ['name' => 'clothing', 'is_public' => true],
            ['name' => 'family', 'is_public' => true],
            ['name' => 'food', 'is_public' => true],
            ['name' => 'instrument', 'is_public' => true],
            ['name' => 'mythology', 'is_public' => true],
            ['name' => 'pop culture', 'is_public' => true],
            ['name' => 'profession', 'is_public' => true],
            ['name' => 'sports', 'is_public' => true],
            ['name' => 'vehicle', 'is_public' => true],
            ['name' => 'weapon', 'is_public' => true],
        ];
        Category::insert($data);
    }
}
