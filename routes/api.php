<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'words', 'name' => 'words'], function () {
    Route::get('/', [WordController::class, 'index'])->name('index');
    Route::get('/any', [WordController::class, 'random'])->name('any');
    Route::get('/random', [WordController::class, 'random'])->name('random');
});

Route::group(['prefix' => 'categories', 'name' => 'categories'], function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/any', [CategoryController::class, 'random'])->name('any');
    Route::get('/random', [CategoryController::class, 'random'])->name('random');
});

Route::get('category/{category}', [CategoryController::class, 'words'])->name('category.words');

Route::put('word/create', [WordController::class, 'create'])->name('word.create');
Route::delete('{word}/delete', [WordController::class, 'destroy'])->name('word.delete');
