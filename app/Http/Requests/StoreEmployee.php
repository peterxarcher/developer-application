<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployee extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $email = 'required|min:3|unique:employees,email';
        if ($this->method() == "PUT") {
            $email = 'required|min:3|unique:employees,email,' . $this->employee;
        }
        return [
            'name' => 'required|min:3',
            'email' => $email,
            'phone_number' => 'required|numeric|digits:10',
            'department' => 'required',
            'address' => 'required',
            'dob' => 'required',
        ];
    }
}
