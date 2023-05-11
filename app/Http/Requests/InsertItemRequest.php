<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertItemRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'item_name'=>'required|max:15',
            'item_type'=>'required|max:10',
            'item_price'=>'required|numeric',
            'item_desc'=>'required'
        ];
    }
}
