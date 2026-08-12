<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ChatController;

Route::get('/', function () {
    return view('home');
});

Route::post('/contact', [ContactController::class, 'store']);
Route::post('/chat', [ChatController::class, 'reply'])->middleware('throttle:15,1');

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'it'])) {
        session(['locale' => $locale]);
    }
    return redirect('/');
})->where('locale', 'en|it');