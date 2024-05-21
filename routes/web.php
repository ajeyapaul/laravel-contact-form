<?php

use Illuminate\Support\Facades\Route;

Route::get('/contact', function () {
    return view('laravel-contact-form::contact');
});
