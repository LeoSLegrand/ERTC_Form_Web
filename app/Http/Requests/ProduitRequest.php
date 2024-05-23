<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProduitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules[[
            'nom_produit' =>'required',
            'type_produit' =>'required',
            'description' =>'required|integer|without_spaces',
            'nombre_piste' =>'required|integer|without_spaces'
        ]];
        
        return $rules;
    }
}
