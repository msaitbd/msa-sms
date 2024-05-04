<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|string|max:100|unique:users,email,' . $this->user_id,
            'password' => 'nullable|string|min:6',
            'phone' => 'required|unique:users,phone,' . $this->user_id,
            'school_name' => 'required',
            'address' => 'required',
            'service_charge' => 'required|numeric',
            'install_fee' => 'required|numeric',
        ];
    }
}
