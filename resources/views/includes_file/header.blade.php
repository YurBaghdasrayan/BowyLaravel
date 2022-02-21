<header class="header">
    <div class="header_wrapper">
        <div class="header_logo_wrapper">
            <a href="{{route('home.index')}}" class="header_logo">
                <img src="../images/new_logo.svg" alt="">
            </a>
        </div>
        <div class="hamburger_menu_mobile_version">
            <div class="hamburger_menu">
                <span class="hamburger_menu_line"></span>
                <span class="hamburger_menu_line"></span>
                <span class="hamburger_menu_line"></span>
            </div>
            <div class="mobile_version">
                <div class="mobile_version_wrapper">
                    <div class="mobile_version_close">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 24px;"><path fill-rule="evenodd" clip-rule="evenodd" d="M19.66 4.34a1.16 1.16 0 00-1.642 0l-6.02 6.02-6.016-6.017A1.16 1.16 0 104.34 5.984l6.017 6.018-6.017 6.017a1.16 1.16 0 001.641 1.642L12 13.643l6.02 6.02a1.16 1.16 0 001.641-1.642l-6.02-6.02 6.02-6.019a1.16 1.16 0 000-1.641z" fill="currentColor"></path></svg>

                    </div>
                    @if(auth()->check())
                    <a href="{{route('user-logout')}}" class="header_registration_log_in_btn">выйти из системы</a>
                    <a href="{{route('profile-place-anad')}}" class="header_link">Разместить объявление</a>

                    @else
                        <a href="{{route('user-logout')}}" class="header_registration_log_in_btn">asd</a>
                        <a href="{{route('profile-place-anad')}}" class="header_link">Разместить объявление</a>
                    @endif
                </div>
            </div>
        </div>

        <div class="header_registration_log_in_btn_link_wrapper">
            @if(auth()->check())
            <a href="{{route('user-logout')}}" class="header_registration_log_in_btn" >Выйти из системы</a>
            <a href="{{route('profile-place-anad')}}" class="header_link">Разместить объявление</a>
            @else
                <a href="{{route('user-logout')}}" class="header_registration_log_in_btn">Вход и регистрация</a>
                <a href="{{route('profile-place-anad')}}" class="header_link">Разместить объявление</a>
            @endif
        </div>
        <div class="active_inactive_ads_user_img">
            <a href=""><img src="{{asset('upload/'.auth()->user()->image)}}" alt=""></a>
        </div>
    </div>
</header>
