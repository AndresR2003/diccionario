<?php
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/inicio', function () {
    return Inertia::render('Inicio', [
        'nombre' => 'Andres Rivera'
    ]);
});

Route::get('/admin', function () {
    return Inertia::render('admin');
});