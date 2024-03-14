<?php

use Illuminate\Support\Facades\Route;

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





use App\Http\Controllers\McDonaldsLocationController;


//apply export and import 
Route::get('/export', [McDonaldsLocationController::class, 'export'])->name('mcdonalds-locations.export');

Route::post('/mcdonalds-locations/import', [McDonaldsLocationController::class, 'import'])->name('mcdonalds-locations.import');


Route::get('/mcdonalds-locations/export', [McDonaldsLocationController::class, 'export'])->name('mcdonalds-locations.export');

Route::get('/mcdonalds-locations', [McDonaldsLocationController::class, 'index'])->name('mcdonalds-locations.index');
Route::get('/mcdonalds-locations/create', [McDonaldsLocationController::class, 'create'])->name('mcdonalds-locations.create');
Route::post('/mcdonalds-locations', [McDonaldsLocationController::class, 'store'])->name('mcdonalds-locations.store');
Route::get('/mcdonalds-locations/{id}/edit', [McDonaldsLocationController::class, 'edit'])->name('mcdonalds-locations.edit');
Route::put('/mcdonalds-locations/{id}', [McDonaldsLocationController::class, 'update'])->name('mcdonalds-locations.update');
Route::delete('/mcdonalds-locations/{id}', [McDonaldsLocationController::class, 'destroy'])->name('mcdonalds-locations.destroy');
Route::get('/mcdonalds-locations/{id}', [McDonaldsLocationController::class, 'show'])->name('mcdonalds-locations.show');



Route::get('/', function () {
    return view('welcome');
});
