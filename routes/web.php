<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\TenderController;
use App\Http\Controllers\WelcomeController;
use App\Models\Ad;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/blog.php';

Route::get('/', [WelcomeController::class,'home_view'])->name('pages.welcome');

Route::get('/contact', [ContactController::class,'contact_view'])->name('pages.contact');
Route::post('/contact', [ContactController::class,'read_dat_and_send_email'])->name('create.contact');

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
    $ads = Ad::all();
    return view('pages.ads', compact('ads'));
})->name('pages.ads');

Route::get('/blueprint-catalog', function () {
    return view('pages.blueprint-catalog');
})->name('pages.blueprint-catalog');

Route::get('/arajanlat', function () {
    return view('pages.tender');
})->name('pages.tender');

Route::post('arajanlat',[TenderController::class, 'create_tender'])->name('tender.create');
