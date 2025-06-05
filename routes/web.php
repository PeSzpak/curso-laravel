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


Route::get("/cadastrar-produto", [ProductsController::class, "create"])->name("products.create");
Route::post("/salvar-produto", [ProductsController::class, "store"])->name("products.store");
Route::get("/produtos", [ProductsController::class, "index"])->name("index");
Route::get("/produto/{id}", [ProductsController::class, "show"])->name("products.show");
Route::get("/editar-produto/{id}", [ProductsController::class, "edit"])->name("products.edit");
Route::post("/atualizar-produto/{id}", [ProductsController::class, "update"])->name("products.update");

Route::redirect("/produtos", "/cadastrar-produto", 301);
//301 indica um redirect de url 
