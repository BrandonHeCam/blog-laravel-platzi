<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * Route::get       | Consultar
 * Route::post      | Guardar
 * Route::delete    | Eliminar
 * Route::put       | Actualizar
 */

Route::get('/', function () {
    return 'Ruta principal';
});

Route::get('blog', function () {
    return 'Lista de publicaciones';
});

Route::get('blog/{slug}', function ($slug) {
    // Consulta a la base de datos
    return $slug;
});

Route::get('buscar', function (Request $request) {
    // Petición HTTP
    return $request->all();
});
