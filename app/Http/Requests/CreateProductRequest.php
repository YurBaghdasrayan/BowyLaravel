<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class CreateProductRequest extends FormRequest
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
            'headline' => 'required',
            'price' => 'required|numeric',
            'city' => 'required',
            'region' => 'required',
            'car_model' => 'required',
            'description' => 'required',
            'body_type' => 'required',
            'rudder' => 'required',
            'year_of_issue' => 'required|numeric',
            'transmission' => 'required|',
//                'image' => 'required|file|image|max:2048',
            'category_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'headline.required' => 'Поле заголовок объявления почты обязательно.',
            'price.required' => 'Поле стоимость почты обязательно.',
            'city.required' => 'Поле город почты обязательно.',
            'region.required' => 'Поле регион почты обязательно.',
            'car_model.required' => 'Поле марка автомобиля почты обязательно.',
            'description.required' => 'Поле описание объявления почты обязательно.',
            'body_type.required' => 'Поле тип кузова почты обязательно.',
            'rudder.required' => 'Поле руль почты обязательно.',
            'year_of_issue.required' => 'Поле год выпуска почты обязательно.',
            'transmission.required' => 'Поле коробка передач почты обязательно.',
        ];
    }

    protected function getValidatorInstance()
    {
        $validate = parent::getValidatorInstance();

        if (!$validate->fails()) {
            $code = $this->except(['_token']);

            $this->replace($code);
        }
        return $validate;
    }
}
