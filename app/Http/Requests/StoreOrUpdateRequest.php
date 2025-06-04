<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrUpdateRequest extends FormRequest
{
    /**
     * Determina se o usuário está autorizado a fazer esta requisição.
     */
    public function authorize(): bool
    {
        return true; // Altere para lógica de autorização conforme necessário
    }

    /**
     * Regras de validação para a requisição.
     */
    public function rules(): array
    {
        return [
            "product_name" => "string|required|min:3|max:100" ,
            "sku" => "integer|required"
        ];
    }


    public function messages()
    {
      return [
      "product_name.required" => "O campo Nome do Produto é obrigatório!",
      "sku.integer" => "O campo Codigo deve conter apenas numeros!",
      ];
    }
}
