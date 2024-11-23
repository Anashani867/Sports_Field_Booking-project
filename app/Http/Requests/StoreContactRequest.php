<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3', 'max:100', 'regex:/^[a-zA-Z\s]+$/'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone_number' => ['required',  'regex:/^\+?[0-9]{9,15}$/'],
//            'phone' => ['required', 'digits_between:9,15', 'regex:/^[0-9]+$/'],

            'subject' => ['required', 'string', 'max:150'],
            'message' => ['required', 'string', 'min:10', 'max:1000']
//                        'comment' => ['nullable'],
        ];
    }



    public function messages(): array
    {
        return [
            'name.required' => 'The full name is required.',
            'name.string' => 'The full name must be a valid string.',
            'name.min' => 'The full name must be at least 3 characters.',
            'name.max' => 'The full name may not be greater than 100 characters.',
            'name.regex' => 'The full name can only contain letters and spaces.',

            'email.required' => 'The email address is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.unique' => 'This email is already registered.',

            'phone_number.required' => 'The phone number is required.',
            'phone_number.digits_between' => 'The phone number must be between 9 and 15 digits.',
            'phone_number.regex' => 'The phone number must contain only numbers.',

            'subject.required' => 'The subject is required.',
            'subject.string' => 'The subject must be a valid string.',
            'subject.max' => 'The subject may not be greater than 150 characters.',

            'message.required' => 'The message is required.',
            'message.string' => 'The message must be a valid string.',
            'message.min' => 'The message must be at least 10 characters.',
            'message.max' => 'The message may not be greater than 1000 characters.',
        ];
    }

}
