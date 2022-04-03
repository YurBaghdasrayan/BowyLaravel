<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateuserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|min:3|max:64',
            'email' => 'email',
            'number' => 'numeric',
//            'city'=>'mi',/**/
        ];
    }

    public function messages()
    {
        return [
            'email.email' => 'Необходимо ввести электронную почту',
            'number.numeric'=>'ввдъедите ваш номер чтобы с вами связались',
            'name.required' => 'Необходимо ввести имя в поле',
            'name.min' => 'Имя должно быть не менее 3 символов',
            'name.max' => 'Имя не должно быть длиннее 64 символов',
            'city.required'=>'Необходимо ввести город в поле',
        ];
    }

    protected function getValidatorInstance()
    {
        $validator = parent::getValidatorInstance();

        if (!$validator->fails()) {
            $data = $this->except(['_token', '_method']);
            $this->replace($data);
        }
        return $validator;
    }
}
