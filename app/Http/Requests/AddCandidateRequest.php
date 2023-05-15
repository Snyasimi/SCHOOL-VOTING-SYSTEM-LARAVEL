<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCandidateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //MUST BE A VALID USER AND NOT A CANDIDATE
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
            'Position' => ['required'],
            'Slogan' => ['required','between:1,50'], 
            'Image' => ['required','max:3000'],
            'Application_letter' => ['required','max:3000']
        ];
    }

    public function messages(): array
    {
       return [

         'Position.required' => 'Please provide a position',
         'Slogan.required' => 'Please Provide a slogan',
         'Image.max' => 'Image is too large please upload an image that is less than 3MB',
         'Application_letter.max' => 'Letter is too large please upload a PDF that is less than 3MB'
       ];
       
    }
}
