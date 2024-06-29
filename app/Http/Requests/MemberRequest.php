<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * バリデーションルールの設定
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name_sei' => 'required|string|max:255',
            'name_mei' => 'required|string|max:255',
            'gender' => 'required|integer|in:1,2,3',
            'birth_date' => 'required|date',
            'email' => 'required|string|email|max:255|unique:members,email',
            'tel' => 'required|string|regex:/^0\d{9,10}$/|max:11',
            'password' => 'required|string|min:8|max:20|regex:/^[a-zA-Z0-9]+$/|confirmed',
        ];
    }

    /**
     * バリデーションメッセージの設定
     *
     * @return array バリデーションメッセージ
     */
    public function messages(): array
    {
        return [
            'name_sei.required' => '名前(姓)は必須項目です。',
            'name_sei.string' => '名前(姓)は文字列で入力してください。',
            'name_sei.max' => '名前(姓)は255文字以内で入力してください。',
            'name_mei.required' => '名前(名)は必須項目です。',
            'name_mei.string' => '名前(名)は文字列で入力してください。',
            'name_mei.max' => '名前(名)は255文字以内で入力してください。',
            'gender.required' => '性別は必須項目です。',
            'gender.integer' => '性別は整数で選択してください。',
            'gender.in' => '性別の選択が無効です。',
            'birth_date.required' => '生年月日は必須項目です。',
            'birth_date.date' => '生年月日の形式が無効です。',
            'email.required' => 'メールアドレスは必須項目です。',
            'email.string' => 'メールアドレスは文字列で入力してください。',
            'email.email' => 'メールアドレスの形式が無効です。',
            'email.max' => 'メールアドレスは255文字以内で入力してください。',
            'email.unique' => 'こちらのメールアドレスは既に使用されています。',
            'tel.required' => '電話番号は必須項目です。',
            'tel.string' => '電話番号は文字列で入力してください。',
            'tel.regex' => '電話番号の形式が無効です。ハイフンなしで入力してください。',
            'tel.max' => '電話番号は11文字以内で入力してください。',
            'password.required' => 'パスワードは必須項目です。',
            'password.string' => 'パスワードは文字列で入力してください。',
            'password.min' => 'パスワードは最低8文字以上必要です。',
            'password.max' => 'パスワードは最大20文字以内でなければなりません。',
            'password.regex' => 'パスワードは英数字のみ使用できます。',
            'password.confirmed' => 'パスワードとパスワード確認が一致しません。',
        ];
    }
}
