<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShortRequest extends FormRequest
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
            //
            "longUrl" => [
                "required",
                'regex:(^((http(s)?:\/\/.)?[www\.]?[-a-zA-Z0-9@:%._+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_+.~#?&\/=]*))$)',
            ],
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            "longUrl.required" => "Please, insert a URL.",
            "longUrl.regex" =>
                "The URL you used is not a valid URL, try again.",
        ];
    }
}
