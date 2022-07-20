<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Ruta para crear la direccion del api con las noticias
Route::get("news", [NewsController::class,"index"]);
Route::get("news/detail/{id}", [NewsController::class,"detail"]);
Route::get("news/related/{id}/{categories}", [NewsController::class,"related"]);
Route::get("news/search/{keyword}/", [NewsController::class,"search"]);
Route::post("news/categories", [NewsController::class, "filter_for_categories"]);

// Ruta para crear la direccion del api con los usuarios
Route::post("register", [AuthController::class,"register"]);

// Ruta para crear la direccion del api con el login 
Route::post("login", [AuthController::class,"login"]);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get("logout", [AuthController::class,"logout"]);
});

// Ruta para crear la direccion del api con las categorias
Route::get("categories", [CategoriesController::class,"index"]);

Route::get("user/categories", [AuthController::class, "get_user_categories"]);
Route::get("user", [AuthController::class, "get_user"])->middleware("auth:sanctum");