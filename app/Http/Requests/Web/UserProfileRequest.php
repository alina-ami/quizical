<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class UserProfileRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'age' => 'required|integer',
            'gender' => 'required|string',
            'interests' => 'required|array',
            'brands' => 'required|array',
        ];
    }
}
