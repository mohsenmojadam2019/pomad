@extends('dashboard.layouts.app')
@section('content')

    <div id="content" class="main-content ">

        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/user-address')}}"> مشاوره</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/user-address')}}">مدیریت مشاوران</a></li>
            </ol>
        </nav>


        <div class="row">
            <div class="col-md-4">
                <div class="row page-header">
                    <div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>آلبوم عکس</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="widget-content widget-content-area">
                                        <form action="" method="POST" class="needs-validation was-validated"
                                              novalidate="">

                                            @csrf

                                            <div class="form-row">
                                                <div class="col-md-12 mb-2">

                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-2">
                                                            <input value="" name="national_code"
                                                                   type="text" class="form-control"
                                                                   id="validationCustom03"
                                                                   placeholder=" نام " required="">
                                                            <div class="valid-feedback">
                                                                به نظر خوب میاد!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                لطفا وارد کنید!
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-2">
                                                            <input value="" name="national_code"
                                                                   type="text" class="form-control"
                                                                   id="validationCustom03"
                                                                   placeholder=" نام خانوادگی" required="">
                                                            <div class="valid-feedback">
                                                                به نظر خوب میاد!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                لطفا وارد کنید!
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-2">
                                                            <select class="custom-select" name="gender" id="">

                                                                <option value="all" selected>جنسیت</option>


                                                            </select>
                                                            <div class="valid-feedback">
                                                                به نظر خوب میاد!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                لطفا وارد کنید!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-2">
                                                            <input value="" name="national_code"
                                                                   type="text" class="form-control"
                                                                   id="validationCustom03"
                                                                   placeholder="کدملی" required="">
                                                            <div class="valid-feedback">
                                                                به نظر خوب میاد!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                لطفا وارد کنید!
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-2">
                                                            <input value="" name="national_code"
                                                                   type="text" class="form-control"
                                                                   id="validationCustom03"
                                                                   placeholder=" نام مدرسه" required="">
                                                            <div class="valid-feedback">
                                                                به نظر خوب میاد!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                لطفا وارد کنید!
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-2">
                                                            <select class="custom-select" name="" id="">

                                                                <option value="all">رشته</option>

                                                            </select>
                                                            <div class="valid-feedback">
                                                                به نظر خوب میاد!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                لطفا وارد کنید!
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-2">
                                                            <select class="custom-select" name="" id="">

                                                                <option value="all">مقطع</option>

                                                            </select>
                                                            <div class="valid-feedback">
                                                                به نظر خوب میاد!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                لطفا وارد کنید!
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-2">
                                                            <input value="" name="national_code"
                                                                   type="text" class="form-control"
                                                                   id="validationCustom03"
                                                                   placeholder="تلفن ثابت" required="">
                                                            <div class="valid-feedback">
                                                                به نظر خوب میاد!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                لطفا وارد کنید!
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-2">
                                                            <input value="" name="national_code"
                                                                   type="text" class="form-control"
                                                                   id="validationCustom03"
                                                                   placeholder="شماره همراه" required="">
                                                            <div class="valid-feedback">
                                                                به نظر خوب میاد!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                لطفا وارد کنید!
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-2">
                                                            <select class="custom-select" name="" id="">

                                                                <option value="all">نام مشاور همراه</option>

                                                            </select>
                                                            <div class="valid-feedback">
                                                                به نظر خوب میاد!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                لطفا وارد کنید!
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-2">
                                                            <select class="custom-select" name="" id="">

                                                                <option value="all">گروه ثبت نامی</option>

                                                            </select>
                                                            <div class="valid-feedback">
                                                                به نظر خوب میاد!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                لطفا وارد کنید!
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-2">
                                                            <select class="custom-select" name="" id="">

                                                                <option value="all">پروژه</option>

                                                            </select>
                                                            <div class="valid-feedback">
                                                                به نظر خوب میاد!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                لطفا وارد کنید!
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-2">
                                                            <select class="custom-select" name="" id="">

                                                                <option value="all">سال کنکور</option>

                                                            </select>
                                                            <div class="valid-feedback">
                                                                به نظر خوب میاد!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                لطفا وارد کنید!
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-2">
                                                            <select class="custom-select" name="" id="">

                                                                <option value="all"> مرتب سازی</option>

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

                                            <button class="btn btn-secondary mb-2"
                                                    type="submit">فیلتر
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-8">

                <div class="row page-header">
                    <div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>نتیجه جستجو</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="col-md-2">
                                        <img src="" alt="">
                                        <p>محسن مجدم</p>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="" alt="">
                                        <p>محسن مجدم</p>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="" alt="">
                                        <p>محسن مجدم</p>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="" alt="">
                                        <p>محسن مجدم</p>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    {{--modal--}}
    <!-- Modal -->
    <div class="modal fade register-modal" id="registerModal" tabindex="-1" role="dialog"
         aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header" id="registerModalLabel">
                    <h4 class="modal-title"> اطلاعات داوطلب </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="mt-0">

                        <div class="form-group">
                            <select class="form-control custom-select" id="">

                                <option value="all">جنسیت</option>

                            </select>
                        </div>


                        <div class="form-group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-user">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            <input type="text" class="form-control mb-2" id="exampleInputUsername1"
                                   placeholder="نام مشاور">
                        </div>
                        <div class="form-group">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-at-sign">
                                <circle cx="12" cy="12" r="4"></circle>
                                <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                            </svg>
                            <input type="email" class="form-control mb-2" id="exampleInputEmail2"
                                   placeholder="شماره همراه">
                        </div>

                        <div class="form-group">
                            <select class="form-control custom-select" id="">

                                <option value="all">جنسیت</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <input type="text" value="" placeholder="ظرفیت">
                        </div>
                        <button type="submit" class="btn btn-secondary mt-2 mb-2 btn-block"> ذخیره</button>
                    </form>


                </div>
                <div class="modal-footer justify-content-center">
                    <div class="forgot login-footer">
                        {{--                        <span>قبلا <a href="javascript:void(0);">حساب داشتید</a>؟</span>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>







@endsection




