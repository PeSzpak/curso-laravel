<?php

use app\Http\Controllers\ExampleController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
    return response()->json([
       'message' => 'ok' 
    ]);
});

Route:: get ("/hello", [ExampleController::class, "printHelloWorld"]);


Route::get("/cadastrar-produto", [ProductsController::class, "create"]);
Route::post("/salvar-produto", [ProductsController::class, "store"])->name("products.store");
Route::get("/produtos", [ProductsController::class, "index"])->name("index");
Route::get("/produto/{id}", [ProductsController::class, "show"])->name("products.show");