<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ChatController;

// Root: auto-detect browser language, redirect to /en or /it
Route::get('/', function () {
    $preferred = request()->getPreferredLanguage(['en', 'it']);
    return redirect('/' . ($preferred ?: 'en'));
});

// Locale-prefixed routes
Route::prefix('{locale}')
    ->where(['locale' => 'en|it'])
    ->group(function () {
        Route::get('/',        fn () => view('home'));
        Route::post('/contact', [ContactController::class, 'store']);
        Route::post('/chat',    [ChatController::class, 'reply'])->middleware('throttle:15,1');
    });
