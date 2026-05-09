<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'es_admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return "Bienvenido, Administrador CARLOS CORPUS";
    });
});
