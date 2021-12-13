<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;


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

Route::get('/cats', function () {
    
    return view('cats', ['name' => 'Musse', 'illness' => 'PTSD']);
});



Route::get('/lamp', [WebController::class, 'lampor']);

Route::get('/index', [WebController::class, 'index']);
Route::get('/bordslampa', [WebController::class, 'bordslampa']);
Route::get('/taklampa', [WebController::class, 'taklampa']);
Route::get('/golvlampa', [WebController::class, 'golvlampa']);