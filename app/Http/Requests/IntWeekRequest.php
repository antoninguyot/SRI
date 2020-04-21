<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IntWeekRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'type' => ['required', 'integer'],
            'fee' => ['required', 'numeric'],
            'students' => ['required', 'integer'],
            'begins_at' => ['date_format:d/m/Y'],
            'ends_at' => ['date_format:d/m/Y'],
        ];
    }
}
