<?php

use App\Http\Controllers\Article\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard\PortfolioController;
use App\Http\Controllers\Dashboard\SeriesController;
use App\Http\Controllers\Dashboard\TagMultiLinkController;
use App\Http\Controllers\DashboardController;
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

// Executed when no other routes match
Route::fallback(function () {
    // page not found
    abort(404);
});


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/main', [HomeController::class, 'main'])->name('main');

Route::get('/demo', [HomeController::class, 'demo'])->name('demo');
Route::get('/editor/{type}?', [HomeController::class, 'editor'])->name('editor');
Route::get('/test', [HomeController::class, 'test'])->name('test');


Route::group([
    'as' => 'account.',
    'prefix' => 'account',
    'middleware' => 'alreadyLoggedIn',
], static function () {
    Route::get('/recover', [AuthController::class, 'recover'])->name('recover');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login-action', [AuthController::class, 'loginAction'])->name('login_action');
    Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
    Route::post('/signup-action', [AuthController::class, 'signupAction'])->name('signup_action');
    Route::get('/logout-action', [AuthController::class, 'logoutAction'])->name('logout_action')->withoutMiddleware(['alreadyLoggedIn']);;
});

Route::group([
    'as' => 'step.',
    'prefix' => 'main',
    'middleware' => 'hasLogged',
], static function () {
    // FULL MAIN STEP TO CREATE PAGE
    Route::get('/', [StepController::class, 'guide'])->name('guide');
    Route::get('/step-1', [StepController::class, 'step1'])->name('step_1');
    Route::match(['get', 'post'], '/step-2', [StepController::class, 'step2'])->name('step_2');
    Route::match(['get', 'post'], '/step-3', [StepController::class, 'step3'])->name('step_3');
    Route::match(['get', 'post'], '/step-4', [StepController::class, 'step4'])->name('step_4');
    Route::match(['get', 'post'], '/step-5', [StepController::class, 'step5'])->name('step_5');
});

Route::get('/main/api/test', [HomeController::class, 'check'])->name('check');

Route::get('/main/preview', [HomeController::class, 'preview'])->name('preview');


Route::group([
    'as' => 'article.',
    'prefix' => 'article',
], static function () {
    Route::get('/draft', [ArticleController::class, 'draft'])->name('draft');
});

// DASHBOARD
Route::group([
    'as' => 'dashboard.',
    'prefix' => 'dashboard',
    'middleware' => 'hasLogged',
], static function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('/appearance', [DashboardController::class, 'appearance'])->name('appearance');
    Route::get('/navbar', [DashboardController::class, 'navbar'])->name('navbar');
    Route::get('/article', [DashboardController::class, 'article'])->name('article');
    // Series
    Route::get('/series', [DashboardController::class, 'series'])->name('series');
    Route::get('/series/create', [SeriesController::class, 'create'])->name('create-series');
    Route::post('/series/store', [SeriesController::class, 'store'])->name('store-series');
    Route::delete('/series/delete/{seriesId}', [SeriesController::class, 'destroy'])->name('delete-series');
    // Page
    Route::get('/pages', [DashboardController::class, 'pages'])->name('pages');
    // Tag & multi link
    Route::get('/tag-multi-link', [DashboardController::class, 'tagMultiLink'])->name('tag-multi-link');
    Route::get('/tags/create', [TagMultiLinkController::class, 'create'])->name('create-tag-multi-link');
    Route::get('/tags/store', [TagMultiLinkController::class, 'store'])->name('store-tag-multi-link');
    Route::get('/tag/delete', [TagMultiLinkController::class, 'destroy'])->name('delete-tag');
});

Route::get('{user-code}/series/{series-slug}', [SeriesController::class, 'pageSeries'])->name('page-series');

// DASHBOARD-PORTFOLIO
Route::group([
    'as' => 'dashboard.portfolio.',
    'prefix' => 'dashboard/portfolio',
    'middleware' => 'hasLogged',
], static function () {
    Route::get('/', [PortfolioController::class, 'index'])->name('index');
    Route::get('/links', [PortfolioController::class, 'links'])->name('links');
    Route::get('/information', [PortfolioController::class, 'information'])->name('information');
});
