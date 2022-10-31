<?php

namespace App\Http\Controllers;

use App\Models\Word;

class WordController extends Controller
{
    public function index()
    {
        return response()->json(Word::wherePublic()->get());
    }

    public function random()
    {
        return response()->json(Word::all()->random(1));
    }

    public function create(Word $word)
    {
    }

    public function destroy(Word $word)
    {
        $word->delete();

        return response($word->name.' deleted');
    }
}
