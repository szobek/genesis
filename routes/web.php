<?php

use App\Models\Ad;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/welcome');
})->name('pages.welcome');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('pages.contact');

Route::get('/about', function () {
    return view('pages.about');
})->name('pages.about');


Route::get('/genesis-houses', function () {
    return view('pages.genesis-houses');
})->name('pages.genesis-houses');

Route::get('/components', function () {
    return view('pages.components');
})->name('pages.components');

Route::get('/ads', function () {
    $ads=Ad::all();
    return view('pages.ads', compact('ads'));
})->name('pages.ads');

Route::get('/blueprint-catalog', function () {
    return view('pages.blueprint-catalog');
})->name('pages.blueprint-catalog');
