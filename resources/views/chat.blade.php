@extends('layouts.app')
@section('title')
    <title>Главная</title>
@endsection
@section('content')
    @include('includes_file.header')
    <div class="bowy_mian_wrapper" id="chat_page">
        <main>
            <section class="chat">
                <div class="chat_wrapper">
                    <div class="chat_items_wrapper">
                        <div class="chat_first_item">
                            <div class="active_inactive_ads_user_img_name_info">
                                <div class="active_inactive_ads_user_img">
                                    <img src="../images/user_img1.png" alt="">
                                </div>
                                <div class="active_inactive_ads_user_info">
                                    <p class="active_inactive_ads_user_name">Михаил Иванов</p>
                                    <p class="active_inactive_ads_user_city_name">г. Сочи</p>
                                </div>
                            </div>
                            <div class="chat_first_item_links_wrapper">
                                <a href="" class="chat_first_item_call_link">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.00414 6.02293C5.73195 7.30156 6.79084 8.36045 8.06947 9.08826L8.75514 8.12802C8.8654 7.97362 9.02843 7.86498 9.21339 7.82267C9.39834 7.78037 9.59239 7.80732 9.75882 7.89843C10.8558 8.49794 12.0673 8.8585 13.3136 8.9564C13.5081 8.97182 13.6896 9.05998 13.8221 9.2033C13.9545 9.34663 14.028 9.53459 14.0279 9.72972V13.1906C14.028 13.3827 13.9568 13.5679 13.8281 13.7105C13.6994 13.853 13.5225 13.9428 13.3314 13.9624C12.9203 14.005 12.5061 14.026 12.0888 14.026C5.44936 14.026 0.0664062 8.64304 0.0664062 2.00356C0.0664062 1.58626 0.0873486 1.17207 0.130009 0.760979C0.149597 0.569936 0.239362 0.392953 0.381929 0.264285C0.524496 0.135616 0.709728 0.0644117 0.901772 0.0644531H4.36268C4.5578 0.0644287 4.74577 0.137946 4.88909 0.270348C5.03242 0.402749 5.12058 0.584306 5.136 0.778819C5.2339 2.02511 5.59446 3.23658 6.19397 4.33358C6.28508 4.50001 6.31203 4.69405 6.26972 4.87901C6.22742 5.06396 6.11878 5.227 5.96438 5.33726L5.00414 6.02293ZM3.04797 5.51333L4.52169 4.46079C4.10345 3.55801 3.8169 2.5999 3.67081 1.61574H1.62545C1.62079 1.74449 1.61846 1.87402 1.61846 2.00356C1.61769 7.78674 6.30566 12.4747 12.0888 12.4747C12.2184 12.4747 12.3479 12.4724 12.4767 12.467V10.4216C11.4925 10.2755 10.5344 9.98895 9.63161 9.57071L8.57907 11.0444C8.1553 10.8798 7.74371 10.6854 7.34735 10.4627L7.30236 10.4371C5.781 9.57127 4.52113 8.3114 3.6553 6.79004L3.6297 6.74505C3.40702 6.34869 3.21263 5.93709 3.04797 5.51333Z" fill="white"/>
                                    </svg>
                                </a>
                                <a href="" class="chat_first_item_message_link">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.30314 14.8893L0.199228 15.8014L1.11138 11.6975C0.510672 10.5739 0.197309 9.31911 0.199228 8.045C0.199228 3.76114 3.67177 0.288593 7.95564 0.288593C12.2395 0.288593 15.712 3.76114 15.712 8.045C15.712 12.3289 12.2395 15.8014 7.95564 15.8014C6.68153 15.8033 5.42675 15.49 4.30314 14.8893ZM4.52808 13.2503L5.03457 13.5218C5.93319 14.002 6.93675 14.2523 7.95564 14.2501C9.1829 14.2501 10.3826 13.8862 11.403 13.2044C12.4235 12.5226 13.2188 11.5534 13.6884 10.4196C14.1581 9.28576 14.281 8.03812 14.0415 6.83444C13.8021 5.63077 13.2111 4.52512 12.3433 3.65732C11.4755 2.78951 10.3699 2.19853 9.1662 1.95911C7.96252 1.71968 6.71488 1.84256 5.58104 2.31221C4.4472 2.78186 3.47809 3.57719 2.79626 4.59762C2.11443 5.61805 1.75051 6.81775 1.75051 8.045C1.75051 9.07971 2.00259 10.0756 2.47961 10.9661L2.75031 11.4726L2.24227 13.7584L4.52808 13.2503Z" fill="white"/>
                                    </svg>

                                </a>
                            </div>
                        </div>
                        <div class="chat_second_item">
                            <div class="chat_user_info_img_wrapper">
                                <div class="chat_user_img_icon_wrapper">
                                    <div class="chat_user_img_icon">
                                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.828 7.00023L7.778 11.9502L6.364 13.3642L0 7.00023L6.364 0.63623L7.778 2.05023L2.828 7.00023Z" fill="#AABACD"/>
                                        </svg>
                                    </div>
                                    <div class="chat_user_img">
                                        <img src="../images/user_img2.png" alt="">
                                    </div>
                                </div>
                                <div class="chat_user_info">
                                    <p class="chat_user_name">Дмитрий</p>
                                    <div class="chat_user_car_info">
                                        <p class="chat_user_car_info1">Аренда авто, под залог</p>
                                        <div class="chat_user_car_info_box"></div>
                                        <p class="chat_user_car_info2">1 290 ₽ </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        @include('includes_file.footer')
    </div>
@endsection
