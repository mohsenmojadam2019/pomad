@extends('dashboard.layouts.app')
@section('content')



    <div id="content" class="main-content">

        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/user-address')}}">ادرس</a></li>
                {{--                <li class="breadcrumb-item" aria-current="page"><a href="{{url('dashboard/user-address')}}">صفحه اصلی</a></li>--}}
            </ol>
        </nav>


        <div class="container">
            <div class="container">


                <div class="row page-header">
                    <div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>احراز هویت</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form action="{{route('user-profile.store')}}" method="POST" class="needs-validation was-validated" novalidate="">

                                 @csrf


                                    <div class="form-row">
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustomUsername">یوزرنیم</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                </div>
                                                <input value="{{auth()->user()->username}}" name="username" type="text"
                                                       class="form-control" id="validationCustomUsername"
                                                       placeholder="نام کاربری" aria-describedby="inputGroupPrepend"
                                                       required="">
                                                <div class="valid-feedback">
                                                    به نظر خوب میاد!
                                                </div>
                                                <div class="invalid-feedback">
                                                    لطفا وارد کنید!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom01">رمزعبور</label>
                                            <input value="{{auth()->user()->password}}" name="password" type="type"
                                                   class="form-control" id="validationCustom01" placeholder="رمزعبور"
                                                   value="" required="">
                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom03">کدپستی</label>
                                            <input value="{{auth()->user()->national_code}}" name="national_code"
                                                   type="text" class="form-control" id="validationCustom03"
                                                   placeholder=" کدپستی" required="">
                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>
                                        </div>
{{--                                        <div class="col-md-6 mb-4">--}}
{{--                                            <label for="validationCustom04">شماره تماس داوطلب</label>--}}
{{--                                            <input value="{{auth()->user()->main_number}}" name="main_number"--}}
{{--                                                   type="text" class="form-control" id="validationCustom04"--}}
{{--                                                   placeholder="شماره تماس داوطلب" required="">--}}


{{--                                            <div class="valid-feedback">--}}
{{--                                                به نظر خوب میاد!--}}
{{--                                            </div>--}}
{{--                                            <div class="invalid-feedback">--}}
{{--                                                لطفا وارد کنید!--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom03">ایمیل</label>
                                            <input value="{{auth()->user()->email}}" name="email" type="text"
                                                   class="form-control" id="validationCustom03" placeholder=" ایمیل"
                                                   required="">
                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-row">

                                    <div class="col-md-6 mb-4">
                                        <label for="validationCustom04">کد ملی داوطلب</label>
                                        <input value="{{auth()->user()->national_code}}" name="national_code"
                                               type="text" class="form-control" id="validationCustom04"
                                               placeholder="" >
                                        <div class="valid-feedback">
                                            به نظر خوب میاد!
                                        </div>
                                        <div class="invalid-feedback">
                                            لطفا وارد کنید!
                                        </div>

                                    </div>
                                    </div>

                                    <button  class="btn btn-secondary mb-2"
                                       type="submit">آپدیت</button>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>











@endsection




