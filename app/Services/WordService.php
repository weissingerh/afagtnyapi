<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Word;

class WordService
{
    public function createWord(string $name, string $categoryName): Word
    {
        $category = Category::firstOrCreate(['name' => $categoryName]);

        return Word::firstOrCreate(['name' => $name], ['category_id' => $category->id]);
    }
}
