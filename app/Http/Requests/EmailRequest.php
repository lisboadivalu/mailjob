<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'subject' => 'required',
            'subject_text' => 'required',
        ];
    }

    /**
     * Return a message when there's an error
     */
    public function message()
    {
        return [
            'email.required' => 'This field cannot be empty',
            'email.email' => 'This field must have an email',
            'subject.required' => 'This field cannot be empty',
            'subject_text.required' => 'This field cannot be empty',
        ];
    }
}
