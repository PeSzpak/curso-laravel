<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrUpdateRequest;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = [
            0 => [
                "product_name" => "Produto 1",
                "sku"          => "123",
                "description"  => "Exemplo de descrição"
            ], 
            1 => [
                "product_name" => "Produto 2",
                "sku"          => "456",
                "description"  => "Exemplo de descrição"
            ],
            2 => [
                "product_name" => "Produto 3",
                "sku"          => "789",
                "description"  => "Exemplo de descrição"
            ],

        ];

        // return redirect()->route("products.create");
        return view("products.index", ["products" => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("products.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrUpdateRequest $request)
    {
        $data = $request->all(); 
        dd($data);
        return redirect()->back()->with("error", "Erro ao cadastrar produto");
    }
    public function show($id)
    {
        $products = [
            0 => [
                "product_name" => "Produto 1",
                "sku"          => "123",
                "description"  => "Exemplo de descrição"
            ], 
            1 => [
                "product_name" => "Produto 2",
                "sku"          => "456",
                "description"  => "Exemplo de descrição"
            ],
            2 => [
                "product_name" => "Produto 3",
                "sku"          => "789",
                "description"  => "Exemplo de descrição"
            ],

        ];

        return view("products.show", ["product" => $products[$id]]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $products = [
            0 => [
                "id" => 0,
                "product_name" => "Produto 1",
                "sku"          => "123",
                "description"  => "Exemplo de descrição"
            ], 
            1 => [
                "id" => 1,
                "product_name" => "Produto 2",
                "sku"          => "456",
                "description"  => "Exemplo de descrição"
            ],
            2 => [
                "id" => 2,
                "product_name" => "Produto 3",
                "sku"          => "789",
                "description"  => "Exemplo de descrição"
            ],

        ];

        return view("products.edit", ["product" => $products[$id]]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreOrUpdateRequest $request, $id)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
