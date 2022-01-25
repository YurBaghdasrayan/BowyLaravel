@extends('layouts.app')
@section('title')
    <title>Главная</title>
@endsection
@section('content')
<div class="bowy_mian_wrapper">
    @include('includes_file.header')
    <main>
        <section class="registration">
            <div class="registration_wrapper">
                <div class="registration_form_links_wrapper">
                    <form action="{{route('create_user')}}" class="registration_form_wrapper" method="post">
                        @csrf
                        <h1 class="registration_form_title">зарегистрируйтесь</h1>
                        <div class="registration_form_inputs_wrapper">
                            <div class="registration_form_input">
                                <input type="text" class="registration_form_input_field" name="name" placeholder="Имя">
                                @if($errors->has('name'))
                                    <div class="alert alert-danger" role="alert">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                            <div class="registration_form_input">
                                <input type="text" class="registration_form_input_field" name="surname" placeholder="Фамилия">
                                @if($errors->has('surname'))
                                    <div class="alert alert-danger" role="alert">{{ $errors->first('surname') }}</div>
                                @endif
                            </div>
                            <div class="registration_form_input">
                                <input type="email" class="registration_form_input_field" placeholder="Email" name="email">
                                @if($errors->has('email'))
                                    <div class="alert alert-danger" >{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="registration_form_input">
                                <input type="password" class="registration_form_input_field" placeholder="Пароль" name="password">
                                @if($errors->has('password'))

                                    <div class="alert alert-danger" role="alert">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                            <div class="registration_form_input">
                                <input type="password" class="registration_form_input_field" placeholder="Повторить пароль" name="password_confirmation">
                                @if($errors->has('password_confirmation'))
                                    <div class="alert alert-danger" role="alert"> {{ $errors->first('password_confirmation') }}</div>
                                @endif
                            </div>
                            <button type="submit" class="registration_form_btn" value="save">Зарегистрироваться</button>
                        </div>
                    </form>

                </div>
                <div class="login_info_wrapper">
                    <p class="login_info">Аренда - это просто.</p>
                </div>
            </div>
        </section>
    </main>
</div>
@endsection

