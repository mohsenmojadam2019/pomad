@extends('dashboard.layouts.app')
@section('content')



    <div id="content" class="main-content ">

        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/user-address')}}"> ثبت نام</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/user-address')}}">ویرایش داوطلب</a></li>
            </ol>
        </nav>


{{--        <div class="row">--}}




                            <div class="row">
                                <div class="col-md-4">
                                              <div class="row page-header">
                                                        <div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
                                                            <div class="statbox widget box box-shadow">
                                                                <div class="widget-header">
                                                                    <div class="row">
                                                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                                            <h4>اطلاعات فردی</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                    <div class="widget-content widget-content-area">


                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <input value="" name="national_code"
                                                               type="text" class="form-control" id="validationCustom03"
                                                               placeholder=" نام" required="">
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <input value="" name="national_code"
                                                               type="text" class="form-control" id="validationCustom03"
                                                               placeholder=" نام خانوادگی" required="">
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <select class="custom-select" name="" id="">

                                                            <option value="all">جنسیت</option>

                                                        </select>
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <input value="" name="national_code"
                                                               type="text" class="form-control" id="validationCustom03"
                                                               placeholder=" کدملی" required="">
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <select class="custom-select" name="" id="">
                                                            <option value="all">معرف</option>
                                                        </select>
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <select class="custom-select" name="" id="">
                                                            <option value="all">متقاضی برای</option>
                                                        </select>
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <input value="" name="national_code"
                                                               type="file" class="form-control" id="validationCustom03"
                                                               placeholder=" نام" required="">
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
4
            </div>

            <div class="col-md-4">
                <div class="row page-header">
                    <div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4> اطلاعات تحصیلی</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="widget-content widget-content-area">
                                        <form action="" method="post">
@csrf
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <input value="" name="national_code"
                                                               type="text" class="form-control" id="validationCustom03"
                                                               placeholder="مدرسه" required="">
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>


                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <input value="" name="national_code"
                                                               type="text" class="form-control" id="validationCustom03"
                                                               placeholder=" مدرسه سال یازدهم" required="">
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>


                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <input value="" name="national_code"
                                                               type="text" class="form-control" id="validationCustom03"
                                                               placeholder=" مدرسه سال دهم" required="">
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>


                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <input value="" name="national_code"
                                                               type="text" class="form-control" id="validationCustom03"
                                                               placeholder=" مدرسه سال نهم" required="">
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>


                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <input value="" name="national_code"
                                                               type="text" class="form-control" id="validationCustom03"
                                                               placeholder=" معدل کتبی دیپلم" required="">
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>


                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <input value="" name="national_code"
                                                               type="text" class="form-control" id="validationCustom03"
                                                               placeholder=" تراز آزمون" required="">
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>


                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <input value="" name="national_code"
                                                               type="text" class="form-control" id="validationCustom03"
                                                               placeholder=" تاریخ تولد" required="">
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>


                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <input value="" name="national_code"
                                                               type="text" class="form-control" id="validationCustom03"
                                                               placeholder=" تاریخ ثبت نام" required="">
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>


                                        </div>


                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <select class="custom-select" name="" id="">
                                                            <option value="all">مقطع تحصیلی</option>
                                                        </select>
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <select class="custom-select" name="" id="">
                                                            <option value="all">سال آزمون سراسری</option>
                                                        </select>
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <select class="custom-select" name="" id="">
                                                            <option value="all">رشته تحصیلی</option>
                                                        </select>
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <select class="custom-select" name="" id="">
                                                            <option value="all">گروه آزمایشی</option>
                                                        </select>
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <select class="custom-select" name="" id="">
                                                            <option value="all">سال دیپلم</option>
                                                        </select>
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <select class="custom-select" name="" id="">
                                                            <option value="all">آزمون های آزمایشی</option>
                                                        </select>
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <select class="custom-select" name="" id="">
                                                            <option value="all">مشاوره همراه</option>
                                                        </select>
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <select class="custom-select" name="" id="">
                                                            <option value="all">درصد تخفیف</option>
                                                        </select>
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="row page-header">
                    <div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>اطلاعات تماس</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="widget-content widget-content-area">


                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-6 mb-2">
                                                        <input  value="" name="national_code"
                                                               type="text" class="form-control" id="validationCustom03"
                                                               placeholder=" تلفن ثابت" required="">
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>ّ
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <input value="" name="national_code"
                                                               type="text" class="form-control" id="validationCustom03"
                                                               placeholder=" کد شهر" required="">
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>


                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <input value="" name="national_code"
                                                               type="text" class="form-control" id="validationCustom03"
                                                               placeholder=" شماره همراه داوطلب" required="">
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>


                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <input value="" name="national_code"
                                                               type="text" class="form-control" id="validationCustom03"
                                                               placeholder=" شماره همراه مادر" required="">
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>


                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <input value="" name="national_code"
                                                               type="text" class="form-control" id="validationCustom03"
                                                               placeholder=" شماره همراه پدر" required="">
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>


                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <input value="" name="national_code"
                                                               type="text" class="form-control" id="validationCustom03"
                                                               placeholder=" شماره تلفن ضروری" required="">
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>


                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <input value="" name="national_code"
                                                               type="text" class="form-control" id="validationCustom03"
                                                               placeholder=" شهر" required="">
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>


                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2 ">
                                                        <textarea placeholder="آدرس" name="" id="" class="form-control"></textarea>
                                                    </div>

                                                </div>

                                            </div>


                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <input value="" name="national_code"
                                                               type="text" class="form-control" id="validationCustom03"
                                                               placeholder=" کد پستی" required="">
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>


                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <select class="custom-select" name="" id="">

                                                            <option value="all">استان</option>

                                                        </select>
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <select class="custom-select" name="" id="">

                                                            <option value="all">محدوده سکونت در تهران</option>

                                                        </select>
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">

                                                        <textarea placeholder="نواقص" name="" id="" class="form-control"></textarea>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <textarea placeholder="توضیحات" name="" id="" class="form-control"></textarea>

                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-2">
                                                        <button type="submit" href="" class="btn btn-secondary" style="float: left">سفارشی</button>
                                                        <a href="" class="btn btn-danger" style="float: right">ویرایش</a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



            </div>

    </div>

@endsection




