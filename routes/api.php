<?php

use App\Http\Controllers\mapsController;
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

Route::group(['prefix' => 'maps'], function ($router) {
    Route::delete('deleteMarker', [mapsController::class, 'deleteMarker']);
    Route::get('getMarkerById', [mapsController::class, 'getMarkerById']);
    Route::post('editMarker', [mapsController::class, 'editMarker']);
    Route::post('addMarker', [mapsController::class, 'addMarker']);
    Route::get('getMarker', [mapsController::class, 'getMarker']);
});
