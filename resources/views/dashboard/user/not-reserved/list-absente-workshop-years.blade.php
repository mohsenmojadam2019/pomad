@extends('dashboard.layouts.app')
@section('content')
{{--دومی--}}
    <div id="content" class="main-content">

        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/educational-group')}}">مشاوره</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/educational-group')}}">انتخاب کارگاه</a>
                </li>
                {{--                <li class="breadcrumb-item" aria-current="page"><a href="{{url('dashboard/user-address')}}">صفحه اصلی</a></li>--}}
            </ol>
        </nav>


        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>انتخاب کارگاه</h3>
                </div>
            </div>

            <div class="row layout-top-spacing" id="cancel-row">
                <div class="container">
                    <div class="container">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="table-responsive mb-4 mt-4">
                            <div id="default-ordering_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">


                                <div class="row">
                                    <div class="col-sm-12">

                                        <form methode="post" action=""  class="needs-validation was-validated" novalidate="">
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-6 mb-4">
                                                    <div class="input-group">

                                                        <select class="form-control form-control-sm " name="" id="">
                                                            <option value="all"> انتخاب کارگاه</option>
                                                        </select>
                                                        &nbsp
                                                        &nbsp
                                                        &nbsp
                                                        &nbsp

                                                        <select class="form-control form-control-sm" name="" id="">
                                                            <option value="all"> انتخاب گروه</option>
                                                        </select>
                                                        &nbsp
                                                        &nbsp
                                                        &nbsp
                                                        &nbsp

                                                        <button  class="btn btn-secondary mt-2 mr-3-3">انتخاب</button>

                                                    </div>


                                                </div>
                                        </form>

                                        <div class="col-md-12">
                                            <span style="margin-left: 100px">نام کارگاه :    <span style="color: red">  دختر 1400</span></span>
                                            <span style="margin-right: 100px">تعداد غائبین :    <span  style="color: red"> 0 نفر</span></span>


                                        </div>





                                            @csrf

                                            <table id="default-ordering" class="table table-hover dataTable"
                                                   style="width:100%" role="grid"
                                                   aria-describedby="default-ordering_info">

{{--                                                <div class="row">--}}

{{--                                                    <div style="width: 50px;height: 50px;margin:0 30px 30px 0"><img--}}
{{--                                                            src="{{asset('assets/dashboard/img/pourdastmalchi.png')}}"--}}
{{--                                                            alt=""--}}
{{--                                                            width="100px" height="50"></div>--}}
{{--                                                    <div style="margin-left: 30px;margin-right: 80px">--}}

{{--                                                        <span style="text-align: center">لیست غایبین کارگاه</span>--}}


{{--                                                    </div>--}}

{{--                                                    <div style="margin-left: 30px;margin-right: 80px">--}}


{{--                                                        <span style="color: #6f42c1 "></span>--}}

{{--                                                    </div>--}}


{{--                                                </div>--}}


                                                <thead>
                                                <tr role="row">
                                                    <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                        rowspan="1" colspan="1"
                                                        aria-label="ردیف: activate to sort column ascending"
                                                        style="width: 50px;text-align: center;font-size: 12px "
                                                    >ردیف
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                        aria-label=" کد داوطلب : activate to sort column ascending"
                                                        style="width: 200px;text-align: center;font-size: 12px "> کد
                                                        داوطلب
                                                    </th>

                                                    <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                        aria-label=" نام : activate to sort column ascending"
                                                        style="width: 200px;text-align: center;font-size: 12px "> نام
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                        aria-label=" نام خانوادگی : activate to sort column ascending"
                                                        style="width: 200px;text-align: center;font-size: 12px "> نام
                                                        خانوادگی
                                                    </th>

                                                    <th class="sorting" tabindex="0" aria-controls="default-ordering"

                                                        aria-label=" مشاور : activate to sort column ascending"
                                                        style="width: 200px;text-align: center;font-size: 12px "> مشاور
                                                    </th>
                                                    <th class="sorting_desc" tabindex="0"
                                                        aria-controls="default-ordering" aria-sort="descending"
                                                        aria-label="رشته: activate to sort column ascending "
                                                        style="width:200px;text-align: center;font-size: 12px ">رشته
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                        width="300px"
                                                        aria-label="گروه : activate to sort column ascending"
                                                        style="width: 200px;text-align: center;font-size: 12px "> گروه
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                        rowspan="1" colspan="1"
                                                        aria-label=" مدرسه : activate to sort column ascending"
                                                        style="width: 200px;text-align: center;font-size: 12px "> مدرسه
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                        rowspan="1" colspan="1"
                                                        aria-label="تاریخ ثبت نام: activate to sort column ascending"
                                                        style="width: 200px;text-align: center;font-size: 10px ">تاریخ
                                                        ثبت نام
                                                    </th>


                                                    <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                        rowspan="1" colspan="1"
                                                        aria-label="علت: activate to sort column ascending"
                                                        style="width: 200px;text-align: center;font-size: 12px ">علت
                                                    </th>


                                                </tr>
                                                </thead>
                                                <tbody>

                                                <tr>
                                                    <th rowspan="1" colspan="1"
                                                        style="text-align: center;font-size: 13px">1
                                                    </th>
                                                    <th style="text-align: center;font-size: 13px"> 15739</th>
                                                    <th rowspan="1" colspan="1"
                                                        style="text-align: center;font-size: 13px"> محسن
                                                    </th>
                                                    <th rowspan="1" colspan="1"
                                                        style="text-align: center;font-size: 13px"> مجدم
                                                    </th>


                                                    <th rowspan="1" colspan="1"
                                                        style="text-align: center;font-size: 13px">قریشی1400
                                                    </th>
                                                    <th style="text-align: center;font-size: 13px">علوم ریاضی</th>
                                                    <th width="200px" style="text-align: center;font-size: 13px"> یازدهم
                                                        غیر حضوری 1400
                                                    </th>

                                                    <th rowspan="1" colspan="1"
                                                        style="text-align: center;font-size: 13px"> فرزانگان
                                                    </th>


                                                    <th rowspan="1" colspan="1"
                                                        style="text-align: center;font-size: 13px"> 1395/01/02
                                                    </th>
                                                    <th rowspan="1" colspan="1"
                                                        style="text-align: center;font-size: 13px"> تاخیر
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





@endsection









