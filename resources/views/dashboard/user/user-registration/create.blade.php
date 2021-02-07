@extends('dashboard.layouts.app')
@section('content')



    <div id="content" class="main-content">

        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/create-user')}}">جلسات مشاوره همراه</a></li>
                {{--                <li class="breadcrumb-item" aria-current="page"><a href="{{url('dashboard/user-address')}}">صفحه اصلی</a></li>--}}
            </ol>
        </nav>
        <div class="container">
            <div class="container">
                <div class="row page-header">
                    <div id="custom_styles" class="col-lg-12 mb-4 layout-spacing col-md-12 mb-4">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 mb-4 col-md-12 mb-4 col-sm-12 mb-4 col-12 mb-4">
                                        <h4>ثبت متقاضی</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form action="{{route('user-profile.store')}}"  class="needs-validation was-validated" novalidate=""   method="POST"
                                      class="" novalidate="">
                                    @csrf
                                    <div class="row">
                                        <div class="form-row ql-color-green">


                                            {{--      ردیف اول                              --}}
                                            <div class="col-md-4">

                                                <h5>اطلاعات فردی</h5>

                                                <div class="col-md-12 mb-4 ">
                                                    <div class="input-group   mb-4">

                                                        <input value="" name="name"
                                                               type="text"
                                                               class="form-control form-control-sm"
                                                               id="validationCustomUsername"
                                                               placeholder="نام" aria-describedby="inputGroupPrepend"
                                                               required="">




                                                        <div class="valid-feedback">
                                                        </div>
                                                        <div class="invalid-feedback">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-4 ">
                                                    <div class="input-group   mb-4">

                                                        <input value="" name="last_name" type="text"
                                                               class="form-control form-control-sm"
                                                               id="validationCustomUsername"
                                                               placeholder="نام خانوادگی"
                                                               aria-describedby="inputGroupPrepend"
                                                               required="">
                                                        <div class="valid-feedback">
                                                        </div>
                                                        <div class="invalid-feedback">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-4 ">
                                                    <div class="input-group   mb-4">


                                                        <select value="" name="gender" type="text"
                                                                class="form-control form-control-sm  form-control form-control-sm-sm"
                                                                id="validationCustomUsername"
                                                                aria-describedby="inputGroupPrepend"
                                                                required="">
                                                            <option value="0">پسر</option>
                                                            <option value="1">دختر</option>


                                                        </select>


                                                        <div class="valid-feedback">
                                                        </div>
                                                        <div class="invalid-feedback">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-4 ">
                                                    <div class="input-group   mb-4">

                                                        <input value="" name="national_code" type="text"
                                                               class="form-control form-control-sm"
                                                               id="validationCustomUsername"
                                                               placeholder="کد ملی" aria-describedby="inputGroupPrepend"
                                                               required="">
                                                        <div class="valid-feedback">
                                                        </div>
                                                        <div class="invalid-feedback">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-4 ">
                                                    <div class="input-group   mb-4">


                                                        <select value="" name="title" type="text"
                                                                class="form-control form-control-sm"
                                                                id="validationCustomUsername"
                                                                placeholder="معرف" aria-describedby="inputGroupPrepend"
                                                                required="">

                                                            <option value="all">معرف</option>


                                                        </select>


                                                        <div class="valid-feedback">
                                                        </div>
                                                        <div class="invalid-feedback">
                                                        </div>
                                                    </div>
                                                </div>



                                                    {{--province--}}
                                                    <div class="col-md-12 mb-4">


                                                        <select value="" name="province"
                                                                type="text" class="form-control form-control-sm"
                                                                id="validationCustom03"
                                                                required="">

                                                            <option value="all">متقاضی برای</option>


                                                        </select>


                                                        <div class="valid-feedback">
                                                        </div>
                                                        <div class="invalid-feedback">
                                                        </div>
                                                    </div>

                                                </div>



                                            {{--                                 ردیف دوم   --}}
                                            <div class="col-md-4">
                                                <h5>اطلاعات تحصیلی</h5>


                                                <div class="col-md-12 mb-4">

                                                    <select value="" name="title" type="type"
                                                            class="form-control form-control-sm" id="validationCustom01"
                                                            placeholder="مقطع تحصیلی"
                                                            value="" required="">

                                                        <option value="all">مقطع تحصیلی</option>

                                                    </select>


                                                    <div class="valid-feedback">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-4">


                                                    <select value="" name="password" type="type"
                                                            class="form-control form-control-sm" id="validationCustom01"
                                                            placeholder="سال آزمون سراسری"
                                                            required="">

                                                        <option value="all" name="">سال آزمون سراسری</option>


                                                    </select>


                                                    <div class="valid-feedback">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-4">
                                                    <input value="" name="school_12 mb-4" type="type"
                                                           class="form-control form-control-sm" id="validationCustom01"
                                                           placeholder="مدرسه سال دوازدهم"
                                                           value="" required="">
                                                    <div class="valid-feedback">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-4">
                                                    <input value="" name="school_11" type="type"
                                                           class="form-control form-control-sm" id="validationCustom01"
                                                           placeholder="مدرسه سال یازدهم"
                                                           value="" required="">
                                                    <div class="valid-feedback">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-4">
                                                    <input value="" name="school_10"
                                                           type="text" class="form-control form-control-sm"
                                                           id="validationCustom03"
                                                           placeholder=" مدرسه سال دهم" required="">
                                                    <div class="valid-feedback">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-4 ">
                                                    <input value="" name="school_9"
                                                           type="text" class="form-control form-control-sm"
                                                           id="validationCustom03"
                                                           placeholder=" مدرسه نهم" required="">
                                                    <div class="valid-feedback">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    </div>
                                                </div>


                                                <div class="col-md-12 mb-4">


                                                    <select value="" name="title" type="type"
                                                            class="form-control form-control-sm" id="validationCustom01"
                                                            placeholder="رشته تحصیلی"
                                                            value="" required="">

                                                        <option value="all">رشته تحصیلی</option>

                                                    </select>


                                                    <div class="valid-feedback">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    </div>
                                                </div>


                                                <div class="col-md-12 mb-4">


                                                    <select value="" name="title" type="type"
                                                            class="form-control form-control-sm" id="validationCustom01"
                                                            placeholder="گروه آزمایشی"
                                                            value="" required="">

                                                        <option value="all">گروه آزمایشی</option>

                                                    </select>


                                                    <div class="valid-feedback">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    </div>
                                                </div>


                                                <div class="col-md-12 mb-4">
                                                    <input value="" name="average_Written_diplom" type="type"
                                                           class="form-control form-control-sm" id="validationCustom01"
                                                           placeholder="معدل کتبی دیپلم"
                                                           required="">
                                                    <div class="valid-feedback">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    </div>


                                                </div>
                                                {{--academiccYear--}}
                                                <div class="col-md-12 mb-4">



                                                    <select value="" name="academic_year" type="type"
                                                            class="form-control form-control-sm" id="validationCustom01"
                                                            placeholder="سال دیپلم"
                                                            required="">

                                                        <option value="all">سال دیپلم</option>

                                                    </select>


                                                    <div class="valid-feedback">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    </div>


                                                </div>
                                                {{--                                        azmoon--}}
                                                <div class="col-md-12 mb-4">


                                                    <select value="" name="azmoon" type="type"
                                                            class="form-control form-control-sm" id="validationCustom01"

                                                            required="">

                                                        <option value="">آزمونهای آزمایشی</option>

                                                    </select>


                                                    <div class="valid-feedback">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-4">


                                                    <input type="text" placeholder="تراز آزمون"
                                                           class="form-control form-control-sm"
                                                           id="validationCustom01" name="level" id="">


                                                    <div class="valid-feedback">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    </div>


                                                </div>


                                            </div>

                                            {{--                             ردیف سوم       --}}
                                            <div class="col-md-4">
                                                <h5>اطلاعات تماس</h5>


                                                <div class="col-md-12 mb-4">
                                                    <div class="row">

                                                        <div class="col-md-7 ">
                                                            <input value="" name="telephon-home"
                                                                   type="text" class="form-control form-control-sm"
                                                                   id="validationCustom03"
                                                                   placeholder=" تلفن ثابت" required="">
                                                            <div class="valid-feedback">
                                                            </div>
                                                            <div class="invalid-feedback">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-5">
                                                            <input value="" maxlength="4" type="text" placeholder="کد"
                                                                   class="form-control form-control-sm "
                                                                   name="code" required="">
                                                        </div>


                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-4">
                                                    <input value="" name="main_number"
                                                           type="text" class="form-control form-control-sm"
                                                           id="validationCustom03"
                                                           placeholder=" شماره همراه داوطلب" required="">
                                                    <div class="valid-feedback">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-4">
                                                    <input value="" name="mother_number"
                                                           type="text" class="form-control form-control-sm"
                                                           id="validationCustom03"
                                                           placeholder=" شماره همراه مادر داوطلب" required="">
                                                    <div class="valid-feedback">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-4">
                                                    <input value="" name="father_number"
                                                           type="text" class="form-control form-control-sm"
                                                           id="validationCustom03"
                                                           placeholder=" شماره همراه پدر داوطلب" required="">
                                                    <div class="valid-feedback">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-4 ">
                                                    <div class="input-group   mb-4">

                                                        <input value="" name="emergency_number" type="text"
                                                               class="form-control form-control-sm"
                                                               id="validationCustomUsername"
                                                               placeholder="شماره تلفن ضروری"
                                                               aria-describedby="inputGroupPrepend"
                                                               required="">
                                                        <div class="valid-feedback">
                                                        </div>
                                                        <div class="invalid-feedback">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-4 ">
                                                    <div class="input-group   mb-4">


                                                        <select value="" name="emergency_number" type="text"
                                                                class="form-control form-control-sm"
                                                                id="validationCustomUsername"
                                                                placeholder="استان"
                                                                aria-describedby="inputGroupPrepend"
                                                                required="">

                                                            <option value="all">استان خود/option>


                                                        </select>


                                                        <div class="valid-feedback">
                                                        </div>
                                                        <div class="invalid-feedback">
                                                        </div>
                                                    </div>
                                                </div>

                                                {{--city--}}
                                                <div class="col-md-12 mb-4">
                                                    <input value="" name="city"
                                                           type="text" class="form-control form-control-sm"
                                                           id="validationCustom03"
                                                           placeholder=" شهر" required="">
                                                    <div class="valid-feedback">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-4">


                                                    <textarea value="" name="address"
                                                              type="text" class="form-control form-control-sm"
                                                              id="validationCustom03"
                                                              placeholder=" آدرس منزل" required=""></textarea>


                                                    <div class="valid-feedback">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-4">
                                                    <input value=""
                                                           name="national_code"
                                                           type="text" class="form-control form-control-sm"
                                                           id="validationCustom03"
                                                           placeholder=" کدپستی" required="">
                                                    <div class="valid-feedback">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-4">


                                                    <select class="form-control form-control-sm" id="validationCustom01"
                                                            name="range">

                                                        <option value="" ></option>

                                                    </select>

                                                    <div class="valid-feedback">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    </div>


                                                </div>

                                                <div class="col-md-12 mb-4">

                                                    <textarea  class="form-control form-control-sm"
                                                              id="validationCustom01" name="description"
                                                              placeholder="توضیحات"   id="" cols="30" rows="10"></textarea>


                                                    <div class="valid-feedback">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                    </div>


                                                </div>


                                                <button class="btn btn-secondary mb-2"
                                                        type="submit">لیست متقاضیان
                                                </button>


                                            </div>


                                        </div>
                                    </div>


                                    <button class="btn btn-secondary mb-2"
                                            type="submit">ثبت
                                    </button>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>











@endsection




