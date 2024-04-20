<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\UserController;

Auth::routes();

Route::group(['as' => 'web.'], function () {
    Route::get('/', [WebsiteController::class, 'index'])->name('home');
});

Route::group(['as' => 'user.', 'prefix' => 'user', 'middleware' => ['auth:web']], function () {
    Route::get('/', [UserController::class, 'home'])->name('home');
    Route::post('link-store', [UserController::class, 'linkStore'])->name('linkStore');
    Route::get('link-delete/{link_id}', [UserController::class, 'linkDelete'])->name('linkDelete');
});


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
