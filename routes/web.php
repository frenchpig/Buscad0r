<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UploaderController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\EditorController;

/*
--------------------------------------------------------------------------
  Rutas del Proyecto
--------------------------------------------------------------------------
  Estas rutas son las que ayudan a navegar el proyecto, aqui se encuentran desde rutas para renderizar
  hasta rutas para eliminar, en resumen, toda ruta necesaria del proyecto pasa por aqui
*/

/*
  Rutas Visoras
  Encargadas de renderizar el contenido de la pagina
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/service_loader', function (){
    return view('services_loader');
});
Route::get('/buscar', function (){
    return view('searcher');
});
Route::get('/admin-buscar', function (){
  return view('searcher-admin');
});
/*
  RUTAS UNICAS
  Estas rutas se espera que sean utilizadas una sola vez al momento de cargar
  los datos de un excel a la base de datos
*/
Route::post('/service-insert', [ServiceController::class, 'insertData']);
Route::post('/intralot-upload',[UploaderController::class, 'uploadIntralot']);
Route::post('/dataloteria-upload',[UploaderController::class, 'uploadDataLoteria']);
Route::post('/datorutas-upload',[UploaderController::class,'uploadDatoRutas']);
Route::post('/data-upload',[UploaderController::class,'uploadData']);
/*
  RUTAS BUSCADORAS
  Estas rutas se espera que sean utilizadas para buscar datos utilizando sus codigos
  unicos.
*/
Route::post('/service-search',[SearchController::class,'searchService']);
Route::post('/intralot-search',[SearchController::class,'searchIntralot']);
Route::post('/dataloteria-search',[SearchController::class,'searchDataLoteria']);
Route::post('/datorutas-search',[SearchController::class,'searchDatoRutas']);
Route::post('/data-search',[SearchController::class,'searchData']);
/*
  RUTAS EDITORAS
*/
Route::post('/edit-servicio',[EditorController::class,'editService']);
Route::post('/edit-intralot',[EditorController::class,'editIntralot']);
Route::post('/edit-dataloteria',[EditorController::class,'editDataLoteria']);
Route::post('/edit-datorutas',[EditorController::class,'editDatoRutas']);
