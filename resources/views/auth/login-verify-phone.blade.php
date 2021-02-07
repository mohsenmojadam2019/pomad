<!DOCTYPE html>
<!--

-->
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <link href="{{asset('assets/auth/images/logo.svg')}}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>ورود </title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{asset('assets/auth/css/app.css')}}"/>
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="login">
<div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
        <!-- BEGIN: Login Info -->
        <!-- BEGIN: Logindffgfdgfg -->



            <div class=" xl:flex flex-col min-h-screen">
                <a href="#" class="-intro-x flex items-center pt-5">
                    <img alt="Midone Tailwind HTML Admin Template" class="w-6"
                         src="{{asset('assets/auth/images/logo.svg')}}">
                    <span class="text-white text-lg ml-3">پوردستمالچی </span>
                </a>
                <div class="my-auto">
                    <img alt="Midone Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16"
                         src="{{asset('assets/auth/images/illustration.svg')}}">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                        تنها چند کلیک
                        <br>
                        مانده تا ساخت اکانتتان
                    </div>
                    <div class="-intro-x mt-5 text-lg text-white dark:text-gray-500">تمامی اکانت های خود را در یک مکان
                        مدیریت کنید
                    </div>
                </div>
            </div>
        <form action="{{ route('post-login-with-phone') }}" method="post">
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->

            @csrf
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div
                    class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                        شماره تماس شما {{$phone_number}} می باشد.
                    </h2>

                    <h4>رمز عبور یکبار مصرف برای شما ارسال شد</h4>

                    <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">چند کلیک دیگر برای ورود به اکانت خود
                        دارید . همه حساب های تجارت الکترونیکی خود را در یک مکان مدیریت کنید
                    </div>
                        @csrf
                        <input type="hidden"  name="phone_number" value="{{$phone_number}}">
                        <input type="text" name="verify_code" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="کد 5 رقمی خود را وارد کنید.">

{{--                    <div class="intro-x mt-8">--}}
{{--                                            <input  id="email" type="text"  name="email" class=" @error('email') is-invalid @enderror intro-x login__input input input--lg border border-gray-300 block" value="{{ old('email') }}" placeholder="ایمیل" required autocomplete="email" autofocus>--}}


{{--                        @error('email')--}}


{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                        @enderror--}}

{{--                        <input id="password" type="password"--}}
{{--                               class="form-control @error('password') is-invalid @enderror" name="password" required--}}
{{--                               autocomplete="current-password">--}}
{{--                        @error('password')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                        @enderror--}}
{{--                        <input type="text"  id="password" name="password" class=" @error('password') is-invalid @enderror intro-x login__input input input--lg border border-gray-300 block" value="{{ old('password') }}" placeholder="رمز عبور" required autocomplete="password" autofocus>--}}

{{--                        --}}{{--                    <input type="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="رمزعبور">--}}
{{--                    </div>--}}
{{--                    <div class="intro-x flex text-gray-700 dark:text-gray-600 text-xs sm:text-sm mt-4">--}}
{{--                        <div class="flex items-center mr-auto">--}}
{{--                            --}}{{--                        <input type="checkbox" class="input border mr-2" id="remember-me">--}}
{{--                            <input class="form-check-input" type="checkbox" name="remember"--}}
{{--                                   id="remember" {{ old('remember') ? 'checked' : '' }}>--}}
{{--                            <label class="cursor-pointer select-none" for="remember-me">مرا به خاطر داشته باش</label>--}}
{{--                        </div>--}}
{{--                        @if (Route::has('password.request'))--}}
{{--                            <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                {{ __('فراموشی رمز عبور؟') }}--}}
{{--                            </a>--}}
{{--                        @endif--}}
{{--                    </div>--}}
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button
                            class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">{{ __('ورود') }}</button>

{{--                        <button--}}
{{--                            class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 dark:border-dark-5 dark:text-gray-300 mt-3 xl:mt-0">--}}
{{--                            ثبت نام--}}
{{--                        </button>--}}
                    </div>

                </div>
            </div>
        </form>
        <!-- END: Login Form -->
    </div>
</div>
<!-- BEGIN: Dark Mode Switcher-->
{{--<div    class="dark-mode-switcher shadow-md fixed bottom-0 right-0 box dark:bg-dark-2 border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">--}}
{{--    <div class="mr-4 text-gray-700 dark:text-gray-300">حالت تیره</div>--}}
{{--    <input class="input input--switch border" type="checkbox" value="1">--}}
{{--</div>--}}
<!-- END: Dark Mode Switcher-->
<!-- BEGIN: JS Assets-->
<script src="{{asset('assets/auth/js/app.js')}}"></script>
<!-- END: JS Assets-->
</body>

</html>
