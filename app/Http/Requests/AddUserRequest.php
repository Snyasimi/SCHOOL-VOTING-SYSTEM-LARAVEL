<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
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

            'Name' => ['required','regex:/\b\w+\s+\w+\b/'],
            'Email' => ['required'],
	        'RegNo' =>['required'],
            'password' => ['required','between:6,20','same:password2'],
        
        ];
    }

    public function messages()
    {
       return [

         'Name.required' => 'Please enter your two names ',
         'Name.regex' => 'Please enter your two names with a space in-between',
         'Email.required' => 'Please enter your email address',
         'RegNo.required' => 'Please enter your Registration number',
         'password.required' => 'Please enter your password',
         'password.same' => 'The given passwords dont match, Please confirm your password '
         

       
       ];
       
    }
}
