<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//apply api filtet by title, links, snippet
Route::get('/mcdonalds-locations/by-title', [ApiController::class, 'getByTitle']);
Route::get('/mcdonalds-locations/by-link', [ApiController::class, 'getByLink']);
Route::get('/mcdonalds-locations/by-snippet', [ApiController::class, 'getBySnippet']);


//apply exccel export 
Route::post('/mcdonalds-locations/export', [ApiController::class, 'export']);

Route::get('/mcdonalds-locations', [ApiController::class, 'index']);
Route::post('/mcdonalds-locations', [ApiController::class, 'store']);
Route::get('/mcdonalds-locations/{id}', [ApiController::class, 'show']);
Route::put('/mcdonalds-locations/{id}', [ApiController::class, 'update']);
Route::delete('/mcdonalds-locations/{id}', [ApiController::class, 'destroy']);

Route::get('/search', [ApiController::class, 'search']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




