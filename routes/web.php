<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DailyQuizController;
use App\Http\Controllers\ThemeController;
use App\Livewire\DailyQuiz;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dailyquiz', [ThemeController::class, 'showTheme'])->name('dailyquiz.theme');
Route::get('/dailyquiz/{theme}', DailyQuiz::class)->name('dailyquiz.show');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->group(function () 
    {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    }
);
