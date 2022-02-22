<?php

use App\Http\Controllers\SuperpowerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroController;
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

Route::get('/', function () {
    return view('index');
});

//redirigir a un controlador
Route::get('/salutacio', [\App\Http\Controllers\ProvaController::class, 'salutacio']);

Route::get('/ordinadors/{codi}', [\App\Http\Controllers\ProvaController::class, 'ordinadors']);

Route::get('/temps', [\App\Http\Controllers\ProvaController::class, 'temps']);

////comprobació amb where
//Route::get('/afegir/{codi}', function ($codi) {
//    echo 'Afegit el producte ' . $codi;
//})->where('codi', '[0-9]+');
//
////{codi?} i $codi = null
//Route::get('/test/{codi?}', function ($codi = null) {
//    if ($codi == null) {
//        echo 'No has passat el codi';
//    } else {
//        echo 'Has passat el codi ' . $codi;
//    }
//})->where('codi', '[0-9]+');
//
////múltiples valors
//Route::get('/usuari/{codi?}/afegirpermis/{permis}', function ($codi, $permis) {
//    echo 'Vull afegir el permís '.$permis.' a l\'usuari '.$codi;
//})->where('codi', '[0-9]+');

Route::get('/planets', [\App\Http\Controllers\PlanetController::class, 'index'])->name('planets.index');
Route::get('/planets/show/{id}', [App\Http\Controllers\PlanetController::class, 'show'])->name('planets.show');
Route::get('/planets/edit/{id}', [App\Http\Controllers\PlanetController::class, 'edit'])->name('planets.edit');
Route::post('/planets/update/{id}', [App\Http\Controllers\PlanetController::class, 'update'])->name('planets.update');
Route::get('/planets/create', [\App\Http\Controllers\PlanetController::class, 'create'])->name('planets.create');
Route::post('/planets/store', [\App\Http\Controllers\PlanetController::class, 'store'])->name('planets.store');
Route::get('/planets/delete/{planet}', [\App\Http\Controllers\PlanetController::class, 'destroy'])->name('planets.destroy');

Route::resource('superheroes', SuperheroController::class);
Route::resource('superpowers', SuperpowerController::class);

Route::view('/index', 'index')->name('index');
