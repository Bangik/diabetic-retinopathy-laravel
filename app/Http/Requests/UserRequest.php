<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'id_number' => 'required|string|max:255|unique:users',
            'phone_number' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'age' => 'nullable|string|max:255',
            'gender' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
            'role' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ];
    }

    public function failedValidation(\Illuminate\Contracts\Validation\Validator $validator): void
    {
        throw new \Illuminate\Validation\ValidationException($validator, $this->response($validator->errors()->getMessages()));
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'name is required',
            'email.required' => 'email is required',
            'id_number.required' => 'id_number is required',
            'phone_number.required' => 'phone_number is required',
            'address.required' => 'address is required',
            'role.required' => 'role is required',
            'password.required' => 'password is required',

            'name.string' => 'name must be string',
            'email.string' => 'email must be string',
            'id_number.string' => 'id_number must be string',
            'phone_number.string' => 'phone_number must be string',
            'address.string' => 'address must be string',
            'role.string' => 'role must be string',
            'password.string' => 'password must be string',

            'name.max' => 'name must be less than 255 characters',
            'email.max' => 'email must be less than 255 characters',
            'id_number.max' => 'id_number must be less than 255 characters',
            'phone_number.max' => 'phone_number must be less than 255 characters',
            'address.max' => 'address must be less than 255 characters',
            'role.max' => 'role must be less than 255 characters',

            'email.email' => 'email must be valid email',
            'id_number.unique' => 'id_number has already been taken',
            'email.unique' => 'email has already been taken',
            'password.min' => 'password must be at least 8 characters',
        ];
    }

    /**
     * Get the proper failed validation response for the request.
     *
     * @param array<string, string> $errors
     */
    public function response(array $errors): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'message' => 'The given data was invalid.',
            'errors' => $errors,
        ], 422);
    }
}
