@extends('layouts.app')
@section('title')
    <title>Главная</title>
@endsection
@section('content')
    @include('includes_file.header')
        <main>
            <section class="profile_settings">
                <div class="profile_settings_wrapper">
                    <div class="profile_settings_items_wrapper">
                        <div class="profile_settings_first_item">
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
                                <a href="{{route("profile-active-ads")}}" class="active_inactive_ads_first_item_link">Мои объявления</a>
                                <a href="" class="active_inactive_ads_first_item_link active">Настройки профиля</a>
                                <a href="" class="active_inactive_ads_first_item_link notification_link">Оповещения
                                    <div class="notification_icon">
                                        <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="4" cy="4" r="4" fill="#FF5B37"/>
                                        </svg>
                                    </div>
                                </a>
                                <a href="{{route('paid-services')}}" class="active_inactive_ads_first_item_link">Платные услги</a>
                            </div>
                        </div>
                        <form action="" class="profile_settings_form">
                            <div class="profile_settings_form_textarea">
                                <input type="text" class="profile_settings_form_input_field" readonly placeholder="Имя" name="Имя">
                                <div class="profile_settings_form_textarea_icon">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.796 5.2645L8.7355 4.204L1.75 11.1895V12.25H2.8105L9.796 5.2645ZM10.8565 4.204L11.917 3.1435L10.8565 2.083L9.796 3.1435L10.8565 4.204ZM3.4315 13.75H0.25V10.5678L10.3263 0.491502C10.4669 0.350898 10.6576 0.271912 10.8565 0.271912C11.0554 0.271912 11.2461 0.350898 11.3868 0.491502L13.5085 2.61325C13.6491 2.7539 13.7281 2.94463 13.7281 3.1435C13.7281 3.34237 13.6491 3.53311 13.5085 3.67375L3.43225 13.75H3.4315Z" fill="black"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="profile_settings_form_textarea">
                                <input type="text" class="profile_settings_form_input_field" readonly placeholder="Фамилия" name="Фамилия">
                                <div class="profile_settings_form_textarea_icon">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.796 5.2645L8.7355 4.204L1.75 11.1895V12.25H2.8105L9.796 5.2645ZM10.8565 4.204L11.917 3.1435L10.8565 2.083L9.796 3.1435L10.8565 4.204ZM3.4315 13.75H0.25V10.5678L10.3263 0.491502C10.4669 0.350898 10.6576 0.271912 10.8565 0.271912C11.0554 0.271912 11.2461 0.350898 11.3868 0.491502L13.5085 2.61325C13.6491 2.7539 13.7281 2.94463 13.7281 3.1435C13.7281 3.34237 13.6491 3.53311 13.5085 3.67375L3.43225 13.75H3.4315Z" fill="black"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="profile_settings_form_textarea">
                                <input type="text" class="profile_settings_form_input_field" readonly placeholder="Электронная почта" name="Электронная почта">
                                <div class="profile_settings_form_textarea_icon">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.796 5.2645L8.7355 4.204L1.75 11.1895V12.25H2.8105L9.796 5.2645ZM10.8565 4.204L11.917 3.1435L10.8565 2.083L9.796 3.1435L10.8565 4.204ZM3.4315 13.75H0.25V10.5678L10.3263 0.491502C10.4669 0.350898 10.6576 0.271912 10.8565 0.271912C11.0554 0.271912 11.2461 0.350898 11.3868 0.491502L13.5085 2.61325C13.6491 2.7539 13.7281 2.94463 13.7281 3.1435C13.7281 3.34237 13.6491 3.53311 13.5085 3.67375L3.43225 13.75H3.4315Z" fill="black"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="profile_settings_form_textarea">
                                <input type="text" class="profile_settings_form_input_field" readonly placeholder="Номер телефона" name="Номер телефона">
                                <div class="profile_settings_form_textarea_icon">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.796 5.2645L8.7355 4.204L1.75 11.1895V12.25H2.8105L9.796 5.2645ZM10.8565 4.204L11.917 3.1435L10.8565 2.083L9.796 3.1435L10.8565 4.204ZM3.4315 13.75H0.25V10.5678L10.3263 0.491502C10.4669 0.350898 10.6576 0.271912 10.8565 0.271912C11.0554 0.271912 11.2461 0.350898 11.3868 0.491502L13.5085 2.61325C13.6491 2.7539 13.7281 2.94463 13.7281 3.1435C13.7281 3.34237 13.6491 3.53311 13.5085 3.67375L3.43225 13.75H3.4315Z" fill="black"/>
                                    </svg>
                                </div>
                            </div>
                            <button type="button" class="profile_settings_form_btn">Сохранить</button>
                        </form>

                    </div>
                </div>
            </section>
        </main>
        @include('includes_file.footer')
@endsection