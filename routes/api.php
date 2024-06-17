<?php

use App\Http\Controllers\LectureController;
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

Route::get('/lectures', [LectureController::class, 'index']);
Route::post('/lectures', [LectureController::class, 'store']);
Route::get('/lectures{id}', [LectureController::class, 'show']);
Route::put('/lectures{id}', [LectureController::class, 'update']);
Route::delete('/lectures{id}', [LectureController::class, 'destroy']);