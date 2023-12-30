<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertItemRequest extends FormRequest
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
            'item_name'=>'required|max:15',
            'item_type'=>'required|max:10',
            'item_price'=>'required|numeric',
            'item_desc'=>'required',
        ];
    }
}
