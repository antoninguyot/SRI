<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class InternshipRequest extends FormRequest
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
            'student_id' => ['required', 'exists:students,id'],
            'company' => ['required', 'string'],
            'country' => ['required', Rule::in(array_keys(config('cc')))],
            'begins_at' => ['date_format:d/m/Y'],
            'ends_at' => ['date_format:d/m/Y'],
        ];
    }
}
