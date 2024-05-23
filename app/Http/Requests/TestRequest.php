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
            'date_test' =>'required',
            'aspect' =>'required',
            'couleur' =>'required|integer|without_spaces',
            'ebulition' =>'required|integer|without_spaces',
            'acidite' =>'required',
            'solubilite' =>'required',
            'estValide' =>'required|integer|without_spaces'
        ]];
        
        return $rules;
    }
}
