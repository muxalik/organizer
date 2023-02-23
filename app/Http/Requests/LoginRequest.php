<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LoginRequest extends FormRequest
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
            'email-name' => ['required', 'string'],
            'password' => ['required', 'string'],
            'remember' => [Rule::in(['no', 'off', 0, false, 'yes', 'on', 1, true])],
        ];
    }
}
