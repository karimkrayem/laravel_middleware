<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\UserController;
use App\Models\Article;
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
Route::get('/fullarticle/{id}', [ArticleController::class, 'show']);
Route::put('/article/update/{id}', [ArticleController::class, 'update']);
Route::get('/article/edit/{id}', [ArticleController::class, 'edit']);
Route::get('/backoff', [BackofficeController::class, 'index'])->name('backoff');
Route::get('/newarticle', [ArticleController::class, 'create'])->name('newarticle');
Route::post('/newarticle/store/', [ArticleController::class, 'store']);

Route::delete('/article/delete/{id}', [ArticleController::class, 'destroy']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('isConnected')->name('dashboard');

Route::get('/admin', [UserController::class, 'index'])->middleware('isAdmin');

require __DIR__ . '/auth.php';
