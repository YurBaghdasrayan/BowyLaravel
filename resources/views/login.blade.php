@extends('layouts.app')
@section('title')
<title>Главная</title>
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}
@endsection

{{--{{session()->get('login_error')}}--}}
@section('content')
    @include('includes_file.header')
    <main>
        <section class="login">
            <div class="login_wrapper">



                <div class="login_form_social_links_wrapper">
                    @if(session()->has('message'))
                        <div class="alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <form action="{{route('create_login')}}" class="login_form_wrapper" method="post">
                        @csrf
                        @if(session()->has('success'))
                            <div class="succses1">
                                <p class="succsestext">
                                    <img class="succsesimg" src="{{asset('images/emoji.png')}}"/>
                                    Вы успешно прошли регистрацию</p>
                            </div>
                        @endif
                        <h1 class="login_form_title">Войдите или зарегистрируйтесь</h1>
                        <div class="login_form_inputs_wrapper">
                            <div class="login_form_input">
                                <input type="email" class="login_form_input_field" placeholder="Email" name="email">
                                @if($errors->has('email'))
                                    <div class="alert alert-danger" >{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="login_form_input">
                                <div style="position:relative;" class="password_group">
                                    <img class="password_visibility show_icon active_show_icon" src="{{asset('images/icons/view.png')}}" alt="">
                                    <img class="password_visibility hide_icon" src="{{asset('images/icons/hide.png')}}" alt="">
                                    <input id="passwordInp" type="password" class="login_form_input_field" placeholder="Пароль" name="password">
                                </div>
                                @if($errors->has('password'))
                                    <div class="alert alert-danger" >{{ $errors->first('password') }}</div>
                                @endif
                                @if(session()->has('login_error'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('login_error') }}
                                    </div>
                                @endif
                            </div>
                            <div class="chekdiv">
                                <label for="rememberme" class="rememberme">
                                    <input type="checkbox" id="rememberme" name="rememberme" class="chek">
                                    <p class="">Запомните меня</p>

                                </label>

                            </div>

                            <div class="forgot-password">
                                <a href="{{route('forgot-password')}}">Забыли пароль</a>
                            </div>
                            <button type="submit" value="save" class="login_form_btn">Войти</button>
                        </div>
                    </form>
                    <div class="login_social_links_title_wrapper">
                        <p class="login_social_links_title">Войти через социальные сети</p>
                        <div class="login_social_links_wrapper">
                            <a href="" class="footer_social_link">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="44" height="46"><path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"/><path fill="#fff" d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z"/></svg>
                            </a>
                            <a href="" class="footer_social_link">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="44" height="46"><radialGradient id="yOrnnhliCrdS2gy~4tD8ma" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fd5"/><stop offset=".328" stop-color="#ff543f"/><stop offset=".348" stop-color="#fc5245"/><stop offset=".504" stop-color="#e64771"/><stop offset=".643" stop-color="#d53e91"/><stop offset=".761" stop-color="#cc39a4"/><stop offset=".841" stop-color="#c837ab"/></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8ma)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"/><radialGradient id="yOrnnhliCrdS2gy~4tD8mb" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#4168c9"/><stop offset=".999" stop-color="#4168c9" stop-opacity="0"/></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8mb)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"/><path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"/><circle cx="31.5" cy="16.5" r="1.5" fill="#fff"/><path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"/></svg>
                            </a>
                            <a href="" class="footer_social_link">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="44" height="46"><path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/></svg>
                            </a>
                            <a href="" class="footer_social_link">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="44" height="46"><linearGradient id="_osn9zIN2f6RhTsY8WhY4a" x1="10.341" x2="40.798" y1="8.312" y2="38.769" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2aa4f4"/><stop offset="1" stop-color="#007ad9"/></linearGradient><path fill="url(#_osn9zIN2f6RhTsY8WhY4a)" d="M46.105,11.02c-1.551,0.687-3.219,1.145-4.979,1.362c1.789-1.062,3.166-2.756,3.812-4.758 c-1.674,0.981-3.529,1.702-5.502,2.082C37.86,8.036,35.612,7,33.122,7c-4.783,0-8.661,3.843-8.661,8.582 c0,0.671,0.079,1.324,0.226,1.958c-7.196-0.361-13.579-3.782-17.849-8.974c-0.75,1.269-1.172,2.754-1.172,4.322 c0,2.979,1.525,5.602,3.851,7.147c-1.42-0.043-2.756-0.438-3.926-1.072c0,0.026,0,0.064,0,0.101c0,4.163,2.986,7.63,6.944,8.419 c-0.723,0.198-1.488,0.308-2.276,0.308c-0.559,0-1.104-0.063-1.632-0.158c1.102,3.402,4.299,5.889,8.087,5.963 c-2.964,2.298-6.697,3.674-10.756,3.674c-0.701,0-1.387-0.04-2.065-0.122C7.73,39.577,12.283,41,17.171,41 c15.927,0,24.641-13.079,24.641-24.426c0-0.372-0.012-0.742-0.029-1.108C43.483,14.265,44.948,12.751,46.105,11.02"/></svg>

                            </a>
                        </div>
                    </div>
                    <div class="login_registration_link_wrapper">
                        <p class="login_registration_link_title">Еще нет аккаунта?</p>
                        <a href="{{route('registration')}}" class="login_registration_link">Зарегистрироваться</a>
                    </div>
                </div>
                <div class="login_info_wrapper">
                    <p class="login_info">Аренда - это просто.</p>
                </div>
            </div>
        </section>
    </main>
    </div>
    @include('includes_file.footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/script.js') }}">
    </script>
@endsection
