<?php

use App\Http\Controllers\NftController;
use App\Http\Controllers\CollectionController;
use App\Models\Nft;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $validation = auth()->id();
    $nft = Nft::all();
    return view('index', [
        'validation' => $validation,
        'nft' => $nft,
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('collections', CollectionController::class);
Route::resource('nfts', NftController::class);



require __DIR__ . '/auth.php';
