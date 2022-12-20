<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPageController;

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
Route::get('/login', function () {
    return view('welcome');
})->name('login');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/static-pages', function () {
    return view('edit',['pages'=>\App\Models\StaticPage::all()]);
})->middleware("auth");

Route::post('/create_static_page', [StaticPageController::class, 'create_static_page']);

Route::get('/s/{pageid}', [StaticPageController::class, 'show'])->name('static_page');

Route::redirect('/', '/s/MainPage');

require_once(__DIR__. '/auth.php');
require_once(__DIR__. '/shop.php');

/*
id userid permission

users

*/
