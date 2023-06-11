<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsSendEmailRequest extends FormRequest
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
            'url' => ['required', 'string', 'max:255'],
            'full_name' => ['required', 'string', 'max:255'],
            'company' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:2550'],
            ];
    }
}
