<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('HomePage');
});
Route::get('/about', function () {
    return view('AboutPage');
});
Route::get('/contact', function () {
    return view('ContactPage');
});
Route::get('/contact', function () {
    return view('home');
});
