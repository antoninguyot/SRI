<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MissionRequest extends FormRequest
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
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'location' => ['required', 'string'],
            'purpose' => ['required', 'string'],
            'cost' => ['required', 'numeric'],
            'type' => ['required', 'string'],
            'begins_at' => ['date_format:d/m/Y'],
            'ends_at' => ['date_format:d/m/Y'],
        ];
    }
}
