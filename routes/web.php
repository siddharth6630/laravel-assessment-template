<?php

use App\Models\Actor;
use App\Http\Controllers\SearchController;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('list', function () {
    $actors = Actor::with('movies')->get();
    return view('actors.index', compact('actors'));
})->name('list');

Route::get('filter', function () {
    $filter = trim(request('filter'));
    
    $actors = Actor::with('movies')
        ->when($filter, function ($query) use ($filter) {
            $query->where('actor_name', 'like', '%' . $filter . '%');
        })
        ->get();

    return view('actors.filter', compact('actors'));
})->name('filter');

Route::get('/search-people', [SearchController::class, 'index']);
Route::post('/search-people', [SearchController::class, 'search'])->name('search-people');
