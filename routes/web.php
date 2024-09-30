<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Home;
use App\Livewire\AboutMe;
use App\Livewire\Projects;

Route::get('/', Home::class)->name('home');
Route::get('aboutme', AboutMe::class)->name('aboutme');
Route::get('projects', Projects::class)->name('projects');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
