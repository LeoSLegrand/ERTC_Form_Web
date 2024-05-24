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
            'aspect' =>'required|string',
            'couleur' =>'required|string',
            'ebulition' =>'required|string',
            'acidite' =>'required|numeric',
            'solubilite' =>'required|string',
            'estValide' =>'required|string'
        ]];
        
        return $rules;
    }
}
