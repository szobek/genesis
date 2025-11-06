<?php

use App\Models\Ad;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $ads=Ad::all()->toArray();
$components=[['image'=>asset('storage/images/components/ablak-247x278.jpg')],['image'=>asset('storage/images/components/Kep28-247x296.png')]];

    return view('pages/welcome',['ads'=>$ads,'components'=>$components ]);
})->name('pages.welcome');

Route::get('/contact', function () {
    Mail::to("kunszt.norbert@gmail.com")->send(new \App\Mail\Contact());
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
