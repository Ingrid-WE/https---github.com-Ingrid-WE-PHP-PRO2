<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\lampor;
use App\Http\Controllers\Lamporcontroller;


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

Route::get('lampor', [Lamporcontroller::class, 'getAllLampor']);
Route::get('lampor/{id}', [Lamporcontroller::class, 'getLampor']);
Route::post('lampor', [Lamporcontroller::class, 'createLampor']);
Route::put('lampor/{id}', [Lamporcontroller::class, 'updateLampor']);
Route::delete('lampor/{id}', [Lamporcontroller::class, 'deleteLampor']);






