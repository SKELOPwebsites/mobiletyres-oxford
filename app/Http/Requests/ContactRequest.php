<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'numeric'],
            'comments' => ['required', 'string', 'max:1000']
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Please enter a first name',
            'first_name.string' => 'Please enter a valid first name',
            'last_name.required' => 'Please enter a last name',
            'last_name.string' => 'Please enter a valid last name',
            'email.required' => 'Please enter an e-mail address',
            'email.email' => 'Please enter a valid e-mail address',
            'phone.required' => 'Please enter a phone number',
            'phone.numeric' => 'Please enter a valid phone number',
            'comments.required' => 'Please specify some comments',
            'comments.string' => 'Please enter valid comments',
            'comments.max:1000' => 'Details must be less than 1000 characters',
        ];
    }
}
