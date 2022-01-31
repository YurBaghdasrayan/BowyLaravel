@extends('layouts.app')

@section('content')
<div class="bowy_mian_wrapper" id="active_inactive_ads_page">
    @include('includes_file.header')
    <main>
        <section class="active_inactive_ads">
            <div class="active_inactive_ads_wrapper">
                <div class="active_inactive_ads_items_wrapper">
                    @include('includes_file.user')
                    <div class="active_inactive_ads_second_item">
                        <div class="active_inactive_ads_second_item_types_sorts_btns_wrapper">
                            <div class="active_inactive_ads_second_item_types_btns">
                                <button class="active_inactive_ads_second_item_types_btn active active_type_btn" data-id="open_div3">Активные</button>
                                <button class="active_inactive_ads_second_item_types_btn inactive_type_btn" data-id="open_div4">Неактивные</button>
                            </div>
                            <div class="active_inactive_ads_second_item_sorts_btns">
                                <button class="active_inactive_ads_second_item_sorts_btn active" data-id="open_div3">

                                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 0C19.2652 0 19.5196 0.105357 19.7071 0.292893C19.8946 0.48043 20 0.734784 20 1V17C20 17.2652 19.8946 17.5196 19.7071 17.7071C19.5196 17.8946 19.2652 18 19 18H1C0.734784 18 0.48043 17.8946 0.292893 17.7071C0.105357 17.5196 0 17.2652 0 17V1C0 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0H19ZM9 10H2V16H9V10ZM18 10H11V16H18V10ZM9 2H2V8H9V2ZM18 2H11V8H18V2Z" fill="url(#paint0_linear_30_8)"/>
                                        <defs>
                                            <linearGradient id="paint0_linear_30_8" x1="0" y1="0" x2="21.4561" y2="1.94613" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#B7B7B7"/>
                                                <stop offset="1" stop-color="#B7B7B7"/>
                                            </linearGradient>
                                        </defs>
                                    </svg>




                                </button>
                                <button class="active_inactive_ads_second_item_sorts_btn" data-id="open_div4">
                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0H18V2H0V0ZM0 7H18V9H0V7ZM0 14H18V16H0V14Z" fill="#B7B7B7"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="active_inactive_ads_second_items_wrapper open" id="open_div3">
                            <div class="active_inactive_ads_second_item_parent">
                                <div class="active_inactive_ads_second_item_child">
                                    <a href="" class="active_inactive_ads_second_item_child_link">
                                        <div class="active_inactive_ads_second_item_child_link_img1">
                                            <img src="../images/recent_announcements_item_child_link_img1.png" alt="">
                                        </div>
                                        <p class="inactive_title">Неактивно</p>

                                    </a>
                                    <div class="active_inactive_ads_second_item_child_info_box">
                                        <h1 class="active_inactive_ads_second_item_child_title">Аренда авто без залога</h1>
                                        <h1 class="active_inactive_ads_second_item_child_price">1 290 ₽ </h1>
                                        <p class="active_inactive_ads_second_item_child_info1">Лиговский проспект 11</p>
                                        <p class="active_inactive_ads_second_item_child_info2">Идейные соображения высшего порядка, а также укрепление и развитие структуры играет важную роль в формировании модели развития.</p>
                                        <div class="active_inactive_ads_second_item_child_edit_link_delete_btns_wrapper">
                                            <a href="" class="active_inactive_ads_second_item_child_edit_link">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.728 6.68599L11.314 5.27199L2 14.586V16H3.414L12.728 6.68599ZM14.142 5.27199L15.556 3.85799L14.142 2.44399L12.728 3.85799L14.142 5.27199ZM4.242 18H0V13.757L13.435 0.321992C13.6225 0.134521 13.8768 0.0292053 14.142 0.0292053C14.4072 0.0292053 14.6615 0.134521 14.849 0.321992L17.678 3.15099C17.8655 3.33852 17.9708 3.59283 17.9708 3.85799C17.9708 4.12316 17.8655 4.37746 17.678 4.56499L4.243 18H4.242Z" fill="white"/>
                                                </svg>


                                            </a>
                                            <a href="" class="active_inactive_ads_second_item_child_link2">
                                                <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.49189 7.06499L3.77789 18H18.2219L19.5079 7.06499L15.4979 9.73799L10.9999 3.44099L6.50189 9.73799L2.49189 7.06499ZM1.80089 4.19999L5.99989 6.99999L10.1859 1.13999C10.2784 1.01036 10.4005 0.904696 10.5421 0.831793C10.6837 0.75889 10.8406 0.720856 10.9999 0.720856C11.1591 0.720856 11.3161 0.75889 11.4577 0.831793C11.5993 0.904696 11.7214 1.01036 11.8139 1.13999L15.9999 6.99999L20.1999 4.19999C20.3588 4.09424 20.5447 4.0362 20.7356 4.03273C20.9265 4.02926 21.1144 4.0805 21.2771 4.18041C21.4398 4.28032 21.5705 4.42471 21.6537 4.59653C21.737 4.76834 21.7693 4.96039 21.7469 5.14999L20.1039 19.117C20.0752 19.3602 19.9583 19.5845 19.7753 19.7473C19.5922 19.91 19.3558 20 19.1109 20H2.88889C2.64395 20 2.40755 19.91 2.22451 19.7473C2.04148 19.5845 1.92454 19.3602 1.89589 19.117L0.252885 5.14899C0.230685 4.95947 0.263171 4.76756 0.346506 4.59591C0.429842 4.42425 0.560548 4.28003 0.723196 4.18025C0.885845 4.08048 1.07364 4.02932 1.26442 4.03281C1.45521 4.03631 1.641 4.09432 1.79989 4.19999H1.80089ZM10.9999 14C10.4695 14 9.96074 13.7893 9.58567 13.4142C9.2106 13.0391 8.99989 12.5304 8.99989 12C8.99989 11.4696 9.2106 10.9608 9.58567 10.5858C9.96074 10.2107 10.4695 9.99999 10.9999 9.99999C11.5303 9.99999 12.039 10.2107 12.4141 10.5858C12.7892 10.9608 12.9999 11.4696 12.9999 12C12.9999 12.5304 12.7892 13.0391 12.4141 13.4142C12.039 13.7893 11.5303 14 10.9999 14Z" fill="white"/>
                                                </svg>


                                            </a>
                                            <button class="active_inactive_ads_second_item_child_edit_link_delete_btn">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15 4H20V6H18V19C18 19.2652 17.8946 19.5196 17.7071 19.7071C17.5196 19.8946 17.2652 20 17 20H3C2.73478 20 2.48043 19.8946 2.29289 19.7071C2.10536 19.5196 2 19.2652 2 19V6H0V4H5V1C5 0.734784 5.10536 0.48043 5.29289 0.292893C5.48043 0.105357 5.73478 0 6 0H14C14.2652 0 14.5196 0.105357 14.7071 0.292893C14.8946 0.48043 15 0.734784 15 1V4ZM16 6H4V18H16V6ZM7 9H9V15H7V9ZM11 9H13V15H11V9ZM7 2V4H13V2H7Z" fill="white"/>
                                                </svg>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="active_inactive_ads_second_item_child">
                                    <a href="" class="active_inactive_ads_second_item_child_link">
                                        <div class="active_inactive_ads_second_item_child_link_img1">
                                            <img src="../images/recent_announcements_item_child_link_img1.png" alt="">
                                        </div>

                                        <p class="inactive_title">Неактивно</p>

                                    </a>
                                    <div class="active_inactive_ads_second_item_child_info_box">
                                        <h1 class="active_inactive_ads_second_item_child_title">Аренда авто без залога</h1>
                                        <h1 class="active_inactive_ads_second_item_child_price">1 290 ₽ </h1>
                                        <p class="active_inactive_ads_second_item_child_info1">Лиговский проспект 11</p>
                                        <p class="active_inactive_ads_second_item_child_info2">Идейные соображения высшего порядка, а также укрепление и развитие структуры играет важную роль в формировании модели развития.</p>
                                        <div class="active_inactive_ads_second_item_child_edit_link_delete_btns_wrapper">
                                            <a href="" class="active_inactive_ads_second_item_child_edit_link">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.728 6.68599L11.314 5.27199L2 14.586V16H3.414L12.728 6.68599ZM14.142 5.27199L15.556 3.85799L14.142 2.44399L12.728 3.85799L14.142 5.27199ZM4.242 18H0V13.757L13.435 0.321992C13.6225 0.134521 13.8768 0.0292053 14.142 0.0292053C14.4072 0.0292053 14.6615 0.134521 14.849 0.321992L17.678 3.15099C17.8655 3.33852 17.9708 3.59283 17.9708 3.85799C17.9708 4.12316 17.8655 4.37746 17.678 4.56499L4.243 18H4.242Z" fill="white"/>
                                                </svg>


                                            </a>
                                            <a href="" class="active_inactive_ads_second_item_child_link2">
                                                <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.49189 7.06499L3.77789 18H18.2219L19.5079 7.06499L15.4979 9.73799L10.9999 3.44099L6.50189 9.73799L2.49189 7.06499ZM1.80089 4.19999L5.99989 6.99999L10.1859 1.13999C10.2784 1.01036 10.4005 0.904696 10.5421 0.831793C10.6837 0.75889 10.8406 0.720856 10.9999 0.720856C11.1591 0.720856 11.3161 0.75889 11.4577 0.831793C11.5993 0.904696 11.7214 1.01036 11.8139 1.13999L15.9999 6.99999L20.1999 4.19999C20.3588 4.09424 20.5447 4.0362 20.7356 4.03273C20.9265 4.02926 21.1144 4.0805 21.2771 4.18041C21.4398 4.28032 21.5705 4.42471 21.6537 4.59653C21.737 4.76834 21.7693 4.96039 21.7469 5.14999L20.1039 19.117C20.0752 19.3602 19.9583 19.5845 19.7753 19.7473C19.5922 19.91 19.3558 20 19.1109 20H2.88889C2.64395 20 2.40755 19.91 2.22451 19.7473C2.04148 19.5845 1.92454 19.3602 1.89589 19.117L0.252885 5.14899C0.230685 4.95947 0.263171 4.76756 0.346506 4.59591C0.429842 4.42425 0.560548 4.28003 0.723196 4.18025C0.885845 4.08048 1.07364 4.02932 1.26442 4.03281C1.45521 4.03631 1.641 4.09432 1.79989 4.19999H1.80089ZM10.9999 14C10.4695 14 9.96074 13.7893 9.58567 13.4142C9.2106 13.0391 8.99989 12.5304 8.99989 12C8.99989 11.4696 9.2106 10.9608 9.58567 10.5858C9.96074 10.2107 10.4695 9.99999 10.9999 9.99999C11.5303 9.99999 12.039 10.2107 12.4141 10.5858C12.7892 10.9608 12.9999 11.4696 12.9999 12C12.9999 12.5304 12.7892 13.0391 12.4141 13.4142C12.039 13.7893 11.5303 14 10.9999 14Z" fill="white"/>
                                                </svg>


                                            </a>
                                            <button class="active_inactive_ads_second_item_child_edit_link_delete_btn">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15 4H20V6H18V19C18 19.2652 17.8946 19.5196 17.7071 19.7071C17.5196 19.8946 17.2652 20 17 20H3C2.73478 20 2.48043 19.8946 2.29289 19.7071C2.10536 19.5196 2 19.2652 2 19V6H0V4H5V1C5 0.734784 5.10536 0.48043 5.29289 0.292893C5.48043 0.105357 5.73478 0 6 0H14C14.2652 0 14.5196 0.105357 14.7071 0.292893C14.8946 0.48043 15 0.734784 15 1V4ZM16 6H4V18H16V6ZM7 9H9V15H7V9ZM11 9H13V15H11V9ZM7 2V4H13V2H7Z" fill="white"/>
                                                </svg>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="active_inactive_ads_second_item_child">
                                    <a href="" class="active_inactive_ads_second_item_child_link">
                                        <div class="active_inactive_ads_second_item_child_link_img1">
                                            <img src="../images/recent_announcements_item_child_link_img1.png" alt="">
                                        </div>
                                        <p class="inactive_title">Неактивно</p>

                                    </a>
                                    <div class="active_inactive_ads_second_item_child_info_box">
                                        <h1 class="active_inactive_ads_second_item_child_title">Аренда авто без залога</h1>
                                        <h1 class="active_inactive_ads_second_item_child_price">1 290 ₽ </h1>
                                        <p class="active_inactive_ads_second_item_child_info1">Лиговский проспект 11</p>
                                        <p class="active_inactive_ads_second_item_child_info2">Идейные соображения высшего порядка, а также укрепление и развитие структуры играет важную роль в формировании модели развития.</p>
                                        <div class="active_inactive_ads_second_item_child_edit_link_delete_btns_wrapper">
                                            <a href="" class="active_inactive_ads_second_item_child_edit_link">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.728 6.68599L11.314 5.27199L2 14.586V16H3.414L12.728 6.68599ZM14.142 5.27199L15.556 3.85799L14.142 2.44399L12.728 3.85799L14.142 5.27199ZM4.242 18H0V13.757L13.435 0.321992C13.6225 0.134521 13.8768 0.0292053 14.142 0.0292053C14.4072 0.0292053 14.6615 0.134521 14.849 0.321992L17.678 3.15099C17.8655 3.33852 17.9708 3.59283 17.9708 3.85799C17.9708 4.12316 17.8655 4.37746 17.678 4.56499L4.243 18H4.242Z" fill="white"/>
                                                </svg>


                                            </a>
                                            <a href="" class="active_inactive_ads_second_item_child_link2">
                                                <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.49189 7.06499L3.77789 18H18.2219L19.5079 7.06499L15.4979 9.73799L10.9999 3.44099L6.50189 9.73799L2.49189 7.06499ZM1.80089 4.19999L5.99989 6.99999L10.1859 1.13999C10.2784 1.01036 10.4005 0.904696 10.5421 0.831793C10.6837 0.75889 10.8406 0.720856 10.9999 0.720856C11.1591 0.720856 11.3161 0.75889 11.4577 0.831793C11.5993 0.904696 11.7214 1.01036 11.8139 1.13999L15.9999 6.99999L20.1999 4.19999C20.3588 4.09424 20.5447 4.0362 20.7356 4.03273C20.9265 4.02926 21.1144 4.0805 21.2771 4.18041C21.4398 4.28032 21.5705 4.42471 21.6537 4.59653C21.737 4.76834 21.7693 4.96039 21.7469 5.14999L20.1039 19.117C20.0752 19.3602 19.9583 19.5845 19.7753 19.7473C19.5922 19.91 19.3558 20 19.1109 20H2.88889C2.64395 20 2.40755 19.91 2.22451 19.7473C2.04148 19.5845 1.92454 19.3602 1.89589 19.117L0.252885 5.14899C0.230685 4.95947 0.263171 4.76756 0.346506 4.59591C0.429842 4.42425 0.560548 4.28003 0.723196 4.18025C0.885845 4.08048 1.07364 4.02932 1.26442 4.03281C1.45521 4.03631 1.641 4.09432 1.79989 4.19999H1.80089ZM10.9999 14C10.4695 14 9.96074 13.7893 9.58567 13.4142C9.2106 13.0391 8.99989 12.5304 8.99989 12C8.99989 11.4696 9.2106 10.9608 9.58567 10.5858C9.96074 10.2107 10.4695 9.99999 10.9999 9.99999C11.5303 9.99999 12.039 10.2107 12.4141 10.5858C12.7892 10.9608 12.9999 11.4696 12.9999 12C12.9999 12.5304 12.7892 13.0391 12.4141 13.4142C12.039 13.7893 11.5303 14 10.9999 14Z" fill="white"/>
                                                </svg>


                                            </a>
                                            <button class="active_inactive_ads_second_item_child_edit_link_delete_btn">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15 4H20V6H18V19C18 19.2652 17.8946 19.5196 17.7071 19.7071C17.5196 19.8946 17.2652 20 17 20H3C2.73478 20 2.48043 19.8946 2.29289 19.7071C2.10536 19.5196 2 19.2652 2 19V6H0V4H5V1C5 0.734784 5.10536 0.48043 5.29289 0.292893C5.48043 0.105357 5.73478 0 6 0H14C14.2652 0 14.5196 0.105357 14.7071 0.292893C14.8946 0.48043 15 0.734784 15 1V4ZM16 6H4V18H16V6ZM7 9H9V15H7V9ZM11 9H13V15H11V9ZM7 2V4H13V2H7Z" fill="white"/>
                                                </svg>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="active_inactive_ads_second_items_wrapper" id="open_div4">
                            <div class="active_inactive_ads_second_item_parent2">
                                <div class="active_inactive_ads_second_item_child">
                                    <a href="" class="active_inactive_ads_second_item_child_link">
                                        <div class="active_inactive_ads_second_item_child_link_img1">
                                            <img src="../images/recent_announcements_item_child_link_img1.png" alt="">
                                        </div>

                                        <p class="inactive_title">Неактивно</p>


                                    </a>
                                    <div class="active_inactive_ads_second_item_child_info_box">
                                        <h1 class="active_inactive_ads_second_item_child_title">Аренда авто без залога</h1>
                                        <h1 class="active_inactive_ads_second_item_child_price">1 290 ₽ </h1>
                                        <p class="active_inactive_ads_second_item_child_info1">Лиговский проспект 11</p>
                                        <p class="active_inactive_ads_second_item_child_info2">Идейные соображения высшего порядка, а также укрепление и развитие структуры играет важную роль в формировании модели развития.</p>
                                        <div class="active_inactive_ads_second_item_child_edit_link_delete_btns_wrapper">
                                            <a href="" class="active_inactive_ads_second_item_child_edit_link">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.728 6.68599L11.314 5.27199L2 14.586V16H3.414L12.728 6.68599ZM14.142 5.27199L15.556 3.85799L14.142 2.44399L12.728 3.85799L14.142 5.27199ZM4.242 18H0V13.757L13.435 0.321992C13.6225 0.134521 13.8768 0.0292053 14.142 0.0292053C14.4072 0.0292053 14.6615 0.134521 14.849 0.321992L17.678 3.15099C17.8655 3.33852 17.9708 3.59283 17.9708 3.85799C17.9708 4.12316 17.8655 4.37746 17.678 4.56499L4.243 18H4.242Z" fill="white"/>
                                                </svg>


                                            </a>
                                            <a href="" class="active_inactive_ads_second_item_child_link2">
                                                <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.49189 7.06499L3.77789 18H18.2219L19.5079 7.06499L15.4979 9.73799L10.9999 3.44099L6.50189 9.73799L2.49189 7.06499ZM1.80089 4.19999L5.99989 6.99999L10.1859 1.13999C10.2784 1.01036 10.4005 0.904696 10.5421 0.831793C10.6837 0.75889 10.8406 0.720856 10.9999 0.720856C11.1591 0.720856 11.3161 0.75889 11.4577 0.831793C11.5993 0.904696 11.7214 1.01036 11.8139 1.13999L15.9999 6.99999L20.1999 4.19999C20.3588 4.09424 20.5447 4.0362 20.7356 4.03273C20.9265 4.02926 21.1144 4.0805 21.2771 4.18041C21.4398 4.28032 21.5705 4.42471 21.6537 4.59653C21.737 4.76834 21.7693 4.96039 21.7469 5.14999L20.1039 19.117C20.0752 19.3602 19.9583 19.5845 19.7753 19.7473C19.5922 19.91 19.3558 20 19.1109 20H2.88889C2.64395 20 2.40755 19.91 2.22451 19.7473C2.04148 19.5845 1.92454 19.3602 1.89589 19.117L0.252885 5.14899C0.230685 4.95947 0.263171 4.76756 0.346506 4.59591C0.429842 4.42425 0.560548 4.28003 0.723196 4.18025C0.885845 4.08048 1.07364 4.02932 1.26442 4.03281C1.45521 4.03631 1.641 4.09432 1.79989 4.19999H1.80089ZM10.9999 14C10.4695 14 9.96074 13.7893 9.58567 13.4142C9.2106 13.0391 8.99989 12.5304 8.99989 12C8.99989 11.4696 9.2106 10.9608 9.58567 10.5858C9.96074 10.2107 10.4695 9.99999 10.9999 9.99999C11.5303 9.99999 12.039 10.2107 12.4141 10.5858C12.7892 10.9608 12.9999 11.4696 12.9999 12C12.9999 12.5304 12.7892 13.0391 12.4141 13.4142C12.039 13.7893 11.5303 14 10.9999 14Z" fill="white"/>
                                                </svg>


                                            </a>
                                            <button class="active_inactive_ads_second_item_child_edit_link_delete_btn">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15 4H20V6H18V19C18 19.2652 17.8946 19.5196 17.7071 19.7071C17.5196 19.8946 17.2652 20 17 20H3C2.73478 20 2.48043 19.8946 2.29289 19.7071C2.10536 19.5196 2 19.2652 2 19V6H0V4H5V1C5 0.734784 5.10536 0.48043 5.29289 0.292893C5.48043 0.105357 5.73478 0 6 0H14C14.2652 0 14.5196 0.105357 14.7071 0.292893C14.8946 0.48043 15 0.734784 15 1V4ZM16 6H4V18H16V6ZM7 9H9V15H7V9ZM11 9H13V15H11V9ZM7 2V4H13V2H7Z" fill="white"/>
                                                </svg>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="active_inactive_ads_second_item_child">
                                    <a href="" class="active_inactive_ads_second_item_child_link">
                                        <div class="active_inactive_ads_second_item_child_link_img1">
                                            <img src="../images/recent_announcements_item_child_link_img1.png" alt="">
                                        </div>

                                        <p class="inactive_title">Неактивно</p>
                                    </a>
                                    <div class="active_inactive_ads_second_item_child_info_box">
                                        <h1 class="active_inactive_ads_second_item_child_title">Аренда авто без залога</h1>
                                        <h1 class="active_inactive_ads_second_item_child_price">1 290 ₽ </h1>
                                        <p class="active_inactive_ads_second_item_child_info1">Лиговский проспект 11</p>
                                        <p class="active_inactive_ads_second_item_child_info2">Идейные соображения высшего порядка, а также укрепление и развитие структуры играет важную роль в формировании модели развития.</p>
                                        <div class="active_inactive_ads_second_item_child_edit_link_delete_btns_wrapper">
                                            <a href="" class="active_inactive_ads_second_item_child_edit_link">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.728 6.68599L11.314 5.27199L2 14.586V16H3.414L12.728 6.68599ZM14.142 5.27199L15.556 3.85799L14.142 2.44399L12.728 3.85799L14.142 5.27199ZM4.242 18H0V13.757L13.435 0.321992C13.6225 0.134521 13.8768 0.0292053 14.142 0.0292053C14.4072 0.0292053 14.6615 0.134521 14.849 0.321992L17.678 3.15099C17.8655 3.33852 17.9708 3.59283 17.9708 3.85799C17.9708 4.12316 17.8655 4.37746 17.678 4.56499L4.243 18H4.242Z" fill="white"/>
                                                </svg>


                                            </a>
                                            <a href="" class="active_inactive_ads_second_item_child_link2">
                                                <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.49189 7.06499L3.77789 18H18.2219L19.5079 7.06499L15.4979 9.73799L10.9999 3.44099L6.50189 9.73799L2.49189 7.06499ZM1.80089 4.19999L5.99989 6.99999L10.1859 1.13999C10.2784 1.01036 10.4005 0.904696 10.5421 0.831793C10.6837 0.75889 10.8406 0.720856 10.9999 0.720856C11.1591 0.720856 11.3161 0.75889 11.4577 0.831793C11.5993 0.904696 11.7214 1.01036 11.8139 1.13999L15.9999 6.99999L20.1999 4.19999C20.3588 4.09424 20.5447 4.0362 20.7356 4.03273C20.9265 4.02926 21.1144 4.0805 21.2771 4.18041C21.4398 4.28032 21.5705 4.42471 21.6537 4.59653C21.737 4.76834 21.7693 4.96039 21.7469 5.14999L20.1039 19.117C20.0752 19.3602 19.9583 19.5845 19.7753 19.7473C19.5922 19.91 19.3558 20 19.1109 20H2.88889C2.64395 20 2.40755 19.91 2.22451 19.7473C2.04148 19.5845 1.92454 19.3602 1.89589 19.117L0.252885 5.14899C0.230685 4.95947 0.263171 4.76756 0.346506 4.59591C0.429842 4.42425 0.560548 4.28003 0.723196 4.18025C0.885845 4.08048 1.07364 4.02932 1.26442 4.03281C1.45521 4.03631 1.641 4.09432 1.79989 4.19999H1.80089ZM10.9999 14C10.4695 14 9.96074 13.7893 9.58567 13.4142C9.2106 13.0391 8.99989 12.5304 8.99989 12C8.99989 11.4696 9.2106 10.9608 9.58567 10.5858C9.96074 10.2107 10.4695 9.99999 10.9999 9.99999C11.5303 9.99999 12.039 10.2107 12.4141 10.5858C12.7892 10.9608 12.9999 11.4696 12.9999 12C12.9999 12.5304 12.7892 13.0391 12.4141 13.4142C12.039 13.7893 11.5303 14 10.9999 14Z" fill="white"/>
                                                </svg>


                                            </a>
                                            <button class="active_inactive_ads_second_item_child_edit_link_delete_btn">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15 4H20V6H18V19C18 19.2652 17.8946 19.5196 17.7071 19.7071C17.5196 19.8946 17.2652 20 17 20H3C2.73478 20 2.48043 19.8946 2.29289 19.7071C2.10536 19.5196 2 19.2652 2 19V6H0V4H5V1C5 0.734784 5.10536 0.48043 5.29289 0.292893C5.48043 0.105357 5.73478 0 6 0H14C14.2652 0 14.5196 0.105357 14.7071 0.292893C14.8946 0.48043 15 0.734784 15 1V4ZM16 6H4V18H16V6ZM7 9H9V15H7V9ZM11 9H13V15H11V9ZM7 2V4H13V2H7Z" fill="white"/>
                                                </svg>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="active_inactive_ads_second_item_child">
                                    <a href="" class="active_inactive_ads_second_item_child_link">
                                        <div class="active_inactive_ads_second_item_child_link_img1">
                                            <img src="../images/recent_announcements_item_child_link_img1.png" alt="">
                                        </div>

                                        <p class="inactive_title">Неактивно</p>


                                    </a>
                                    <div class="active_inactive_ads_second_item_child_info_box">
                                        <h1 class="active_inactive_ads_second_item_child_title">Аренда авто без залога</h1>
                                        <h1 class="active_inactive_ads_second_item_child_price">1 290 ₽ </h1>
                                        <p class="active_inactive_ads_second_item_child_info1">Лиговский проспект 11</p>
                                        <p class="active_inactive_ads_second_item_child_info2">Идейные соображения высшего порядка, а также укрепление и развитие структуры играет важную роль в формировании модели развития.</p>
                                        <div class="active_inactive_ads_second_item_child_edit_link_delete_btns_wrapper">
                                            <a href="" class="active_inactive_ads_second_item_child_edit_link">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.728 6.68599L11.314 5.27199L2 14.586V16H3.414L12.728 6.68599ZM14.142 5.27199L15.556 3.85799L14.142 2.44399L12.728 3.85799L14.142 5.27199ZM4.242 18H0V13.757L13.435 0.321992C13.6225 0.134521 13.8768 0.0292053 14.142 0.0292053C14.4072 0.0292053 14.6615 0.134521 14.849 0.321992L17.678 3.15099C17.8655 3.33852 17.9708 3.59283 17.9708 3.85799C17.9708 4.12316 17.8655 4.37746 17.678 4.56499L4.243 18H4.242Z" fill="white"/>
                                                </svg>


                                            </a>
                                            <a href="" class="active_inactive_ads_second_item_child_link2">
                                                <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.49189 7.06499L3.77789 18H18.2219L19.5079 7.06499L15.4979 9.73799L10.9999 3.44099L6.50189 9.73799L2.49189 7.06499ZM1.80089 4.19999L5.99989 6.99999L10.1859 1.13999C10.2784 1.01036 10.4005 0.904696 10.5421 0.831793C10.6837 0.75889 10.8406 0.720856 10.9999 0.720856C11.1591 0.720856 11.3161 0.75889 11.4577 0.831793C11.5993 0.904696 11.7214 1.01036 11.8139 1.13999L15.9999 6.99999L20.1999 4.19999C20.3588 4.09424 20.5447 4.0362 20.7356 4.03273C20.9265 4.02926 21.1144 4.0805 21.2771 4.18041C21.4398 4.28032 21.5705 4.42471 21.6537 4.59653C21.737 4.76834 21.7693 4.96039 21.7469 5.14999L20.1039 19.117C20.0752 19.3602 19.9583 19.5845 19.7753 19.7473C19.5922 19.91 19.3558 20 19.1109 20H2.88889C2.64395 20 2.40755 19.91 2.22451 19.7473C2.04148 19.5845 1.92454 19.3602 1.89589 19.117L0.252885 5.14899C0.230685 4.95947 0.263171 4.76756 0.346506 4.59591C0.429842 4.42425 0.560548 4.28003 0.723196 4.18025C0.885845 4.08048 1.07364 4.02932 1.26442 4.03281C1.45521 4.03631 1.641 4.09432 1.79989 4.19999H1.80089ZM10.9999 14C10.4695 14 9.96074 13.7893 9.58567 13.4142C9.2106 13.0391 8.99989 12.5304 8.99989 12C8.99989 11.4696 9.2106 10.9608 9.58567 10.5858C9.96074 10.2107 10.4695 9.99999 10.9999 9.99999C11.5303 9.99999 12.039 10.2107 12.4141 10.5858C12.7892 10.9608 12.9999 11.4696 12.9999 12C12.9999 12.5304 12.7892 13.0391 12.4141 13.4142C12.039 13.7893 11.5303 14 10.9999 14Z" fill="white"/>
                                                </svg>


                                            </a>
                                            <button class="active_inactive_ads_second_item_child_edit_link_delete_btn">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15 4H20V6H18V19C18 19.2652 17.8946 19.5196 17.7071 19.7071C17.5196 19.8946 17.2652 20 17 20H3C2.73478 20 2.48043 19.8946 2.29289 19.7071C2.10536 19.5196 2 19.2652 2 19V6H0V4H5V1C5 0.734784 5.10536 0.48043 5.29289 0.292893C5.48043 0.105357 5.73478 0 6 0H14C14.2652 0 14.5196 0.105357 14.7071 0.292893C14.8946 0.48043 15 0.734784 15 1V4ZM16 6H4V18H16V6ZM7 9H9V15H7V9ZM11 9H13V15H11V9ZM7 2V4H13V2H7Z" fill="white"/>
                                                </svg>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="footer_wrapper">
            <div class="footer_items_wrapper">
                <div class="footer_item">
                    <div class="footer_logo_link_wrapper">
                        <a href="" class="footer_logo_link">
                            <img src="../images/new_logo.svg" alt="">
                        </a>
                    </div>
                    <div class="footer_registration_log_in_btn_link_wrapper">
                        <a href="../html/login.html"  class="footer_registration_log_in_btn">Вход и регистрация</a>
                        <a href="../html/place_an_ad.html" class="footer_link">Разместить объявление</a>


                    </div>
                </div>
                <nav class="footer_nav_wrapper first_nav">
                    <ul class="footer_ul_list">
                        <li class="footer_ul_li">
                            <a href="" class="footer_ul_link">Автомобили</a>
                        </li>
                        <li class="footer_ul_li">
                            <a href="" class="footer_ul_link">Водный транспорт</a>
                        </li>
                        <li class="footer_ul_li">
                            <a href="" class="footer_ul_link">Велосипеды</a>
                        </li>
                        <li class="footer_ul_li">
                            <a href="" class="footer_ul_link">Малогабаритный <br> транспорт</a>
                        </li>
                        <!-- <li class="footer_ul_li">
                           <a href="" class="footer_ul_link">Мотоциклы</a>
                       </li>
                       <li class="footer_ul_li">
                           <a href="" class="footer_ul_link">Специальный <br>
                              и грузовой транспорт</a>
                       </li>
                       <li class="footer_ul_li">
                           <a href="" class="footer_ul_link">Прицепы</a>
                       </li>  -->

                    </ul>
                </nav>


                <nav class="footer_nav_wrapper second_nav">
                    <ul class="footer_ul_list2">

                        <li class="footer_ul_li">
                            <a href="" class="footer_ul_link">Мотоциклы</a>
                        </li>
                        <li class="footer_ul_li">
                            <a href="" class="footer_ul_link">Специальный <br>
                                и грузовой транспорт</a>
                        </li>
                        <li class="footer_ul_li">
                            <a href="" class="footer_ul_link">Прицепы</a>
                        </li>
                    </ul>
                </nav>


                <div class="footer_social_links_wrapper">
                    <a href="" class="footer_social_link">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.0007 10.7499C13.8735 10.7499 12.7925 11.1977 11.9954 11.9947C11.1984 12.7917 10.7507 13.8727 10.7507 14.9999C10.7507 16.1271 11.1984 17.2081 11.9954 18.0051C12.7925 18.8022 13.8735 19.2499 15.0007 19.2499C16.1278 19.2499 17.2088 18.8022 18.0059 18.0051C18.8029 17.2081 19.2507 16.1271 19.2507 14.9999C19.2507 13.8727 18.8029 12.7917 18.0059 11.9947C17.2088 11.1977 16.1278 10.7499 15.0007 10.7499ZM15.0007 7.91659C16.8793 7.91659 18.6809 8.66286 20.0093 9.99125C21.3377 11.3196 22.084 13.1213 22.084 14.9999C22.084 16.8785 21.3377 18.6802 20.0093 20.0086C18.6809 21.337 16.8793 22.0833 15.0007 22.0833C13.122 22.0833 11.3204 21.337 9.99198 20.0086C8.6636 18.6802 7.91732 16.8785 7.91732 14.9999C7.91732 13.1213 8.6636 11.3196 9.99198 9.99125C11.3204 8.66286 13.122 7.91659 15.0007 7.91659ZM24.209 7.56242C24.209 8.03207 24.0224 8.48249 23.6903 8.81459C23.3582 9.14668 22.9078 9.33325 22.4382 9.33325C21.9685 9.33325 21.5181 9.14668 21.186 8.81459C20.8539 8.48249 20.6673 8.03207 20.6673 7.56242C20.6673 7.09276 20.8539 6.64235 21.186 6.31025C21.5181 5.97816 21.9685 5.79159 22.4382 5.79159C22.9078 5.79159 23.3582 5.97816 23.6903 6.31025C24.0224 6.64235 24.209 7.09276 24.209 7.56242ZM15.0007 3.66659C11.4958 3.66659 10.9235 3.6765 9.2929 3.74875C8.18224 3.80117 7.43707 3.94992 6.74573 4.21909C6.1309 4.45709 5.68748 4.74184 5.21573 5.215C4.77233 5.6434 4.4314 6.16641 4.2184 6.745C3.94923 7.43917 3.80048 8.18292 3.74948 9.29217C3.67582 10.8562 3.66732 11.403 3.66732 14.9999C3.66732 18.5048 3.67723 19.0771 3.74948 20.7077C3.8019 21.8169 3.95065 22.5635 4.2184 23.2534C4.45923 23.8697 4.74257 24.3131 5.2129 24.7834C5.69032 25.2594 6.13373 25.5442 6.7429 25.7793C7.44273 26.0499 8.1879 26.2001 9.2929 26.2511C10.8569 26.3248 11.4037 26.3333 15.0007 26.3333C18.5055 26.3333 19.0778 26.3233 20.7084 26.2511C21.8162 26.1987 22.5628 26.0499 23.2542 25.7822C23.8676 25.5428 24.3138 25.258 24.7842 24.7877C25.2616 24.3103 25.5463 23.8668 25.7815 23.2577C26.0507 22.5593 26.2008 21.8127 26.2518 20.7077C26.3255 19.1437 26.334 18.5968 26.334 14.9999C26.334 11.4951 26.3241 10.9228 26.2518 9.29217C26.1994 8.18434 26.0507 7.43634 25.7815 6.745C25.568 6.167 25.2277 5.6442 24.7856 5.215C24.3574 4.77137 23.8343 4.43041 23.2556 4.21767C22.5614 3.9485 21.8162 3.79975 20.7084 3.74875C19.1444 3.67509 18.5976 3.66659 15.0007 3.66659ZM15.0007 0.833252C18.8497 0.833252 19.33 0.847419 20.8402 0.918252C22.3489 0.989085 23.376 1.22567 24.2798 1.577C25.2148 1.93684 26.0025 2.42417 26.7902 3.21042C27.5105 3.9186 28.0679 4.77525 28.4236 5.72075C28.7735 6.62317 29.0115 7.65167 29.0823 9.16042C29.1489 10.6706 29.1673 11.1508 29.1673 14.9999C29.1673 18.849 29.1532 19.3293 29.0823 20.8394C29.0115 22.3482 28.7735 23.3753 28.4236 24.2791C28.0689 25.2251 27.5114 26.082 26.7902 26.7894C26.0818 27.5095 25.2252 28.0669 24.2798 28.4228C23.3774 28.7728 22.3489 29.0108 20.8402 29.0816C19.33 29.1482 18.8497 29.1666 15.0007 29.1666C11.1516 29.1666 10.6713 29.1524 9.16115 29.0816C7.6524 29.0108 6.62532 28.7728 5.72148 28.4228C4.77561 28.0679 3.91881 27.5104 3.21115 26.7894C2.49064 26.0814 1.93322 25.2247 1.57773 24.2791C1.2264 23.3767 0.989818 22.3482 0.918984 20.8394C0.852401 19.3293 0.833984 18.849 0.833984 14.9999C0.833984 11.1508 0.848151 10.6706 0.918984 9.16042C0.989818 7.65025 1.2264 6.62459 1.57773 5.72075C1.93224 4.77467 2.48979 3.91779 3.21115 3.21042C3.91902 2.48966 4.77576 1.9322 5.72148 1.577C6.62532 1.22567 7.65098 0.989085 9.16115 0.918252C10.6713 0.851669 11.1516 0.833252 15.0007 0.833252Z" fill="white"/>
                        </svg>

                    </a>
                    <a href="" class="footer_social_link">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.0007 10.7499C13.8735 10.7499 12.7925 11.1977 11.9954 11.9947C11.1984 12.7917 10.7507 13.8727 10.7507 14.9999C10.7507 16.1271 11.1984 17.2081 11.9954 18.0051C12.7925 18.8022 13.8735 19.2499 15.0007 19.2499C16.1278 19.2499 17.2088 18.8022 18.0059 18.0051C18.8029 17.2081 19.2507 16.1271 19.2507 14.9999C19.2507 13.8727 18.8029 12.7917 18.0059 11.9947C17.2088 11.1977 16.1278 10.7499 15.0007 10.7499ZM15.0007 7.91659C16.8793 7.91659 18.6809 8.66286 20.0093 9.99125C21.3377 11.3196 22.084 13.1213 22.084 14.9999C22.084 16.8785 21.3377 18.6802 20.0093 20.0086C18.6809 21.337 16.8793 22.0833 15.0007 22.0833C13.122 22.0833 11.3204 21.337 9.99198 20.0086C8.6636 18.6802 7.91732 16.8785 7.91732 14.9999C7.91732 13.1213 8.6636 11.3196 9.99198 9.99125C11.3204 8.66286 13.122 7.91659 15.0007 7.91659ZM24.209 7.56242C24.209 8.03207 24.0224 8.48249 23.6903 8.81459C23.3582 9.14668 22.9078 9.33325 22.4382 9.33325C21.9685 9.33325 21.5181 9.14668 21.186 8.81459C20.8539 8.48249 20.6673 8.03207 20.6673 7.56242C20.6673 7.09276 20.8539 6.64235 21.186 6.31025C21.5181 5.97816 21.9685 5.79159 22.4382 5.79159C22.9078 5.79159 23.3582 5.97816 23.6903 6.31025C24.0224 6.64235 24.209 7.09276 24.209 7.56242ZM15.0007 3.66659C11.4958 3.66659 10.9235 3.6765 9.2929 3.74875C8.18224 3.80117 7.43707 3.94992 6.74573 4.21909C6.1309 4.45709 5.68748 4.74184 5.21573 5.215C4.77233 5.6434 4.4314 6.16641 4.2184 6.745C3.94923 7.43917 3.80048 8.18292 3.74948 9.29217C3.67582 10.8562 3.66732 11.403 3.66732 14.9999C3.66732 18.5048 3.67723 19.0771 3.74948 20.7077C3.8019 21.8169 3.95065 22.5635 4.2184 23.2534C4.45923 23.8697 4.74257 24.3131 5.2129 24.7834C5.69032 25.2594 6.13373 25.5442 6.7429 25.7793C7.44273 26.0499 8.1879 26.2001 9.2929 26.2511C10.8569 26.3248 11.4037 26.3333 15.0007 26.3333C18.5055 26.3333 19.0778 26.3233 20.7084 26.2511C21.8162 26.1987 22.5628 26.0499 23.2542 25.7822C23.8676 25.5428 24.3138 25.258 24.7842 24.7877C25.2616 24.3103 25.5463 23.8668 25.7815 23.2577C26.0507 22.5593 26.2008 21.8127 26.2518 20.7077C26.3255 19.1437 26.334 18.5968 26.334 14.9999C26.334 11.4951 26.3241 10.9228 26.2518 9.29217C26.1994 8.18434 26.0507 7.43634 25.7815 6.745C25.568 6.167 25.2277 5.6442 24.7856 5.215C24.3574 4.77137 23.8343 4.43041 23.2556 4.21767C22.5614 3.9485 21.8162 3.79975 20.7084 3.74875C19.1444 3.67509 18.5976 3.66659 15.0007 3.66659ZM15.0007 0.833252C18.8497 0.833252 19.33 0.847419 20.8402 0.918252C22.3489 0.989085 23.376 1.22567 24.2798 1.577C25.2148 1.93684 26.0025 2.42417 26.7902 3.21042C27.5105 3.9186 28.0679 4.77525 28.4236 5.72075C28.7735 6.62317 29.0115 7.65167 29.0823 9.16042C29.1489 10.6706 29.1673 11.1508 29.1673 14.9999C29.1673 18.849 29.1532 19.3293 29.0823 20.8394C29.0115 22.3482 28.7735 23.3753 28.4236 24.2791C28.0689 25.2251 27.5114 26.082 26.7902 26.7894C26.0818 27.5095 25.2252 28.0669 24.2798 28.4228C23.3774 28.7728 22.3489 29.0108 20.8402 29.0816C19.33 29.1482 18.8497 29.1666 15.0007 29.1666C11.1516 29.1666 10.6713 29.1524 9.16115 29.0816C7.6524 29.0108 6.62532 28.7728 5.72148 28.4228C4.77561 28.0679 3.91881 27.5104 3.21115 26.7894C2.49064 26.0814 1.93322 25.2247 1.57773 24.2791C1.2264 23.3767 0.989818 22.3482 0.918984 20.8394C0.852401 19.3293 0.833984 18.849 0.833984 14.9999C0.833984 11.1508 0.848151 10.6706 0.918984 9.16042C0.989818 7.65025 1.2264 6.62459 1.57773 5.72075C1.93224 4.77467 2.48979 3.91779 3.21115 3.21042C3.91902 2.48966 4.77576 1.9322 5.72148 1.577C6.62532 1.22567 7.65098 0.989085 9.16115 0.918252C10.6713 0.851669 11.1516 0.833252 15.0007 0.833252Z" fill="white"/>
                        </svg>

                    </a>
                    <a href="" class="footer_social_link">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.0007 10.7499C13.8735 10.7499 12.7925 11.1977 11.9954 11.9947C11.1984 12.7917 10.7507 13.8727 10.7507 14.9999C10.7507 16.1271 11.1984 17.2081 11.9954 18.0051C12.7925 18.8022 13.8735 19.2499 15.0007 19.2499C16.1278 19.2499 17.2088 18.8022 18.0059 18.0051C18.8029 17.2081 19.2507 16.1271 19.2507 14.9999C19.2507 13.8727 18.8029 12.7917 18.0059 11.9947C17.2088 11.1977 16.1278 10.7499 15.0007 10.7499ZM15.0007 7.91659C16.8793 7.91659 18.6809 8.66286 20.0093 9.99125C21.3377 11.3196 22.084 13.1213 22.084 14.9999C22.084 16.8785 21.3377 18.6802 20.0093 20.0086C18.6809 21.337 16.8793 22.0833 15.0007 22.0833C13.122 22.0833 11.3204 21.337 9.99198 20.0086C8.6636 18.6802 7.91732 16.8785 7.91732 14.9999C7.91732 13.1213 8.6636 11.3196 9.99198 9.99125C11.3204 8.66286 13.122 7.91659 15.0007 7.91659ZM24.209 7.56242C24.209 8.03207 24.0224 8.48249 23.6903 8.81459C23.3582 9.14668 22.9078 9.33325 22.4382 9.33325C21.9685 9.33325 21.5181 9.14668 21.186 8.81459C20.8539 8.48249 20.6673 8.03207 20.6673 7.56242C20.6673 7.09276 20.8539 6.64235 21.186 6.31025C21.5181 5.97816 21.9685 5.79159 22.4382 5.79159C22.9078 5.79159 23.3582 5.97816 23.6903 6.31025C24.0224 6.64235 24.209 7.09276 24.209 7.56242ZM15.0007 3.66659C11.4958 3.66659 10.9235 3.6765 9.2929 3.74875C8.18224 3.80117 7.43707 3.94992 6.74573 4.21909C6.1309 4.45709 5.68748 4.74184 5.21573 5.215C4.77233 5.6434 4.4314 6.16641 4.2184 6.745C3.94923 7.43917 3.80048 8.18292 3.74948 9.29217C3.67582 10.8562 3.66732 11.403 3.66732 14.9999C3.66732 18.5048 3.67723 19.0771 3.74948 20.7077C3.8019 21.8169 3.95065 22.5635 4.2184 23.2534C4.45923 23.8697 4.74257 24.3131 5.2129 24.7834C5.69032 25.2594 6.13373 25.5442 6.7429 25.7793C7.44273 26.0499 8.1879 26.2001 9.2929 26.2511C10.8569 26.3248 11.4037 26.3333 15.0007 26.3333C18.5055 26.3333 19.0778 26.3233 20.7084 26.2511C21.8162 26.1987 22.5628 26.0499 23.2542 25.7822C23.8676 25.5428 24.3138 25.258 24.7842 24.7877C25.2616 24.3103 25.5463 23.8668 25.7815 23.2577C26.0507 22.5593 26.2008 21.8127 26.2518 20.7077C26.3255 19.1437 26.334 18.5968 26.334 14.9999C26.334 11.4951 26.3241 10.9228 26.2518 9.29217C26.1994 8.18434 26.0507 7.43634 25.7815 6.745C25.568 6.167 25.2277 5.6442 24.7856 5.215C24.3574 4.77137 23.8343 4.43041 23.2556 4.21767C22.5614 3.9485 21.8162 3.79975 20.7084 3.74875C19.1444 3.67509 18.5976 3.66659 15.0007 3.66659ZM15.0007 0.833252C18.8497 0.833252 19.33 0.847419 20.8402 0.918252C22.3489 0.989085 23.376 1.22567 24.2798 1.577C25.2148 1.93684 26.0025 2.42417 26.7902 3.21042C27.5105 3.9186 28.0679 4.77525 28.4236 5.72075C28.7735 6.62317 29.0115 7.65167 29.0823 9.16042C29.1489 10.6706 29.1673 11.1508 29.1673 14.9999C29.1673 18.849 29.1532 19.3293 29.0823 20.8394C29.0115 22.3482 28.7735 23.3753 28.4236 24.2791C28.0689 25.2251 27.5114 26.082 26.7902 26.7894C26.0818 27.5095 25.2252 28.0669 24.2798 28.4228C23.3774 28.7728 22.3489 29.0108 20.8402 29.0816C19.33 29.1482 18.8497 29.1666 15.0007 29.1666C11.1516 29.1666 10.6713 29.1524 9.16115 29.0816C7.6524 29.0108 6.62532 28.7728 5.72148 28.4228C4.77561 28.0679 3.91881 27.5104 3.21115 26.7894C2.49064 26.0814 1.93322 25.2247 1.57773 24.2791C1.2264 23.3767 0.989818 22.3482 0.918984 20.8394C0.852401 19.3293 0.833984 18.849 0.833984 14.9999C0.833984 11.1508 0.848151 10.6706 0.918984 9.16042C0.989818 7.65025 1.2264 6.62459 1.57773 5.72075C1.93224 4.77467 2.48979 3.91779 3.21115 3.21042C3.91902 2.48966 4.77576 1.9322 5.72148 1.577C6.62532 1.22567 7.65098 0.989085 9.16115 0.918252C10.6713 0.851669 11.1516 0.833252 15.0007 0.833252Z" fill="white"/>
                        </svg>

                    </a>
                    <a href="" class="footer_social_link">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.0007 10.7499C13.8735 10.7499 12.7925 11.1977 11.9954 11.9947C11.1984 12.7917 10.7507 13.8727 10.7507 14.9999C10.7507 16.1271 11.1984 17.2081 11.9954 18.0051C12.7925 18.8022 13.8735 19.2499 15.0007 19.2499C16.1278 19.2499 17.2088 18.8022 18.0059 18.0051C18.8029 17.2081 19.2507 16.1271 19.2507 14.9999C19.2507 13.8727 18.8029 12.7917 18.0059 11.9947C17.2088 11.1977 16.1278 10.7499 15.0007 10.7499ZM15.0007 7.91659C16.8793 7.91659 18.6809 8.66286 20.0093 9.99125C21.3377 11.3196 22.084 13.1213 22.084 14.9999C22.084 16.8785 21.3377 18.6802 20.0093 20.0086C18.6809 21.337 16.8793 22.0833 15.0007 22.0833C13.122 22.0833 11.3204 21.337 9.99198 20.0086C8.6636 18.6802 7.91732 16.8785 7.91732 14.9999C7.91732 13.1213 8.6636 11.3196 9.99198 9.99125C11.3204 8.66286 13.122 7.91659 15.0007 7.91659ZM24.209 7.56242C24.209 8.03207 24.0224 8.48249 23.6903 8.81459C23.3582 9.14668 22.9078 9.33325 22.4382 9.33325C21.9685 9.33325 21.5181 9.14668 21.186 8.81459C20.8539 8.48249 20.6673 8.03207 20.6673 7.56242C20.6673 7.09276 20.8539 6.64235 21.186 6.31025C21.5181 5.97816 21.9685 5.79159 22.4382 5.79159C22.9078 5.79159 23.3582 5.97816 23.6903 6.31025C24.0224 6.64235 24.209 7.09276 24.209 7.56242ZM15.0007 3.66659C11.4958 3.66659 10.9235 3.6765 9.2929 3.74875C8.18224 3.80117 7.43707 3.94992 6.74573 4.21909C6.1309 4.45709 5.68748 4.74184 5.21573 5.215C4.77233 5.6434 4.4314 6.16641 4.2184 6.745C3.94923 7.43917 3.80048 8.18292 3.74948 9.29217C3.67582 10.8562 3.66732 11.403 3.66732 14.9999C3.66732 18.5048 3.67723 19.0771 3.74948 20.7077C3.8019 21.8169 3.95065 22.5635 4.2184 23.2534C4.45923 23.8697 4.74257 24.3131 5.2129 24.7834C5.69032 25.2594 6.13373 25.5442 6.7429 25.7793C7.44273 26.0499 8.1879 26.2001 9.2929 26.2511C10.8569 26.3248 11.4037 26.3333 15.0007 26.3333C18.5055 26.3333 19.0778 26.3233 20.7084 26.2511C21.8162 26.1987 22.5628 26.0499 23.2542 25.7822C23.8676 25.5428 24.3138 25.258 24.7842 24.7877C25.2616 24.3103 25.5463 23.8668 25.7815 23.2577C26.0507 22.5593 26.2008 21.8127 26.2518 20.7077C26.3255 19.1437 26.334 18.5968 26.334 14.9999C26.334 11.4951 26.3241 10.9228 26.2518 9.29217C26.1994 8.18434 26.0507 7.43634 25.7815 6.745C25.568 6.167 25.2277 5.6442 24.7856 5.215C24.3574 4.77137 23.8343 4.43041 23.2556 4.21767C22.5614 3.9485 21.8162 3.79975 20.7084 3.74875C19.1444 3.67509 18.5976 3.66659 15.0007 3.66659ZM15.0007 0.833252C18.8497 0.833252 19.33 0.847419 20.8402 0.918252C22.3489 0.989085 23.376 1.22567 24.2798 1.577C25.2148 1.93684 26.0025 2.42417 26.7902 3.21042C27.5105 3.9186 28.0679 4.77525 28.4236 5.72075C28.7735 6.62317 29.0115 7.65167 29.0823 9.16042C29.1489 10.6706 29.1673 11.1508 29.1673 14.9999C29.1673 18.849 29.1532 19.3293 29.0823 20.8394C29.0115 22.3482 28.7735 23.3753 28.4236 24.2791C28.0689 25.2251 27.5114 26.082 26.7902 26.7894C26.0818 27.5095 25.2252 28.0669 24.2798 28.4228C23.3774 28.7728 22.3489 29.0108 20.8402 29.0816C19.33 29.1482 18.8497 29.1666 15.0007 29.1666C11.1516 29.1666 10.6713 29.1524 9.16115 29.0816C7.6524 29.0108 6.62532 28.7728 5.72148 28.4228C4.77561 28.0679 3.91881 27.5104 3.21115 26.7894C2.49064 26.0814 1.93322 25.2247 1.57773 24.2791C1.2264 23.3767 0.989818 22.3482 0.918984 20.8394C0.852401 19.3293 0.833984 18.849 0.833984 14.9999C0.833984 11.1508 0.848151 10.6706 0.918984 9.16042C0.989818 7.65025 1.2264 6.62459 1.57773 5.72075C1.93224 4.77467 2.48979 3.91779 3.21115 3.21042C3.91902 2.48966 4.77576 1.9322 5.72148 1.577C6.62532 1.22567 7.65098 0.989085 9.16115 0.918252C10.6713 0.851669 11.1516 0.833252 15.0007 0.833252Z" fill="white"/>
                        </svg>

                    </a>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection

