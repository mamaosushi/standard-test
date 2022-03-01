<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', [ContactController::class,'index'])->name('form.index');
Route::post('/confirm', [ContactController::class,'confirm'])->name('form.confirm');
Route::post('/complete', [ContactController::class,'complete'])->name('form.complete');
Route::get('/find', [ContactController::class, 'find']);
Route::post('/find', [ContactController::class, 'search']);
