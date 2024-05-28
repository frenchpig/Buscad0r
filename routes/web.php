<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeleterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UploaderController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\AdderController;

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

/*
  RUTAS BUSCADORAS
  Estas rutas se espera que sean utilizadas para buscar datos utilizando sus codigos
  unicos.
*/
Route::middleware(['auth'])->group(function () {
  Route::get('/buscar', function (){
    return view('searcher');
  });
  Route::post('/service-search',[SearchController::class,'searchService']);
  Route::post('/intralot-search',[SearchController::class,'searchIntralot']);
  Route::post('/dataloteria-search',[SearchController::class,'searchDataLoteria']);
  Route::post('/datorutas-search',[SearchController::class,'searchDatoRutas']);
  Route::post('/data-search',[SearchController::class,'searchData']);
});

Route::middleware(['auth', 'role:admin'])->group(function () {
  //Buscador con opciones de Administrador
  Route::get('/admin-buscar', function (){
    return view('searcher-admin');
  });
  //Rellenador de base de datos
  Route::get('/service_loader', function (){
    return view('services_loader');

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
  RUTAS EDITORAS
  */
  Route::post('/edit-servicio',[EditorController::class,'editService']);
  Route::post('/edit-intralot',[EditorController::class,'editIntralot']);
  Route::post('/edit-dataloteria',[EditorController::class,'editDataLoteria']);
  Route::post('/edit-datorutas',[EditorController::class,'editDatoRutas']);
  Route::post('/edit-data',[EditorController::class,'editData']);
  /*
  RUTAS ELIMINADORAS
  */
  Route::post('delete-service',[DeleterController::class,'deleteService']);
  Route::post('delete-intralot',[DeleterController::class,'deleteIntralot']);
  Route::post('delete-dataloteria',[DeleterController::class,'deleteDataLoteria']);
  Route::post('delete-datoruta',[DeleterController::class,'deleteDatoRuta']);
  Route::post('delete-data',[DeleterController::class,'deleteData']);
  /*
  RUTAS DE AGREGADO
  */
  Route::post('add-servicio',[AdderController::class,'addService']);
  Route::post('add-intralot',[AdderController::class,'addIntralot']);
  Route::post('add-dataloteria',[AdderController::class,'addDataLoteria']);
  Route::post('add-datoruta',[AdderController::class,'addDatoRuta']);
  Route::post('add-data',[AdderController::class,'addData']);
  /*
    Rutas de Registro
    Estas rutas fueron generadas por laravel/breeze y se enontraban en auth.php, se movieron aqui
    debido a que se busca bloquear el registro de usuarios pero no inhabilitarlo.
  */
  Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
  Route::post('register', [RegisteredUserController::class, 'store']);
});

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
