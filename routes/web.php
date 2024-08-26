<?php

use App\Http\Controllers\GeminiAIController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'search'], function() {
    Route::get('/', [UserController::class, 'searchUser']);
    Route::get('/{id}', [UserController::class, 'findUser']);
});

Route::get('/gemini', function() {
    return view('gemini');
});
Route::post('/gemini', [GeminiAIController::class, 'handleChat']);