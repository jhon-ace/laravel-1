<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/jandergwapo', function () {
//     return view("casabuena");
// });



Route::get('/albit', function (){
    return view('try');
});

Route::get('/home', function (){
    return view('laravel.index');
})->name('index');

Route::get('/gallery-ni-sya', function (){
    return view('laravel.gallery');
})->name('gallery');

Route::get('/service-ni-sya', function (){
    return view('laravel.service');
})->name('servicesAko');

Route::get('/about-ni-sya', function (){
    return view('laravel.about');
})->name('about');

Route::get('/calculator', function (){
    return view('laravel.calculator');
})->name('calculator');


















Route::get('/myhome', function () {
    return view('home');
})->name('gotohome');

//this code is page1
Route::get('/page1', function () {
    return view('page1');
})->name('gotopage1');







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
