<?php

namespace App\Http\Requests;

use Illuminate\Auth\Events\Validated;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class UserStoreRequest extends Req
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
            'name' => 'required|string',
            'password' => 'required|string|min:6|max:20',
            'email' => ['required', 'string', 'email'],
        ];
    }

//    protected function failedValidation(Validator $validator)
//    {
//        dd($validator->errors());
//    }

}