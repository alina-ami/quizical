<?php

namespace App\Http\Requests\Brands\Questions;

use Illuminate\Foundation\Http\FormRequest;

class UpdateQuestionRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'due_at' => 'required|date_format:Y-m-d|after:now',
            'genders' => 'required|array',
            'min_age' => 'required|integer|min:1',
            'max_age' => 'required|integer|max:100',
            'min_reach' => 'required|integer',
        ];
    }
}
