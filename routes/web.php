<?php

use Illuminate\Support\Facades\Route;

// Single-page portfolio view (main entry point)
Route::get('/', function () {
    return view('portfolio');
});

// Keep individual routes for direct URL access (SEO/bookmarks)
// These redirect to the single-page view with hash anchors
Route::get('/projects', function () {
    return redirect('/#projects');
});

Route::get('/about', function () {
    return redirect('/#about');
});

Route::get('/contact', function () {
    return redirect('/#contact');
});

Route::get('/cv', function () {
    return redirect('/#cv');
});

Route::get('/experience', function () {
    return redirect('/#experience');
});