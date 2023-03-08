<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Step\StepController;
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


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/main', [HomeController::class, 'main'])->name('main');

Route::get('/demo', [HomeController::class, 'demo'])->name('demo');
Route::get('/editor/{type}?', [HomeController::class, 'editor'])->name('editor');
Route::get('/test', [HomeController::class, 'test'])->name('test');


Route::group([
    'as' => 'account.',
    'prefix' => 'account',
], static function () {
    Route::get('/recover', [AuthController::class, 'recover'])->name('recover');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login_action', [AuthController::class, 'login_action'])->name('login_action');
    Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
    Route::post('/signup_action', [AuthController::class, 'signup_action'])->name('signup_action');
});

Route::group([
    'as' => 'step.',
    'prefix' => 'main',
], static function () {
    // FULL MAIN STEP TO CREATE PAGE
    Route::get('/', [StepController::class, 'guide'])->name('guide');
    Route::get('/step-1', [StepController::class, 'step_1'])->name('step_1');
    Route::get('/step-2', [StepController::class, 'step_2'])->name('step_2');
    Route::get('/step-3', [StepController::class, 'step_3'])->name('step_3');
    Route::get('/step-4', [StepController::class, 'step_4'])->name('step_4');
    Route::get('/step-5', [StepController::class, 'step_5'])->name('step_5');
    Route::post('/save', [StepController::class, 'step_save'])->name('save');
});

Route::get('/main/api/test', [HomeController::class, 'check'])->name('check');
