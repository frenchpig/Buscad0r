<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UploaderController;

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
Route::post('/service-insert', [ServiceController::class, 'insertData']);
Route::post('/intralot-upload',[UploaderController::class, 'uploadIntralot']);
Route::post('/dataloteria-upload',[UploaderController::class, 'uploadDataLoteria']);
