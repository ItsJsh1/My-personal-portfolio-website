<?php

use Illuminate\Support\Facades\Route;

// Single-page portfolio view (main entry point)
Route::get('/', function () {
    return view('portfolio');
});

// Download routes - forces browser to download instead of opening
Route::get('/download/cv', function () {
    $filePath = public_path('documents/cv.pdf');
    if (file_exists($filePath)) {
        return response()->download($filePath, 'Joshua_Vidal_CV.pdf', [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="Joshua_Vidal_CV.pdf"'
        ]);
    }
    abort(404);
});

Route::get('/download/photo', function () {
    $filePath = public_path('images/Vidal.png');
    if (file_exists($filePath)) {
        return response()->download($filePath, 'Joshua_Vidal_Photo.png', [
            'Content-Type' => 'image/png',
            'Content-Disposition' => 'attachment; filename="Joshua_Vidal_Photo.png"'
        ]);
    }
    abort(404);
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