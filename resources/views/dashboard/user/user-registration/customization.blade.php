@extends('dashboard.layouts.app')
@section('content')

    <div id="content" class="main-content ">

        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/user-address')}}"> مشاوره</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/user-address')}}">انصرافی ها</a></li>
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
                                        <h4>انصرافی ها</h4>
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

                                                            <input value="" name="national_code"
                                                                   type="text" class="form-control"
                                                                   id="validationCustom03"
                                                                   placeholder=" نام" required="">
                                                            <div class="valid-feedback">
                                                                به نظر خوب میاد!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                لطفا وارد کنید!
                                                            </div>

                                                    </div>
                                                    <div class="form-row">

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
                                                    <div class="form-row">

                                                        <input value="" name="national_code"
                                                               type="text" class="form-control"
                                                               id="validationCustom03"
                                                               placeholder=" کدملی" required="">
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>

                                                    </div>
                                                    <div class="form-row">

                                                        <input value="" name="national_code"
                                                               type="text" class="form-control"
                                                               id="validationCustom03"
                                                               placeholder=" کد داوطلب" required="">
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>

                                                    </div>
                                                    <div class="form-row">

                                                        <input value="" name="national_code"
                                                               type="text" class="form-control"
                                                               id="validationCustom03"
                                                               placeholder=" تلفن ثابت" required="">
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>

                                                    </div>
                                                    <div class="form-row">

                                                        <input value="" name="national_code"
                                                               type="text" class="form-control"
                                                               id="validationCustom03"
                                                               placeholder=" شماره همراه" required="">
                                                        <div class="valid-feedback">
                                                            به نظر خوب میاد!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            لطفا وارد کنید!
                                                        </div>

                                                    </div>







                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-2">
                                                            <select class="custom-select" name="gender" id="">

                                                                <option value="all" selected>فیلتر کنید</option>


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
                                                    type="submit">جستجو
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
                                    <div class="    table-responsive " id="cancel-row   modalVerticallyCentered ">
                                        <div id="default-ordering_wrapper"
                                             class="dataTables_wrapper container-fluid dt-bootstrap4">
                                            <table id="default-ordering" class="table table-hover dataTable"
                                                   role="grid"
                                                   aria-describedby="default-ordering_info">
                                                <thead>
                                                <tr role="row">
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="default-ordering"
                                                        rowspan="1" colspan="1"
                                                        aria-label="ردیف: activate to sort column ascending"
                                                        style="width: 50px;text-align: center;font-size: 12px "
                                                    >ردیف
                                                    </th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="default-ordering"
                                                        aria-label=" کد داوطلب : activate to sort column ascending"
                                                        style="width: 150px;text-align: center;font-size: 12px ">
                                                        کد
                                                        داوطلب
                                                    </th>

                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="default-ordering"
                                                        aria-label=" نام : activate to sort column ascending"
                                                        style="width: 150px;text-align: center;font-size: 12px ">
                                                        نام
                                                    </th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="default-ordering"
                                                        aria-label=" نام خانوادگی : activate to sort column ascending"
                                                        style="width: 170px;text-align: center;font-size: 12px ">
                                                        نام خانوادگی
                                                    </th>


                                                    <th class="sorting_desc" tabindex="0"
                                                        aria-controls="default-ordering"
                                                        aria-sort="descending"
                                                        aria-label="موبایل: activate to sort column ascending "
                                                        style="width:200px;text-align: center;font-size: 12px ">
                                                        موبایل
                                                    </th>

                                                    <th class="sorting_desc" tabindex="0"
                                                        aria-controls="default-ordering"
                                                        aria-sort="descending"
                                                        aria-label="سال تحصیلی: activate to sort column ascending "
                                                        style="width:200px;text-align: center;font-size: 12px ">
                                                        سال تحصیلی
                                                    </th>

                                                    <th class="sorting_desc" tabindex="0"
                                                        aria-controls="default-ordering"
                                                        aria-sort="descending"
                                                        aria-label="ظرفیت: activate to sort column ascending "
                                                        style="width:200px;text-align: center;font-size: 12px ">
                                                        ظرفیت
                                                    </th>
                                                    <th class="sorting_desc" tabindex="0"
                                                        aria-controls="default-ordering"
                                                        aria-sort="descending"
                                                        aria-label="تنظیمات: activate to sort column ascending "
                                                        style="width:200px;text-align: center;font-size: 12px ">
                                                        تنظیمات
                                                    </th>


                                                </tr>
                                                </thead>
                                                <tbody>

                                                <tr>
                                                    <th rowspan="1" colspan="1"
                                                        style="text-align: center;font-size: 13px">1
                                                    </th>

                                                    <th rowspan="1" colspan="1"
                                                        style="text-align: center;font-size: 13px"> 1810037492
                                                    </th>


                                                    <th rowspan="1" colspan="1"
                                                        style="text-align: center;font-size: 13px">محسن
                                                    </th>
                                                    <th style="text-align: center;font-size: 13px">
                                                        مجدم
                                                    </th>


                                                    <th rowspan="1" colspan="1"
                                                        style="text-align: center;font-size: 13px"> پسر 1400
                                                    </th>
                                                    <th rowspan="1" colspan="1"
                                                        style="text-align: center;font-size: 13px">1399
                                                    </th>
                                                    <th rowspan="1" colspan="1"
                                                        style="text-align: center;font-size: 13px"> 200
                                                    </th>
                                                    <th rowspan="1" colspan="1"
                                                        style="text-align: center;font-size: 13px">
                                                        <a style="color: #0d9a5d" data-toggle="modal" data-target="#exampleModalCenter">
                                                            مشاهده
                                                        </a>
