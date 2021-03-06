@extends('layouts.app')

@section('content')
    <div class="bowy_mian_wrapper" id="active_inactive_ads_page">
    @include('includes_file.header')
        <main>
            <section class="place_an_ad">
                <div class="place_an_ad_wrapper">
                    <div class="place_an_ad_items_wrapper">
                        @include('includes_file.user')

                        <form action="" class="place_an_ad_form top">
                            <div class="place_an_ad_form_inputs_wrapper">
                                <div class="place_an_ad_form_inputs_first_wrapper">
                                    <div class="place_an_ad_form_input_field_wrapper">
                                        <input type="text" placeholder="Заголовок объявления" class="place_an_ad_form_input_field" name="Заголовок объявления">
                                    </div>
                                    <div class="place_an_ad_form_input_field_wrapper price_input_field">
                                        <input type="text" placeholder="Стоимость" name="Стоимость" class="place_an_ad_form_input_field">
                                    </div>
                                </div>
                                <div class="place_an_ad_form_inputs_first_wrapper">
                                    <div class="find_transport_form_select_wrapper">
                                        <div class="find_transport_form_select_title_wrapper">
                                            <p class="find_transport_form_select_title">Выберите категорию</p>
                                        </div>
                                        <div class="find_transport_form_select_hidden_wrapper">
                                            @foreach($category as $categoryes)
                                               <p class="find_transport_form_select_hidden_info" data-info="{{$categoryes->name}}">{{$categoryes->name}}</p>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="place_an_ad_form_inputs_first_wrapper">
                                    <div class="place_an_ad_form_input_field_wrapper">
                                        <input type="text" placeholder="Регион" name="region" class="place_an_ad_form_input_field">
                                    </div>
                                    <div class="place_an_ad_form_input_field_wrapper">
                                        <input type="text" placeholder="Город" name="city" class="place_an_ad_form_input_field">
                                    </div>
                                </div>
                                <div class="place_an_ad_form_input_field_wrapper field_box">
                                    <input type="text" placeholder="Марка автомобиля" class="place_an_ad_form_input_field" name="Марка автомобиля">
                                </div>
                                <div class="place_an_ad_form_input_field_wrapper field_box">
                                    <input type="text" placeholder="Описание объявления" name="Описание объявления" class="place_an_ad_form_input_field">
                                </div>
                            </div>
                            <div class="place_an_ad_form_inputs_wrapper">
                                <p class="place_an_ad_form_inputs_title">Характеристики</p>
                                <div class="place_an_ad_form_inputs_first_wrapper">
                                    <div class="place_an_ad_form_input_field_wrapper">
                                        <input type="text" placeholder="Тип кузова" class="place_an_ad_form_input_field" name="Тип кузова">
                                    </div>
                                    <div class="place_an_ad_form_input_field_wrapper">
                                        <input type="text" placeholder="Руль" name="Руль" class="place_an_ad_form_input_field">
                                    </div>
                                </div>
                                <div class="place_an_ad_form_input_field_wrapper field_box">
                                    <input type="text" placeholder="Год выпуска" class="place_an_ad_form_input_field" name="Год выпуска">
                                </div>
                                <div class="place_an_ad_form_input_field_wrapper field_box">
                                    <input type="text" placeholder="Коробка передач" name="Коробка передач" class="place_an_ad_form_input_field">
                                </div>
                                <div class="registration_input_type_files_label_img_wrapper place_an_ad_form_input_type_file_img_wrapper ">
                                    <label for="fileinput_form2" class="registration_input_type_file file_label place_an_ad_form_input_label">
                                        <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.36" d="M0.52 21V15.4H15.56V0.119998H21.56V15.4H36.84V21H21.56V36.44H15.56V21H0.52Z" fill="black"/>
                                        </svg>
                                        <span class="file_span"></span>
                                        <input type="file" id="fileinput_form2" hidden>

                                    </label>
                                    <div class="registration_input-type_file_img_wrapper" style="display:none">
                                        <img src="" alt="" id="registration_input-type_file_img">
                                        <div  class="registration_input-type_file_img_delete_btn">
                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.20898 2.5H10.9173V3.5H9.83398V10C9.83398 10.1326 9.77692 10.2598 9.67533 10.3536C9.57375 10.4473 9.43598 10.5 9.29232 10.5H1.70898C1.56533 10.5 1.42755 10.4473 1.32597 10.3536C1.22439 10.2598 1.16732 10.1326 1.16732 10V3.5H0.0839844V2.5H2.79232V1C2.79232 0.867392 2.84939 0.740215 2.95097 0.646447C3.05255 0.552678 3.19033 0.5 3.33398 0.5H7.66732C7.81098 0.5 7.94875 0.552678 8.05033 0.646447C8.15192 0.740215 8.20898 0.867392 8.20898 1V2.5ZM8.75065 3.5H2.25065V9.5H8.75065V3.5ZM3.87565 5H4.95898V8H3.87565V5ZM6.04232 5H7.12565V8H6.04232V5ZM3.87565 1.5V2.5H7.12565V1.5H3.87565Z" fill="white"/></svg>
                                        </div>
                                    </div>
                                </div>
                                <button class="place_an_ad_form_btn" type="button">Сохранить</button>
                            </div>
                        </form>

                    </div>
                </div>
            </section>
        </main>
    @include('includes_file.footer')
@endsection
