<div class="header-container fixed-top">
    <header class="header navbar navbar-expand-sm">
{{--        لوگو اصلی--}}
        <ul class="navbar-item flex-row">
            <li class="nav-item theme-logo">
                <a href="http://www.pourdastmalchi.ir/new/">
                    <img src="{{asset('assets/dashboard/img/pourdastmalchi.png')}}" style="width: 100px;height: 60px" class="navbar-logo" alt="logo">
                </a>
            </li>
        </ul>

        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg></a>



        <ul class="navbar-item flex-row search-ul">
            <li class="nav-item align-self-center search-animated">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                <form class="form-inline search-full form-inline search" role="search">
                    <div class="search-bar">
                        <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="جستجو کنید...">
                    </div>
                </form>
            </li>
        </ul>
        <ul class="navbar-item flex-row navbar-dropdown">
{{--            <li class="nav-item dropdown language-dropdown more-dropdown">--}}
{{--                <div class="dropdown  custom-dropdown-icon">--}}
{{--                    <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="--}}
{{--                    {{asset('assets/dashboard/img/ca.png')}}" class="flag-width" alt="flag"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>--}}

{{--                    <div class="dropdown-menu dropdown-menu-right animated fadeInUp" aria-labelledby="customDropdown">--}}
{{--                        <a class="dropdown-item" data-img-value="de" data-value="German" href="javascript:void(0);"><img src="{{asset('assets/dashboard/img/de.png')}}" class="flag-width" alt="flag"> آلمانی</a>--}}
{{--                        <a class="dropdown-item" data-img-value="jp" data-value="Japanese" href="javascript:void(0);"><img src="{{asset('assets/dashboard/img/jp.png')}}" class="flag-width" alt="flag"> ژاپنی</a>--}}
{{--                        <a class="dropdown-item" data-img-value="fr" data-value="French" href="javascript:void(0);"><img src="{{asset('assets/dashboard/img/fr.png')}}" class="flag-width" alt="flag"> فرانسوی</a>--}}
{{--                        <a class="dropdown-item" data-img-value="ca" data-value="English" href="javascript:void(0);"><img src="{{asset('assets/dashboard/img/ca.png')}}" class="flag-width" alt="flag"> انگلیسی</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </li>--}}

{{--پیغام --}}

{{--            <li class="nav-item dropdown message-dropdown">--}}
{{--                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg><span class="badge badge-primary"></span>--}}
{{--                </a>--}}
{{--                <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="messageDropdown">--}}
{{--                    <div class="">--}}
{{--                        <a class="dropdown-item">--}}
{{--                            <div class="">--}}

{{--                                <div class="media">--}}
{{--                                    <div class="user-img">--}}
{{--                                        <div class="avatar avatar-xl">--}}
{{--                                            <span class="avatar-title rounded-circle">م ر</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="media-body">--}}
{{--                                        <div class="">--}}
{{--                                            <h5 class="usr-name">محسن رضایی</h5>--}}
{{--                                            <p class="msg-title">بروزرسانی اکانت</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <a class="dropdown-item">--}}
{{--                            <div class="">--}}
{{--                                <div class="media">--}}
{{--                                    <div class="user-img">--}}
{{--                                        <div class="avatar avatar-xl">--}}
{{--                                            <span class="avatar-title rounded-circle">ه ش</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="media-body">--}}
{{--                                        <div class="">--}}
{{--                                            <h5 class="usr-name">هومن شکیبا</h5>--}}
{{--                                            <p class="msg-title">پیام شما</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <a class="dropdown-item">--}}
{{--                            <div class="">--}}

{{--                                <div class="media">--}}
{{--                                    <div class="user-img">--}}
{{--                                        <div class="avatar avatar-xl">--}}
{{--                                            <span class="avatar-title rounded-circle">ز ج</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="media-body">--}}
{{--                                        <div class="">--}}
{{--                                            <h5 class="usr-name">زهرا جوان</h5>--}}
{{--                                            <p class="msg-title">اکانت شما بروز شد</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </li>--}}

{{--اطلاع رسانی  --}}

            <li class="nav-item dropdown notification-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge-success"></span>
{{-- --}}
              <span class="badge badge-danger">{{auth()->user()->unreadNotifications->count()}}</span>
{{----}}
                </a>
                <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="notificationDropdown">
                    <div class="notification-scroll">

                        <div class="dropdown-item">
                            <div class="media file-upload">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                <div class="media-body">
                                    <div class="data-info">
                                        <a href="{{route('markAsRead')}}">   <span class="" >خواندن همه </span></a>
                                        {{--                                        <p class="">{{verta()}}</p>--}}
                                    </div>

                                    <div class="icon-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                       @forelse(auth()->user()->unreadNotifications as $notification)

                        <div class="dropdown-item">
                            <div class="media file-upload">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                <div class="media-body">
                                    <div class="data-info">
                                        <h6 class="">{{$notification->type}}</h6>
{{--                                        <p class="">{{verta()}}</p>--}}
                                    </div>

                                    <div class="icon-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @empty
                            <a href="">خالی</a>
                        @endforelse
                    </div>
                </div>
            </li>












            <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('assets/dashboard/img/m.jpg')}}" alt="admin-profile" class="img-fluid">
                </a>
                <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="userProfileDropdown">
                    <div class="user-profile-section">
                        <div class="media mx-auto">

{{-- عکس مخاطب--}}
                            <img src="{{asset('assets/dashboard/img/m.jpg')}}" class="img-fluid mr-2" alt="avatar">
                            <div class="media-body">
                                <h5>{{Auth::user()?Auth::user()->first_name:''}}{{Auth::user()?Auth::user()->last_name:''}}</h5>


                            </div>
                        </div>
                    </div>
{{--صفحه اصلی کاربر--}}
{{--                    --}}
                    <div class="dropdown-item">
                        <a href="{{route('user-home')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span>پروفایل من</span>
                        </a>
                    </div>
                    <div class="dropdown-item">
                        <a href="apps_mailbox.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> <span>صندوق ورودی من</span>
                        </a>
                    </div>
                    <div class="dropdown-item">
                        <a href="auth_lockscreen.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> <span>قفل کردن صفحه</span>
                        </a>
                    </div>
                    <div class="dropdown-item">
                        <a href="{{route('logout')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>خروج</span>
                        </a>
                    </div>
                </div>
            </li>



        </ul>
    </header>
</div>
{{----}}

