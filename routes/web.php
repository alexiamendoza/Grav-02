<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Intensidad;
use App\Http\Controllers\Ley;
use App\Http\Controllers\Fuerza;
use App\Http\Controllers\Potencial;
use App\Http\Controllers\EnergiaPo;
use App\Http\Controllers\EnergiaCi;
use App\Http\Controllers\Velo;
use App\Http\Controllers\Portada;
use App\Http\Controllers\Prmpaso;
use App\Http\Controllers\Sgnpaso;

Route::get('/intensidad', [Intensidad::class,'datosint'])
->name('datosint');
//donde procesamos el formulario
Route::post('/calculaint',[Intensidad::class, 'calculaint'])
->name('calculaint');

Route::get('/ley', [Ley::class,'datosley'])
->name('datosley');
//donde procesamos el formulario
Route::post('/calculaley',[Ley::class, 'calculaley'])
->name('calculaley');

Route::get('/fuerza', [Fuerza::class,'datosfue'])
->name('datosfue');
//donde procesamos el formulario
Route::post('/calculafue',[Fuerza::class, 'calculafue'])
->name('calculafue');

Route::get('/potencial', [Potencial::class,'datospot'])
->name('datospot');
//donde procesamos el formulario
Route::post('/calculapot',[Potencial::class, 'calculapot'])
->name('calculapot');

Route::get('/energiapo', [EnergiaPo::class,'datosep'])
->name('datosep');
//donde procesamos el formulario
Route::post('/calculaep',[EnergiaPo::class, 'calculaep'])
->name('calculaep');

Route::get('/energiaci', [EnergiaCi::class,'datosci'])
->name('datosci');
//donde procesamos el formulario
Route::post('/calculaci',[EnergiaCi::class, 'calculaci'])
->name('calculaci');

Route::get('/velo',[Velo::class,'datosv'])
->name('datosv');
//donde procesamos el formulario
Route::post('/calculav',[Velo::class, 'calculav'])
->name('calculav');

Route::get('/portada', [Portada::class, 'datosport'])
->name('datosport');

Route::get('/paso1', [Prmpaso::class, 'primerpaso'])
->name('primerpaso');

Route::get('/paso2', [Sgnpaso::class, 'segundopaso'])
->name('segundopaso');

Route::get('/si', function () {
    return view('si');
});

Route::get('/sexo', function () {
    return view('sexo');
});













//donde procesamos el formulario
Route::post('/calculaport', [Portada::class, 'calculaport'])
->name('calculaport');