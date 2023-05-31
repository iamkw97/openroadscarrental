<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'fullname' => 'required|string|min:3|max:100',
            'email' => 'required|email',
            'address' => 'required|string',
            'city' => 'required|string',
            'phone1' => 'required|string',
            'phone2' => 'string',
            'dob' => 'string|nullable',
            'flight_no' => 'required|string',
            'driver_name' => 'required|string',
            'license_no' => 'required|string',
            'license_valid_date' => 'required|date',
            'password' => 'required|string',
            'repassword' => 'required|string|same:password',
        ];
    }
}
