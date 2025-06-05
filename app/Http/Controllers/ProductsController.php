<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Http\Requests\StoreOrUpdateRequest;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    public function index()
    {
        $products = Products::get();

        return view("products.index", ["products" => $products]);
    }


    public function create()
    {
        return view("products.create");
    }

    public function store(StoreOrUpdateRequest $request)
    {

            $data = $request->all();

        $product = new Products();
        $product->name = $request->input("name");
        $product->sku = $request->input("sku");
        $product->description = $request->input("description");
        $product->save();
        

        dd($product);

        return redirect()->back()->with("error", "Erro ao cadastrar o produto"); 

        // "name",
        // "brand_id",
        // "sku",
        // "description",
        // "status",
        // "stock"
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

   
    public function edit($id)
    {
        $products = Products::find($id);

        return view("products.edit", ["product" => $products]);
    }

    
    public function update(StoreOrUpdateRequest $request, $id)
    {
        $product = Products::where("id", $id)->update([
            "name" => $request->name,
            "description" => $request->description
    ]);
        dd($product); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Products::where("id", $id)->delete();
        return "Registro deletado com sucesso!";
    }
}
