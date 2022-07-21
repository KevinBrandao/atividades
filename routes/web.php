<?php

use App\Http\Controllers\ComController;
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



Route::get('/c', [ComController::class, 'dbz']);


// Route::post('/pokemon/{nome}', function () {
//         return view('pokemon');
// });

// Route::get('/', function () {
//         return view('index');
// });
// Route::get('/act', function () {
//     return view('index');
// });
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/act', function () {
//     return view('welcome1');
// });
