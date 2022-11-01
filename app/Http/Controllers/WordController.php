<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWordRequest;
use App\Models\Word;
use App\Services\WordService;
use Illuminate\Support\Facades\Log;

class WordController extends Controller
{
    public function index()
    {
        Log::info('All words accessed');

        return response()->json(Word::wherePublic()->get());
    }

    public function random()
    {
        Log::info('Random word accessed');

        return response()->json(Word::all()->random(1));
    }

    public function create(CreateWordRequest $request)
    {
        $word = (new WordService)->createWord($request->name, $request->category);

        Log::info('Word created', ['id' => $word->id, 'name' => $word->name]);

        return response()->json($word);
    }

    public function destroy(Word $word)
    {
        Log::info('Word deleted', ['id' => $word->id, 'name' => $word->name]);

        $word->delete();

        return response($word->name.' deleted');
    }
}
