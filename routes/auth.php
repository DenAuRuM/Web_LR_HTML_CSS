<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UnauthorizedController;
use App\Http\Controllers\Auth\AuthorizedController;
use App\Http\Controllers\StaticPageController;

Route::get('/login.do', [UnauthorizedController::class, 'login_do'])->name('auth.login.do');

Route::middleware('guest')->group(function(){
    Route::view('/register', 'auth.register')->name('auth.register');
    Route::post('/register.do', [UnauthorizedController::class, 'register_do'])->name('auth.register.do');
    Route::view('/','auth.message', ['message' => 'auth_required']) -> name('login');
});

Route::middleware('auth', 'permission:profile.actions')->group(function(){
    Route::view('/profile', 'auth.profile')->name('auth.profile');
    Route::post('/profile.update', [AuthorizedController::class, 'profile_update'])->name('auth.profile.update');
    Route::get('/logout', [AuthorizedController::class, 'logout'])->name('auth.logout');
});

Route::view('/register_done', 'auth.register_done')->name('auth.register.done');
/*
seo.static_page.show
seo.static_page.edit
seo.static_page.create
seo.static_page.delete*/


/*
login.do

register.do 
register

profile
profile.update*/