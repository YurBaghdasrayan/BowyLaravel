@extends('layouts.app')
@section('title')
    <title>Главная</title>
@endsection
@section('content')
    <div class="bowy_mian_wrapper" id="profile_settings_page">
        @include('includes_file.header')
        <main>
            <section class="profile_settings">
                <div class="profile_settings_wrapper">
                    <div class="profile_settings_items_wrapper">
                        @include('includes_file.user')
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
    </div>
@endsection
