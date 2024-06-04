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
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules[[
            'nom_produit' => 'required|string|max:255',
            'type_produit' => 'required|string|in:crème hydratante,shampooing,savon,lotion tonique,masque facial,démaquillant,baume à lèvres,exfoliant corporel,sérum anti-âge,Huile pour le visage',
            'description' => 'nullable|string|max:1000',
            // 'entreprise_id' => 'required|exists:entreprises,id',
        ]];
        
        return $rules;
    }
}
