<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Simple Bookstore CRUD 
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); //Default

// Testing on Postman
Route::get('/test', function (Request $request) {
    return 'Authenticated';
});

Route::middleware('auth:api')->prefix('v1')->group(function() {
    Route::get('/user', function(Request $request) {
        return $request->user();
    });

    // Create route for authors->End point: /author/{author}
    // Route::get('/authors/{author}', [AuthorsController::class, 'show']);

    // CRUD Rest Api
    Route::apiResource('/authors', AuthorsController::class); // Show all resources
    Route::apiResource('/books', BooksController::class);
});

// Simple Products CRUD

