<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\post;

use function Pest\Laravel\get;

Route::get('/', HomeController::class);

Route::resource('posts', PostController::class);

/* ->except(['destroy', 'edit']); */
/* ->only(['index', 'create', 'store']); */
/* ->parameters(['articulos' => 'post']) Cambiar el nombre de los parametros (las variables)
->names('posts'); */

/* Route::apiResource('posts', PostController::class); Genera las rutas decesarias para un Api (Sin create ni edit) */

//GET
//POST
//PUT (Actualizar)
//PATCH (Actualizar)
//DELETE

Route::get('prueba', function(){
    $post = post::find(2);

    dd($post -> is_active);
});
