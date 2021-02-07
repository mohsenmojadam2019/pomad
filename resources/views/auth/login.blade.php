<!DOCTYPE html>

<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <meta charset="utf-8">
    <link href="{{asset('assets/auth/images/logo.svg')}}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content=" possibilities.">
    <meta name="keywords"
          content="admin template web app">
    <meta name="author" content="LEFT4CODE">
    <title>ورود </title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/auth/css/app.css')}}"/>
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="login">
<div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
        <!-- BEGIN: Login Info -->



            <div class=" xl:flex flex-col min-h-screen mt-3">
                <a href="#" class="-intro-x flex items-center pt-3">
                    <img alt="Midone Tailwind HTML Admin Template" class="w-6"
                         src="{{asset('assets/dashboard/img/pourdastmalchi.png')}}" width="200" height="200">
                    <span class="text-white text-lg ml-3">پوردستمالچی </span>
                </a>
                <div class="my-auto">
                    <img alt="Midone Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16"
                         src="{{asset('assets/auth/images/illustration.svg')}}">
{{--                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">--}}
{{--                        تنها چند کلیک--}}
{{--                        <br>--}}
{{--                        مانده تا ساخت اکانت تان--}}
{{--                    </div>--}}
{{--                    <div class="-intro-x mt-5 text-lg text-white dark:text-gray-500">تمامی اکانت های خود را در یک مکان--}}
{{--                        مدیریت کنید--}}
{{--                    </div>--}}
                </div>
            </div>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('post-login') }}" method="post">
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->

            @csrf
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0 " style="margin-top: 200px">
                <div
                    class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                        ورود به حساب کاربری
                    </h2>


                    <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">چند کلیک دیگر برای ورود به اکانت خود
                        دارید
                    </div>


                    <form action="{{route('post-login')}}" method="post">
                        @csrf

                        @lang('auth.failed')

                        <input name="phoneNumber" type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="ورود با شماره تلفن">
                    </form>

                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button
                            class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">{{ __('ورود') }}</button>

                    </div>
                    <div class="intro-x mt-10 xl:mt-24 text-gray-700 dark:text-gray-600 text-center xl:text-left">
                        با ورود شما تمامی شرایط زیر را میپذیرید
                        <br>
                        <a class="text-theme-1 dark:text-theme-10" href="#">قوانین و مقررات</a> و <a
                            class="text-theme-1 dark:text-theme-10" href="#">حریم شخصی</a>
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
