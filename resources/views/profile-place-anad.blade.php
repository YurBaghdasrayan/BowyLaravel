@extends('layouts.app')

@section('content')
    <div class="bowy_mian_wrapper" id="active_inactive_ads_page">
    @include('includes_file.header')
        <main>
{{--            @dd($json)--}}
            <section class="place_an_ad">
                <div class="place_an_ad_wrapper">
                    <div class="place_an_ad_items_wrapper">
                        @include('includes_file.user')
                        <form action="{{route('profile-place-anad')}}" class="place_an_ad_form top" method="post">
                            @csrf
                            <div class="place_an_ad_form_inputs_wrapper">
                                <div class="place_an_ad_form_inputs_first_wrapper">
                                    <div class="place_an_ad_form_input_field_wrapper">
                                        <input type="text" placeholder="Заголовок объявления" class="place_an_ad_form_input_field" name="headline">
                                            <div class="alert_none alert-danger-headline" ></div>
                                    </div>
                                    <div class="place_an_ad_form_input_field_wrapper price_input_field">
                                        <input type="text" placeholder="Стоимость" name="price" class="place_an_ad_form_input_field">
                                        <div class="alert_none alert-danger-price" ></div>
                                    </div>
                                </div>
                                <div class="place_an_ad_form_inputs_first_wrapper">
                                    <div class="find_transport_form_select_wrapper">
                                        <div class="find_transport_form_select_title_wrapper">
                                            <input type="hidden" class="hidden_category_data" name="category_id" value="">
                                            <p class="find_transport_form_select_title">Выберите категорию</p>
                                            <div class="alert_none alert-danger-category_id" ></div>
                                        </div>

                                        <div class="find_transport_form_select_hidden_wrapper">
                                            @foreach($categories as $category)
                                               <p class="find_transport_form_select_hidden_info" data-id="{{$category->id}}" data-info="{{$category->name}}">{{$category->name}}</p>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="place_an_ad_form_inputs_first_wrapper">
{{--                                    <div class="place_an_ad_form_input_field_wrapper">--}}
{{--                                        <input type="text" placeholder="Город" name="city" class="place_an_ad_form_input_field">--}}
{{--                                        <div class="alert_none alert-danger-city" ></div>--}}
{{--                                    </div>--}}
                                    <div class="place_an_ad_form_inputs_first_wrapper">
                                        <div class="find_transport_form_select_wrapper">
                                            <div class="find_transport_form_select_title_wrapper">
                                                <input type="hidden" class="hidden_category_data" name="city" value="">
                                                <p class="find_transport_form_select_title">Выберите город</p>
                                            </div>
                                            <div class="find_transport_form_select_hidden_wrapper" id="divCity">
                                                @foreach($cities as $val)
                                                    <p class="find_transport_form_select_hidden_info" data-id="{{$val->id}}" data-info="{{$val->name}}">{{$val->name}}</p>
                                                @endforeach

                                            </div>
                                            <div class="alert_none" id="regionError">Город должен совподать соответствующему региону</div>
                                        </div>
                                    </div>

                                    <div class="place_an_ad_form_inputs_first_wrapper">
                                        <div class="find_transport_form_select_wrapper">
                                            <div class="find_transport_form_select_title_wrapper">
                                                <input type="hidden" class="hidden_category_data" id="region_input" name="region" value="">
                                                <p class="find_transport_form_select_title">Выберите область</p>
                                            </div>
                                            <div class="find_transport_form_select_hidden_wrapper">
                                                @foreach($regions as $val)
                                                    <p class="find_transport_form_select_hidden_info" data-id="{{$val->id}}" data-info="{{$val->name}}">{{$val->name}}</p>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="place_an_ad_form_inputs_first_wrapper">
                                    <div class="place_an_ad_form_input_field_wrapper">
                                        <input type="text" placeholder="адрес" class="place_an_ad_form_input_field" name="address">
                                        <div class="alert_none alert-danger-address" ></div>
                                    </div>
                                </div>
{{--                                <div class="place_an_ad_form_input_field_wrapper field_box">--}}
{{--                                    <input type="text" placeholder="Марка автомобиля" class="place_an_ad_form_input_field" name="car_model">--}}
{{--                                    <div class="alert_none alert-danger-car_model" ></div>--}}
{{--                                </div>--}}
                                <div class="place_an_ad_form_inputs_first_wrapper">
                                    <div class="find_transport_form_select_wrapper">
                                        <div class="find_transport_form_select_title_wrapper">
                                            <input type="hidden" class="hidden_category_data" name="car_model" value="">
                                            <p class="find_transport_form_select_title" >Марка автомобиля</p>
                                        </div>
                                        <div class="find_transport_form_select_hidden_wrapper">
                                            @foreach($cars_models as $cars_model)
                                                <p class="find_transport_form_select_hidden_info" data-id="{{$cars_model->id}}" data-info="{{$cars_model->name}}">{{$cars_model->name}}</p>
                                            @endforeach
                                        </div>
{{--                                        <div class="alert_none" id="regionError">Город должен совподать соответствующему региону</div>--}}
                                    </div>
                                </div>
                                <div class="place_an_ad_form_input_field_wrapper field_box">
                                    <input type="text" placeholder="Описание объявления" name="description" class="place_an_ad_form_input_field">
                                    <div class="alert_none alert-danger-description" ></div>
                                </div>
                            </div>
                            <div class="place_an_ad_form_inputs_wrapper">
                                <p class="place_an_ad_form_inputs_title">Характеристики</p>
                                <div class="place_an_ad_form_inputs_first_wrapper">
                                    <div class="place_an_ad_form_input_field_wrapper">
                                        <input type="text" placeholder="Тип кузова" class="place_an_ad_form_input_field" name="body_type">
                                        <div class="alert_none alert-danger-body_type" ></div>
                                    </div>
                                    <div class="place_an_ad_form_inputs_first_wrapper" style="width: 350px">
                                        <div class="find_transport_form_select_wrapper">
                                            <div class="find_transport_form_select_title_wrapper">
                                                <input type="hidden" class="hidden_category_data" name="rudder" value="">
                                                <p class="find_transport_form_select_title" >Руль</p>
                                            </div>
                                            <div class="find_transport_form_select_hidden_wrapper">
                                                <p class="find_transport_form_select_hidden_info" data-id="left" data-info="left">left</p>
                                                <p class="find_transport_form_select_hidden_info" data-id="right" data-info="right">right</p>
                                            </div>
                                            {{--                                        <div class="alert_none" id="regionError">Город должен совподать соответствующему региону</div>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="place_an_ad_form_input_field_wrapper field_box">
                                    <input type="text" placeholder="Год выпуска" class="place_an_ad_form_input_field" name="year_of_issue">
                                    <div class="alert_none alert-danger-year_of_issue" ></div>
                                </div>
{{--                                <div class="place_an_ad_form_input_field_wrapper field_box">--}}
{{--                                    <input type="text" placeholder="Коробка передач" name="transmission" class="place_an_ad_form_input_field">--}}
{{--                                    <div class="alert_none alert-danger-transmission" ></div>--}}
{{--                                </div>--}}
                                <div class="place_an_ad_form_inputs_first_wrapper">
                                    <div class="find_transport_form_select_wrapper">
                                        <div class="find_transport_form_select_title_wrapper">
                                            <input type="hidden" class="hidden_category_data" name="transmission" value="">
                                            <p class="find_transport_form_select_title">Коробка передач</p>
                                        </div>
                                        <div class="find_transport_form_select_hidden_wrapper">
                                            <p class="find_transport_form_select_hidden_info" data-id="auto" data-info="auto">auto</p>
                                            <p class="find_transport_form_select_hidden_info" data-id="manual" data-info="manual">manual</p>
                                        </div>
{{--                                        <div class="alert_none" id="regionError">Город должен совподать соответствующему региону</div>--}}
                                    </div>
                                </div>
                                <div class="registration_input_type_files_label_img_wrapper place_an_ad_form_input_type_file_img_wrapper ">
                                    <label for="fileinput_form2" class="registration_input_type_file file_label place_an_ad_form_input_label">
                                        <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.36" d="M0.52 21V15.4H15.56V0.119998H21.56V15.4H36.84V21H21.56V36.44H15.56V21H0.52Z" fill="black"/>
                                        </svg>
                                        <span class="file_span"></span>
                                        <input type="file" id="fileinput_form2" name="image" hidden>
                                    </label>
                                    <div class="registration_input-type_file_img_wrapper" style="display:none">
                                        <img src="" alt="" id="registration_input-type_file_img">
                                        <div  class="registration_input-type_file_img_delete_btn">
                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.20898 2.5H10.9173V3.5H9.83398V10C9.83398 10.1326 9.77692 10.2598 9.67533 10.3536C9.57375 10.4473 9.43598 10.5 9.29232 10.5H1.70898C1.56533 10.5 1.42755 10.4473 1.32597 10.3536C1.22439 10.2598 1.16732 10.1326 1.16732 10V3.5H0.0839844V2.5H2.79232V1C2.79232 0.867392 2.84939 0.740215 2.95097 0.646447C3.05255 0.552678 3.19033 0.5 3.33398 0.5H7.66732C7.81098 0.5 7.94875 0.552678 8.05033 0.646447C8.15192 0.740215 8.20898 0.867392 8.20898 1V2.5ZM8.75065 3.5H2.25065V9.5H8.75065V3.5ZM3.87565 5H4.95898V8H3.87565V5ZM6.04232 5H7.12565V8H6.04232V5ZM3.87565 1.5V2.5H7.12565V1.5H3.87565Z" fill="white"/></svg>
                                        </div>
                                    </div>
                                </div>
                                <button class="place_an_ad_form_btn" type="submit">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
    @include('includes_file.footer')
@endsection

