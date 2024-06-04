<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $rules[[
            'date_test' =>'required|string',
            'aspect' => 'required|string|in:liquide,gel,Poudre,mousse,baume,spray,huile',
            'couleur' => 'required|string|max:255',
            'ebulition' => 'required|string|in:faible,moyenne,haute',
            'acidite' => 'required|numeric|min:0|max:14',
            'solubilite' => 'required|string|in:soluble,insoluble',
            'estValide' =>'required|in:Oui,Non'
        ]];
        
        return $rules;
    }
}
