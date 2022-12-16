<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|string|max:20',
            'unit_price' => 'required|numeric|max:20',
            'stock' => 'required|numeric|max:9',
            'id_condition' => 'required|string|max:3',
            'status'=>'required|string|max:1',
        ];
    }
}
