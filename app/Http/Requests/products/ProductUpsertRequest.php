<?php

namespace App\Http\Requests\products;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpsertRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required'],
            'description' => ['required'],
            'price' => ['required','numeric'],
            'category_id' => ['exists:categories,id'],
            'brand_id' => ['exists:brands,id'],
            'view_count' => ['integer']
        ];
    }
}
