<?php

use App\Http\Controllers\Gms\MainController;
use App\Http\Controllers\Gms\Template\SocialController;
use App\Http\Controllers\gms\TemplateController;
use App\Http\Controllers\gms\TodoController;
use App\Http\Controllers\gms\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('index');


Route::group([
    'as' => 'users.',
    'prefix' => 'users',
], static function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/edit', [UserController::class, 'edit'])->name('edit');
    Route::put('/store', [UserController::class, 'store'])->name('store');
});

Route::group([
    'as' => 'todo.',
    'prefix' => 'todo',
], static function () {
    Route::get('/', [TodoController::class, 'index'])->name('index');
    Route::get('/edit', [TodoController::class, 'edit'])->name('edit');
    Route::put('/store', [TodoController::class, 'store'])->name('store');
});

Route::group([
    'as' => 'template.',
    'prefix' => 'template',
], static function () {
    Route::get('/', [TemplateController::class, 'index'])->name('index');
    // Social media
    Route::get('/social-media', [TemplateController::class, 'social'])->name('social');
    Route::put('/social-media/rename', [SocialController::class, 'rename'])->name('social_rename');
    Route::delete('/social-media/delete', [SocialController::class, 'delete'])->name('social_delete');
    Route::post('/social-media/upload', [SocialController::class, 'upload'])->name('social_upload');
});