/


                                                    </th>


                                                </tr>
                                            </table>
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


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">نمایش اطلاعات داوطلب</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <div class="panel-body ">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="row ml-2">
                                <div class="col-md-6 ">
                                    <label style="font-size: 12px"> نام :</label>
                                    <span style="color: #004fe6">1399</span>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <label style="font-size: 12px"> نام خانوادگی :</label>
                                <span style="color: #004fe6">1399</span>
                            </div>

                            <div class="col-md-6 ">
                                <label style="font-size: 12px"> کد ملی :</label>
                                <span style="color: #004fe6">1399</span>
                            </div>

                            <div class="col-md-6 ">
                                <label style="font-size: 12px"> کد داوطلبی :</label>
                                <span style="color: #004fe6">1399</span>
                            </div>

                            <div class="col-md-6 ">
                                <label style="font-size: 12px"> جنسیت :</label>
                                <span style="color: #004fe6">1399</span>
                            </div>

                            <div class="col-md-6 ">
                                <label style="font-size: 12px"> وضعیت تحصیلی :</label>
                                <span style="color: #004fe6">1399</span>
                            </div>

                            <hr>

                            <div class="col-md-6 ">
                                <label style="font-size: 12px"> سال دریافت دیپلم:</label>
                                <span style="color: #004fe6">1399</span>
                            </div>

                            <div class="col-md-6 ">
                                <label style="font-size: 12px"> معدل کتبی دیپلم:</label>
                                <span style="color: #004fe6">1399</span>
                            </div>

                            <div class="col-md-6 ">
                                <label style="font-size: 12px"> سال آزمون سراسری:</label>
                                <span style="color: #004fe6">1399</span>
                            </div>

                            <div class="col-md-6 ">
                                <label style="font-size: 12px"> تراز آزمون :</label>
                                <span style="color: #004fe6">1399</span>
                            </div>


                        </div>

                        <div class="col-md-6">

                            <div class="col-md-6 ">
                                <label style="font-size: 12px"> آزمون آزمایشی :</label>
                                <span style="color: #004fe6">1399</span>
                            </div>


                            <div class="col-md-6 ">
                                <label style="font-size: 12px"> رشته تحصیلی :</label>
                                <span style="color: #004fe6">1399</span>
                            </div>

                            <div class="col-md-6 ">
                                <label style="font-size: 12px"> رشته آزمون :</label>
                                <span style="color: #004fe6">1399</span>
                            </div>

                            <div class="col-md-6 ">
                                <label style="font-size: 12px"> نام مدرسه کنونی :</label>
                                <span style="color: #004fe6">1399</span>
                            </div>

                            <div class="col-md-6 ">
                                <label style="font-size: 12px"> مقطع تحصیلی :</label>
                                <span style="color: #004fe6">1399</span>
                            </div>
                            <div class="col-md-6 ">
                                <label style="font-size: 12px"> تلفن ثابت :</label>
                                <span style="color: #004fe6">1399</span>
                            </div>
                            <div class="col-md-6 ">
                                <label style="font-size: 12px"> همراه داوطلب :</label>
                                <span style="color: #004fe6">1399</span>
                            </div>
                            <div class="col-md-6 ">
                                <label style="font-size: 12px"> همراه مادر :</label>
                                <span style="color: #004fe6">1399</span>
                            </div>
                            <div class="col-md-6 ">
                                <label style="font-size: 12px"> همراه پدر :</label>
                                <span style="color: #004fe6">1399</span>
                            </div>
                            <div class="col-md-6 ">
                                <div style="font-size: 12px"> تلفن ضروری :</div>
                                <span style="color: #004fe6">1399</span>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal">
                        <i class="flaticon-cancel-12"></i> نادیده گرفتن
                    </button>
                </div>
            </div>
        </div>
    </div>







@endsection




