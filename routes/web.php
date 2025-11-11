<?php

use App\Http\Controllers\TenderController;
use App\Models\Ad;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/blog.php';

Route::get('/', function () {
    $ads = Ad::select('short')->get()->pluck("short")->toArray();
    $index = 0;
    foreach ($ads as $ad) {
        $adsarray[$index++] = ["description" => strip_tags($ad)];
    }
    $components = [['image' => asset('assets/images/components/ablak-247x278.jpg')], ['image' => asset('assets/images/components/Kep28-247x296.png')]];

    return view('pages/welcome', ['ads' => $adsarray, 'components' => $components]);
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
