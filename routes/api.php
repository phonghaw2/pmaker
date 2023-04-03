<?php

use App\Http\Controllers\Gms\ApiController;
use App\Http\Controllers\Step\ApiStepController;
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


Route::get('/gms', [ApiController::class, 'index']);
Route::prefix('/gms')->group( function () {
    Route::post('/store', [ApiController::class, 'store']);
    Route::put('/{id}', [ApiController::class, 'update']);
    Route::delete('/{id}', [ApiController::class, 'destroy']);
});

Route::get('/check-social', [ApiController::class, 'check_exist_social'])->name('check_exist_social');

Route::get('/render-social', [ApiStepController::class, 'renderSocialField'])->name('render_social_field');
Route::post('/step/render-certification', [ApiStepController::class, 'insertCertification'])->name('insert_certification');
Route::post('/step/render-experience', [ApiStepController::class, 'insertExperience'])->name('insert_experience');
