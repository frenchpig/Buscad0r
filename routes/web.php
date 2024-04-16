<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UploaderController;
use App\Http\Controllers\SearchController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
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
Route::post('/service-insert', [ServiceController::class, 'insertData']);
Route::post('/intralot-upload',[UploaderController::class, 'uploadIntralot']);
Route::post('/dataloteria-upload',[UploaderController::class, 'uploadDataLoteria']);
Route::post('/datorutas-upload',[UploaderController::class,'uploadDatoRutas']);
Route::post('/data-upload',[UploaderController::class,'uploadData']);
Route::post('/service-search',[SearchController::class,'searchService']);
Route::post('/intralot-search',[SearchController::class,'searchIntralot']);
Route::post('/dataloteria-search',[SearchController::class,'searchDataLoteria']);