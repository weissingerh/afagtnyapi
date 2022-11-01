<?php

namespace App\Http\Controllers;

use App\Http\Requests\FetchWordsByCategory;
use App\Models\Category;
use App\Models\Word;
use Illuminate\Support\Facades\Log;

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

    public function words(FetchWordsByCategory $request)
    {
        $words = Word::whereRelation('category', 'name', $request->category)->get();

        Log::info('Word by category accessed', ['category' => $request->category]);

        return response()->json($words);
    }
}
