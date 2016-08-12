<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
// use App\Http\Requests\LoginPostRequest;

class LoginPostRequest extends Request
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
            'email' => 'required|email:',
           
            'code' => 'required',
        ];
    } 

    /**
     * 获取已定义验证规则的错误消息。
     */
    public function messages()
    {
        return [
            'email.required' => '邮箱不能为空',
            'email.email' => '邮箱格式不正确',
           
            'code.required'  => '验证码不能为空',
        ];
    }






}
