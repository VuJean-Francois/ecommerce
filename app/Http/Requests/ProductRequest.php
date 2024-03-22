<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        return [
            'name' => 'required|string|min:2|max:255',
            'description' => 'required|string|max:2000',
            'image' => 'required|image|mimes:jpeg,png|max:1024',
            'price' => 'required|numeric|min:0|max:999999,99',
            'vat' => 'required|numeric|min:0|max:100',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Veuillez entrer le nom du produit.',
            'name.min' => 'nom trop petit.',
            'name.max' => 'nom trop grand.',
            'description.max' => 'Description trop grande.',
            'description.required' => 'Veuillez entrez la description.',
            'price.max' => 'Prix trop grand',
            'price.min' => 'Prix negatif',
            'price.required' => 'Entrer le prix.',
            'vat.required' => 'Entrer la TVA.',
            'vat.max' => 'TVA trop grande.',
            'image.required' => 'Mettre une photo',
            'image.image' => 'la photo n/est pas une image',
            'image.mimes' => 'le format de la photo n/est pas bon',
            'image.max' => 'Taille image excessive'
        ];
    }
}
