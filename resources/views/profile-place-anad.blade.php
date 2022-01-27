@extends('layouts.app')

@section('content')
    <div class="bowy_mian_wrapper" id="active_inactive_ads_page">
    @include('includes_file.header')
        <main>
            <section class="place_an_ad">
                <div class="place_an_ad_wrapper">
                    <div class="place_an_ad_items_wrapper">
                        <div class="place_an_ad_first_item">
                            <div class="active_inactive_ads_user_img_name_info">
                                <div class="active_inactive_ads_user_img">
                                    <img src="../images/user_img1.png" alt="">
                                </div>
                                <div class="active_inactive_ads_user_info">
                                    <p class="active_inactive_ads_user_name">Михаил Иванов</p>
                                    <p class="active_inactive_ads_user_city_name">г. Сочи</p>
                                </div>
                            </div>
                            <div class="active_inactive_ads_first_item_chat_favourites_links_wrapper">
                                <a href="" class="active_inactive_ads_chat_link">
                                    <div class="active_inactive_ads_chat_link_icon1">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.07568 16.3533L0.666513 17.3333L1.64651 12.9242C1.00112 11.717 0.664452 10.3689 0.666513 9C0.666513 4.3975 4.39735 0.666667 8.99985 0.666667C13.6023 0.666667 17.3332 4.3975 17.3332 9C17.3332 13.6025 13.6023 17.3333 8.99985 17.3333C7.63098 17.3354 6.28286 16.9987 5.07568 16.3533Z" fill="#00A3FF"/>
                                        </svg>
                                    </div>
                                    <div class="active_inactive_ads_chat_link_icon2">
                                        <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="4" cy="4" r="4" fill="#FF5B37"/>
                                        </svg>
                                    </div>
                                </a>
                                <a href="" class="active_inactive_ads_favourites_link">
                                    <div class="active_inactive_ads_favourites_link_icon1">
                                        <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 16.7383L4.53475 20.3573L5.9785 13.09L0.538086 8.05933L7.89617 7.18667L11 0.458333L14.1038 7.18667L21.4619 8.05933L16.0215 13.09L17.4653 20.3573L11 16.7383Z" fill="#FFD708"/>
                                        </svg>


                                    </div>

                                </a>
                                <a href="" class="active_inactive_ads_first_link">
                                    <div class="active_inactive_ads_first_icon1">
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.4998 0.5C16.7209 0.5 16.9328 0.587797 17.0891 0.744078C17.2454 0.900358 17.3332 1.11232 17.3332 1.33333V7.16667H15.6665V2.16667H2.33317V13.8333H7.33317V15.5H1.49984C1.27882 15.5 1.06686 15.4122 0.910582 15.2559C0.754301 15.0996 0.666504 14.8877 0.666504 14.6667V1.33333C0.666504 1.11232 0.754301 0.900358 0.910582 0.744078C1.06686 0.587797 1.27882 0.5 1.49984 0.5H16.4998ZM16.4998 8.83333C16.7209 8.83333 16.9328 8.92113 17.0891 9.07741C17.2454 9.23369 17.3332 9.44565 17.3332 9.66667V14.6667C17.3332 14.8877 17.2454 15.0996 17.0891 15.2559C16.9328 15.4122 16.7209 15.5 16.4998 15.5H9.83317C9.61216 15.5 9.4002 15.4122 9.24392 15.2559C9.08764 15.0996 8.99984 14.8877 8.99984 14.6667V9.66667C8.99984 9.44565 9.08764 9.23369 9.24392 9.07741C9.4002 8.92113 9.61216 8.83333 9.83317 8.83333H16.4998ZM15.6665 10.5H10.6665V13.8333H15.6665V10.5ZM8.58317 3.83333L6.88067 5.53583L8.75567 7.41083L7.57734 8.58917L5.70234 6.71417L3.99984 8.41667V3.83333H8.58317Z" fill="#FF5B37"/>
                                        </svg>

                                    </div>

                                </a>
                            </div>
                            <div class="active_inactive_ads_first_item_links_wrapper">
                                <a href="{{route('profile-active-ads')}}active_inactive_ads.html" class="active_inactive_ads_first_item_link">Мои объявления</a>
                                <a href="" class="active_inactive_ads_first_item_link active">Настройки профиля</a>
                                <a href="" class="active_inactive_ads_first_item_link notification_link">Оповещения
                                    <div class="notification_icon">
                                        <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="4" cy="4" r="4" fill="#FF5B37"/>
                                        </svg>
                                    </div>
                                </a>
                                <a href="{{route("paid-services")}}" class="active_inactive_ads_first_item_link">Платные услги</a>
                            </div>
                        </div>
                        <form action="" class="place_an_ad_form">
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
                                    <div class="place_an_ad_form_input_field_wrapper">
                                        <input type="text" placeholder="Название транспорта" class="place_an_ad_form_input_field" name="Название транспорта">
                                    </div>
                                    <div class="place_an_ad_form_input_field_wrapper">
                                        <input type="text" placeholder="Адрес" name="Адрес" class="place_an_ad_form_input_field">
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
