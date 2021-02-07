@extends('dashboard.layouts.app')
@section('content')


    <div id="content" class="main-content">

        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/user-info')}}">اطلاعات </a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/user-info/create')}}">اضافه کردن اطلاعات </a></li>
                {{--                <li class="breadcrumb-item" aria-current="page"><a href="{{url('dashboard/user-address')}}">صفحه اصلی</a></li>--}}
            </ol>
        </nav>


        <div class="container">


            <div class="row page-header">
                <div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>اطلاعات کاربر</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form action="{{route('user-info.store')}}" method="POST" class="needs-validation was-validated" novalidate="">

                                @csrf



                                <div class="form-row">
                                    <div class="col-md-6 mb-4">
                                        <label for="validationCustom03">نام</label>
                                        <input value="{{$user_info ? $user_info->first_name : ''}}" name="first_name"
                                               type="text" class="form-control" id="validationCustom03"
                                               placeholder=" نام خود را وارد کنید" required="">
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
                                        <label for="validationCustom03">نام خانوادگی</label>
                                        <input value="{{ $user_info ?  $user_info->last_name : ''}}" name="last_name" type="text"
                                               class="form-control" id="validationCustom03" placeholder=" نام خانوادگی خود را وارد کنید"
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
                                        <label for="validationCustom03">تاریخ تولد</label>
                                        <input value="{{$user_info ? $user_info->birth_date: ''}}" name="birth_date" type="text"
                                               class="form-control " id="datepicker0"
                                               placeholder="  "
                                               required="" >

                                        {{--                                            <input id="datepicker0" type="text" class="hasDatepicker">--}}

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
                                        <div id="select_menu" class="form-group ">
                                            <select class="custom-select" required name="gender">
                                                <option value="male" >آقا</option>
                                                <option value="female" selected="selected">خانوم</option>

                                            </select>
                                            <div class="valid-feedback">به عنوان مثال بازخورد سفارشی معتبر را انتخاب
                                                کنید
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفاً زمینه را انتخاب کنید
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <button  class="btn btn-secondary mb-2"
                                         type="submit">ثبت</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>










@endsection




