<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserAuthCheck;
use App\Http\Middleware\AdminAuthCheck;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Auth::routes();


Route::get('email-test', function () {
    $email_data = [
        'name' => 'Mr. Test',
        'email' => 'test@test.com',
    ];

    Mail::send('emails.test', compact('email_data'), function ($message) {
        $message->to('rony.mmj@gmail.com')->subject('This is test email')->from('saylzfkp@saylance.com');
    });
});


Route::group(['as' => 'web.'], function () {
    Route::get('/', [WebsiteController::class, 'index'])->name('home');
    Route::get('/{username}', [WebsiteController::class, 'user'])->name('user');
    Route::post('budget-store', [WebsiteController::class, 'budgetStore'])->name('budgetStore');
});

Route::group(['as' => 'user.', 'prefix' => 'user', 'middleware' => ['auth:web', UserAuthCheck::class]], function () {
    Route::get('home', [UserController::class, 'home'])->name('home');
    Route::post('link-store', [UserController::class, 'linkStore'])->name('linkStore');
    Route::get('link-delete/{link_id}', [UserController::class, 'linkDelete'])->name('linkDelete');
});

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth:web', AdminAuthCheck::class]], function () {
    Route::get('home', [AdminController::class, 'home'])->name('home');
    Route::get('links', [AdminController::class, 'links'])->name('links');
    Route::post('link-store', [AdminController::class, 'linkStore'])->name('linkStore');
    Route::get('link/{link_id}', [AdminController::class, 'linkEdit'])->name('linkEdit');
    Route::post('link/{link_id}/update', [AdminController::class, 'linkUpdate'])->name('linkUpdate');
    Route::get('link/{link_id}/delete', [AdminController::class, 'linkDelete'])->name('linkDelete');

    Route::get('users', [AdminController::class, 'users'])->name('users');
    Route::get('budgets', [AdminController::class, 'budgets'])->name('budgets');


});

Route::group(['as' => 'cache.', 'prefix' => 'cache'], function () {
    Route::get('/clear', function () {
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        Artisan::call('config:cache');
        Artisan::call('optimize:clear');
        Artisan::call('storage:link');
        dd('All Cleared...');
    });
});
