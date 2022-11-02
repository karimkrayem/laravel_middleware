<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BackofficeController;
use Database\Seeders\ArticleSeeder;
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
    return view('welcome');
});

Route::get('/article', [ArticleController::class, 'index']);

Route::get('/backoff', [BackofficeController::class, 'index']);
Route::get('/newarticle', [ArticleController::class, 'create'])->name('newarticle');
Route::post('/newarticle/store/', [ArticleController::class, 'store']);

Route::delete('/article/delete/{id}', [ArticleController::class, 'destroy']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('isConnected')->name('dashboard');

require __DIR__ . '/auth.php';
