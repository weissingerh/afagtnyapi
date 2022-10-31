<?php

namespace App\Http\Controllers;

use App\Http\Requests\FetchWordsByCategory;
use App\Models\Category;
use App\Models\Word;

class CategoryController extends Controller
{
    public function index()
    {
        return response()->json(Category::all());
    }

    public function random()
    {
        return response()->json(Category::all()->random(1));
    }

    public function words(FetchWordsByCategory $request, string $category)
    {
        $words = Word::whereRelation('category', 'name', $category)->get();

        return response()->json($words);
    }
}
