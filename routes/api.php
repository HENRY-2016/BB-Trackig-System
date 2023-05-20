<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseApiController;
use App\Http\Controllers\BuildingsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/total/show/users/total',[BaseApiController::class,'TotalUsers']);
Route::get('/total/show/rooms/total',[BaseApiController::class,'TotalRooms']);
Route::get('/total/show/payments/total',[BaseApiController::class,'TotalPayments']);
Route::get('/total/show/buildings/total',[BaseApiController::class,'TotalBuildings']);

Route::post('/reports/with/filter',[BuildingsController::class,'indexData']);
