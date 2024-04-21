<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserAuthCheck;
use App\Http\Middleware\AdminAuthCheck;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Auth::routes();

Route::group(['as' => 'web.'], function () {
    Route::get('/', [WebsiteController::class, 'index'])->name('home');
    Route::get('/{username}', [WebsiteController::class, 'user'])->name('user');
});

Route::group(['as' => 'user.', 'prefix' => 'user', 'middleware' => ['auth:web', UserAuthCheck::class]], function () {
    Route::get('home', [UserController::class, 'home'])->name('home');
    Route::post('link-store', [UserController::class, 'linkStore'])->name('linkStore');
    Route::get('link-delete/{link_id}', [UserController::class, 'linkDelete'])->name('linkDelete');
});

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth:web', AdminAuthCheck::class]], function () {
    Route::get('home', [AdminController::class, 'home'])->name('home');
    Route::post('link-store', [AdminController::class, 'linkStore'])->name('linkStore');
});

