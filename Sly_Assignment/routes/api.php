<?php

use App\Http\Controllers\MallController;
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


Route::get('malls',[MallController::class,'index']);
Route::post('malls',[MallController::class,'store']);
Route::get('malls/{id}',[MallController::class,'show']);
Route::put('malls/{id}',[MallController::class,'update']);
Route::delete('malls/{id}',[MallController::class,'destroy']);
