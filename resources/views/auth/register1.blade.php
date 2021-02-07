<!DOCTYPE html>
<!--

-->
<html lang="en">
<!-- BEGIN: Head -->
<!-- Added by HTTrack -->
<!-- Mirrored from atiyehahmadi.ir/midone/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Nov 2020 11:43:54 GMT -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>ثبت نام -دشبرد - میدوان - قالب اچ تی ام ال</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{asset('assets/auth/css/app.css')}}" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="login">
<div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
        <!-- BEGIN: Register Info -->
        <form method="POST" action="{{ route('get-register') }}">
            @csrf
        <div class="hidden xl:flex flex-col min-h-screen">
            <a href="#" class="-intro-x flex items-center pt-5">
                <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{asset('assets/auth/images/logo.svg')}}">
                <span class="text-white text-lg ml-3">مید<span class="font-medium">وان</span> </span>
            </a>
            <div class="my-auto">
                <img alt="Midone Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{asset('assets/auth/images/illustration.svg')}}">
                <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                    تنها چند کلیک
                    <br>
                    ساخت اکانت تان
                </div>
                <div class="-intro-x mt-5 text-lg text-white dark:text-gray-500">تمامی اکانت های خود را در یک مکان مدیریت کنید</div>
            </div>
        </div>
        <!-- END: Register Info -->
        <!-- BEGIN: Register Form -->
        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
            <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                    ثبت نام
                </h2>
                <div class="intro-x mt-2 text-gray-500 dark:text-gray-500 xl:hidden text-center">چند کلیک دیگر برای ورود به اکانت خود دارید . همه حساب های تجارت الکترونیکی خود را در یک مکان مدیریت کنید</div>
                <div class="intro-x mt-8">


                    <input  name="name" type="text"  value="{{ old('name') }}" class=" form-control @error('name') is-invalid @enderror intro-x login__input input input--lg border border-gray-300 block" placeholder="نام" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror




                    <input id="email" value="{{ old('email') }}" required autocomplete="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="نام خانوادگی">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror






                    <input type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="ایمیل">
                    <input type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="رمزعبور">
                    <div class="intro-x w-full grid grid-cols-12 gap-4 h-1 mt-3">
                        <div class="col-span-3 h-full rounded bg-theme-9"></div>
                        <div class="col-span-3 h-full rounded bg-theme-9"></div>
                        <div class="col-span-3 h-full rounded bg-theme-9"></div>
                        <div class="col-span-3 h-full rounded bg-gray-200 dark:bg-dark-2"></div>
                    </div>
                    <a href="#" class="intro-x text-gray-600 block mt-2 text-xs sm:text-sm">رمزعبور امن چیست؟</a>
                    <input type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="تایید رمزعبور">
                </div>
                <div class="intro-x flex items-center text-gray-700 dark:text-gray-600 mt-4 text-xs sm:text-sm">
                    <input type="checkbox" class="input border mr-2" id="remember-me">
                    <label class="cursor-pointer select-none" for="remember-me">موافقت با</label>
                    <a class="text-theme-1 dark:text-theme-10 ml-1" href="#">حریم شخصی</a>.
                </div>
                <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                    <button class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">ثبت نام</button>
                    <button class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 dark:border-dark-5 dark:text-gray-300 mt-3 xl:mt-0">ورود</button>
                </div>
            </div>
        </div>
        <!-- END: Register Form -->
        </form>
    </div>
</div>
<!-- BEGIN: Dark Mode Switcher-->
<div class="dark-mode-switcher shadow-md fixed bottom-0 right-0 box dark:bg-dark-2 border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
    <div class="mr-4 text-gray-700 dark:text-gray-300">حالت تیره</div>
    <input class="input input--switch border" type="checkbox" value="1">
</div>
<!-- END: Dark Mode Switcher-->
<!-- BEGIN: JS Assets-->
<script src="{{asset('assets/auth/js/app.js')}}"></script>
<!-- END: JS Assets-->
</body>

<!-- Mirrored from atiyehahmadi.ir/midone/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Nov 2020 11:43:54 GMT -->
</html>
