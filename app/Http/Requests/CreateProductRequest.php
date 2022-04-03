<?php

namespace App\Http\Requests;

use App\Models\City;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

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
            'year_of_issue' => 'required',
            'transmission' => 'required',
            'address' => 'required',
//                'image' => 'required|file|image|max:2048',
            'category_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'headline.required' => 'Поле заголовок объявления обязательно.',
            'price.required' => 'Поле стоимость обязательно.',
            'city.required' => 'Поле город обязательно.',
            'region.required' => 'Поле регион обязательно.',
            'car_model.required' => 'Поле марка автомобиля обязательно.',
            'description.required' => 'Поле описание объявления обязательно.',
            'body_type.required' => 'Поле тип кузова  обязательно.',
            'rudder.required' => 'Поле руль обязательно.',
            'year_of_issue.required' => 'Поле год выпуска обязательно.',
            'transmission.required' => 'Поле коробка передачи обязательно.',
            'address.required' => 'Поле адреса обязательно.',
            'category_id.required' => 'Поле категори обязательно',
        ];
    }

    protected function getValidatorInstance()
    {
        $validate = parent::getValidatorInstance();

        if (!$validate->fails()) {
            $regionIdByCity = City::query()->where('id', $this->city)->value('region_id');
            if($this->region != $regionIdByCity) {
                throw new HttpResponseException(response()->json([
                    'success' => 0,
                    'message' => 'City was not found',
                ],404));
            }
            $code = $this->except(['_token']);

            $this->replace($code);
        }
        return $validate;
    }
}
