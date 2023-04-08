<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Common;
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
Route::get('/demo', function () {
    return view('demo');
});
Route::get('/site/{name}', function () {
    return view('demo');
});
Route::get('users/{name}', [Common::class, 'index'])->name('user.index');
