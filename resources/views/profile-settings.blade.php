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
                        <form action="{{route('profile-settings')}}" class="profile_settings_form" method="post">
                            @csrf
                            @method('put')
                            @if (session('status'))
                                <div class="alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            @if (session('emailerror'))
                                <div class="alert alert-danger">
                                    {{ session('emailerror') }}
                                </div>
                            @endif

                            <div class="profile_settings_form_textarea">
                                <input type="text" class="profile_settings_form_input_field" readonly placeholder="Имя" name="name" value="{{auth()->user()->name}}">

                                <div class="profile_settings_form_textarea_icon">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.796 5.2645L8.7355 4.204L1.75 11.1895V12.25H2.8105L9.796 5.2645ZM10.8565 4.204L11.917 3.1435L10.8565 2.083L9.796 3.1435L10.8565 4.204ZM3.4315 13.75H0.25V10.5678L10.3263 0.491502C10.4669 0.350898 10.6576 0.271912 10.8565 0.271912C11.0554 0.271912 11.2461 0.350898 11.3868 0.491502L13.5085 2.61325C13.6491 2.7539 13.7281 2.94463 13.7281 3.1435C13.7281 3.34237 13.6491 3.53311 13.5085 3.67375L3.43225 13.75H3.4315Z" fill="black"/>
                                    </svg>
                                </div>
                            </div>
                            @if($errors->has('name'))
                                <div class="alert alert-danger" >{{ $errors->first('name') }}</div>
                            @endif
                            <div class="profile_settings_form_textarea">
                                <input type="text" class="profile_settings_form_input_field"  readonly placeholder="Фамилия"   name="surname" value="{{auth()->user()->surname}}">
                                <div class="profile_settings_form_textarea_icon">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.796 5.2645L8.7355 4.204L1.75 11.1895V12.25H2.8105L9.796 5.2645ZM10.8565 4.204L11.917 3.1435L10.8565 2.083L9.796 3.1435L10.8565 4.204ZM3.4315 13.75H0.25V10.5678L10.3263 0.491502C10.4669 0.350898 10.6576 0.271912 10.8565 0.271912C11.0554 0.271912 11.2461 0.350898 11.3868 0.491502L13.5085 2.61325C13.6491 2.7539 13.7281 2.94463 13.7281 3.1435C13.7281 3.34237 13.6491 3.53311 13.5085 3.67375L3.43225 13.75H3.4315Z" fill="black"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="profile_settings_form_textarea">
                                <input type="text" class="profile_settings_form_input_field" readonly placeholder="Электронная почта" value="{{auth()->user()->email}}" name="email" >

                                <div class="profile_settings_form_textarea_icon">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.796 5.2645L8.7355 4.204L1.75 11.1895V12.25H2.8105L9.796 5.2645ZM10.8565 4.204L11.917 3.1435L10.8565 2.083L9.796 3.1435L10.8565 4.204ZM3.4315 13.75H0.25V10.5678L10.3263 0.491502C10.4669 0.350898 10.6576 0.271912 10.8565 0.271912C11.0554 0.271912 11.2461 0.350898 11.3868 0.491502L13.5085 2.61325C13.6491 2.7539 13.7281 2.94463 13.7281 3.1435C13.7281 3.34237 13.6491 3.53311 13.5085 3.67375L3.43225 13.75H3.4315Z" fill="black"/>
                                    </svg>
                                </div>
                            </div>
                            @if($errors->has('email'))
                                <div class="alert alert-danger" >{{ $errors->first('email') }}</div>
                            @endif
                            <div class="profile_settings_form_textarea">
                                <input type="text" class="profile_settings_form_input_field" readonly placeholder="Номер телефона" name="number" value="{{auth()->user()->number}}">

                                <div class="profile_settings_form_textarea_icon">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.796 5.2645L8.7355 4.204L1.75 11.1895V12.25H2.8105L9.796 5.2645ZM10.8565 4.204L11.917 3.1435L10.8565 2.083L9.796 3.1435L10.8565 4.204ZM3.4315 13.75H0.25V10.5678L10.3263 0.491502C10.4669 0.350898 10.6576 0.271912 10.8565 0.271912C11.0554 0.271912 11.2461 0.350898 11.3868 0.491502L13.5085 2.61325C13.6491 2.7539 13.7281 2.94463 13.7281 3.1435C13.7281 3.34237 13.6491 3.53311 13.5085 3.67375L3.43225 13.75H3.4315Z" fill="black"/>
                                    </svg>
                                </div>

                            </div>
                            @if($errors->has('number'))
                                <div class="alert alert-danger" >{{ $errors->first('number') }}</div>
                            @endif
                            <button type="submit" class="profile_settings_form_btn" value="save">Сохранить</button>
                        </form>
                    </div>
                </div>
            </section>
        </main>
@include('includes_file.footer')
    </div>
@endsection
