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
     * @return array
     */
    public function rules()
    {
        return [
            'fullname' => 'required|max:255', 
            'gender' => 'required', 
            'email' => 'required|email', 
            'postcode' => 'required|numeric',
            'address' => 'required|max:255', 
            'opinion' => 'required|max:120'
        ];
    }
    public function messages()
    {
        return [
            'fullname.required' => '名前を入力してください。', 
            'fullname.max:255' => '255文字以内で入力してください。', 
            'gender.required' => '性別を選んでください。', 
            'email.required' => 'メールアドレスを入力してください。',
            'email.email' => 'メールアドレスの形式で入力してください。', 
            'postcode.required' => '郵便番号を入力してください。',
            'postcode.numeric' => '数字で入力してください。',
            'address.required' => '住所を入力してください。',
            'address.max:255' => '255文字以内で入力してください。', 
            'opinion.required' => 'ご意見を入力してください。',
            'opinion.max:120' => '120文字以内で入力してくだい。'
        ];
    }
}
