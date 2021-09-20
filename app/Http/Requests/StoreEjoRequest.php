<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEjoRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'category_name' => 'required',
            'ejo_number' => 'required',
            'ejo_machine' => 'required',
            'ejo_description' => 'required',
            'shift_id' => 'required',
            'group_id' => 'required',
            'category_id' => 'required',
            'status_id' => 'required',
        ];
    }
}
