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
            'remember' => ['nullable', Rule::in(['no', 'off', 0, false, 'yes', 'on', 1, true])],
        ];
    }

    public function validated($key = null, $default = null)
    {
        $value = request()->get('email-name');
        $field = filter_var($value, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        return array_merge([$field => $value], request()->only('password'));
    }
}
