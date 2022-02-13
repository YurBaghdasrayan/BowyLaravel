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
            'name'=>'required',
            'email' => 'email',
            'number' => 'numeric',
            'city'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'email.email' => 'Необходимо ввести электронная почта',
            'number.numeric'=>'Необходимо ввести цифры',
            'name.required' => 'Необходимо ввести имя в поле',
            'city.required'=>'asdasdasdasd',
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
