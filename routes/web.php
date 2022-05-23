<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
Use App\Http\Controllers\ContactoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('home');
Route::view('nosotros', 'nosotros')->name('nosotros');

// grupo de rutas

Route::controller(CursoController::class)->group(function(){
    Route::get('cursos', 'index')->name('cursos.index');
    Route::get('cursos/create', 'create')->name('cursos.create');
    Route::post('cursos', 'store')->name('cursos.store');
    Route::get('cursos/{id}', 'show')->name('cursos.show');
    Route::get('cursos/{id}/edit', 'edit')->name('cursos.edit');
    Route::put('cursos/{course}', 'update')->name('cursos.update');
    Route::delete('cursos/{id}', 'destroy')->name('cursos.destroy');

    Route::get('contacto', [ContactoController::class, 'index'])->name('contacto.index');
    Route::post('contacto', [ContactoController::class, 'store'])->name('contacto.store');
});

/* Route::get('cursos', [CursoController::class, 'index']);

Route::get('cursos/create', [CursoController::class, 'create']);

Route::get('cursos/{curso}', [CursoController::class, 'show']); */

/* Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria=null) {
    if($categoria) {
        $mensaje = "Bienvenido al curso $curso de la categoría $categoria";
    }else{
        $mensaje = "Bienvenido al curso de $curso.";
    }
    return $mensaje;
});
 */