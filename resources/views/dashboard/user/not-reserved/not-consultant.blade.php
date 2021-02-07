@extends('dashboard.layouts.app')
@section('content')
    {{--جستجو داوطلبان بدون مشاور--}}


    <div id="content" class="main-content ">

        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/user-address')}}"> مشاوره</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/user-address')}}">داوطلبان بدون مشاور
                        همراه</a></li>
            </ol>
        </nav>


        <div class="row">
            {{--            <div class="col-md-4">--}}
            {{--                <div class="row page-header">--}}
            {{--                    <div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">--}}
            {{--                        <div class="statbox widget box box-shadow">--}}
            {{--                            <div class="widget-header">--}}
            {{--                                <div class="row">--}}
            {{--                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">--}}
            {{--                                        <h4>داوطلبان بدون مشاور همراه</h4>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                            <div class="row">--}}
            {{--                                <div class="col-md-12">--}}
            {{--                                    <div class="widget-content widget-content-area">--}}
            {{--                                        <form action="" method="POST" class="needs-validation was-validated"--}}
            {{--                                              novalidate="">--}}

            {{--                                            @csrf--}}


            {{--                                            <div class="form-row">--}}
            {{--                                                <div class="col-md-12 mb-2">--}}
            {{--                                                    <div class="form-row">--}}
            {{--                                                        <div class="col-md-12 mb-2">--}}
            {{--                                                            <input value="" name="name"--}}
            {{--                                                                   type="text" class="form-control" id="validationCustom03"--}}
            {{--                                                                   placeholder=" نام" required="">--}}
            {{--                                                            <div class="valid-feedback">--}}
            {{--                                                                به نظر خوب میاد!--}}
            {{--                                                            </div>--}}
            {{--                                                            <div class="invalid-feedback">--}}
            {{--                                                                لطفا وارد کنید!--}}
            {{--                                                            </div>--}}
            {{--                                                        </div>--}}

            {{--                                                    </div>--}}


            {{--                                                    <div class="form-row">--}}
            {{--                                                        <div class="col-md-12 mb-2">--}}
            {{--                                                            <select class="custom-select"   name="gender" id="">--}}

            {{--                                                                <option value="all" selected>جنسیت</option>--}}


            {{--                                                            </select>--}}
            {{--                                                            <div class="valid-feedback">--}}
            {{--                                                                به نظر خوب میاد!--}}
            {{--                                                            </div>--}}
            {{--                                                            <div class="invalid-feedback">--}}
            {{--                                                                لطفا وارد کنید!--}}
            {{--                                                            </div>--}}
            {{--                                                        </div>--}}
            {{--                                                        </div>--}}

            {{--                                                    <div class="form-row">--}}
            {{--                                                        <div class="col-md-12 mb-2">--}}
            {{--                                                            <input value="" name="national_code"--}}
            {{--                                                                   type="text" class="form-control" id="validationCustom03"--}}
            {{--                                                                   placeholder=" کدملی" required="">--}}
            {{--                                                            <div class="valid-feedback">--}}
            {{--                                                                به نظر خوب میاد!--}}
            {{--                                                            </div>--}}
            {{--                                                            <div class="invalid-feedback">--}}
            {{--                                                                لطفا وارد کنید!--}}
            {{--                                                            </div>--}}
            {{--                                                        </div>--}}

            {{--                                                    </div>--}}
            {{--                                                    <div class="form-row">--}}
            {{--                                                        <div class="col-md-12 mb-2">--}}
            {{--                                                            <input value="" name="national_code"--}}
            {{--                                                                   type="text" class="form-control" id="validationCustom03"--}}
            {{--                                                                   placeholder=" کد داوطلب" required="">--}}
            {{--                                                            <div class="valid-feedback">--}}
            {{--                                                                به نظر خوب میاد!--}}
            {{--                                                            </div>--}}
            {{--                                                            <div class="invalid-feedback">--}}
            {{--                                                                لطفا وارد کنید!--}}
            {{--                                                            </div>--}}
            {{--                                                        </div>--}}

            {{--                                                    </div>--}}
            {{--                                                    <div class="form-row">--}}
            {{--                                                        <div class="col-md-12 mb-2">--}}
            {{--                                                            <input value="" name="national_code"--}}
            {{--                                                                   type="text" class="form-control" id="validationCustom03"--}}
            {{--                                                                   placeholder=" نام مدرسه" required="">--}}
            {{--                                                            <div class="valid-feedback">--}}
            {{--                                                                به نظر خوب میاد!--}}
            {{--                                                            </div>--}}
            {{--                                                            <div class="invalid-feedback">--}}
            {{--                                                                لطفا وارد کنید!--}}
            {{--                                                            </div>--}}
            {{--                                                        </div>--}}

            {{--                                                    </div>--}}
            {{--                                                    <div class="form-row">--}}
            {{--                                                        <div class="col-md-12 mb-2">--}}
            {{--                                                            <select class="custom-select"  name="" id="">--}}

            {{--                                                                <option value="all">انتخاب رشته</option>--}}

            {{--                                                            </select>--}}
            {{--                                                            <div class="valid-feedback">--}}
            {{--                                                                به نظر خوب میاد!--}}
            {{--                                                            </div>--}}
            {{--                                                            <div class="invalid-feedback">--}}
            {{--                                                                لطفا وارد کنید!--}}
            {{--                                                            </div>--}}
            {{--                                                        </div>--}}

            {{--                                                    </div>--}}
            {{--                                                    <div class="form-row">--}}
            {{--                                                        <div class="col-md-12 mb-2">--}}
            {{--                                                            <select class="custom-select"  name="" id="">--}}
            {{--                                                                <option value="all">مقطع</option>--}}


            {{--                                                            </select>--}}
            {{--                                                            <div class="valid-feedback">--}}
            {{--                                                                به نظر خوب میاد!--}}
            {{--                                                            </div>--}}
            {{--                                                            <div class="invalid-feedback">--}}
            {{--                                                                لطفا وارد کنید!--}}
            {{--                                                            </div>--}}
            {{--                                                        </div>--}}

            {{--                                                    </div>--}}
            {{--                                                    <div class="form-row">--}}
            {{--                                                        <div class="col-md-12 mb-2">--}}
            {{--                                                            <input value="" name="national_code"--}}
            {{--                                                                   type="text" class="form-control" id="validationCustom03"--}}
            {{--                                                                   placeholder=" تلفن ثابت" required="">--}}
            {{--                                                            <div class="valid-feedback">--}}
            {{--                                                                به نظر خوب میاد!--}}
            {{--                                                            </div>--}}
            {{--                                                            <div class="invalid-feedback">--}}
            {{--                                                                لطفا وارد کنید!--}}
            {{--                                                            </div>--}}
            {{--                                                        </div>--}}

            {{--                                                    </div>--}}
            {{--                                                    <div class="form-row">--}}
            {{--                                                        <div class="col-md-12 mb-2">--}}
            {{--                                                            <input value="" name="national_code"--}}
            {{--                                                                   type="text" class="form-control" id="validationCustom03"--}}
            {{--                                                                   placeholder=" شماره همراه" required="">--}}
            {{--                                                            <div class="valid-feedback">--}}
            {{--                                                                به نظر خوب میاد!--}}
            {{--                                                            </div>--}}
            {{--                                                            <div class="invalid-feedback">--}}
            {{--                                                                لطفا وارد کنید!--}}
            {{--                                                            </div>--}}
            {{--                                                        </div>--}}

            {{--                                                    </div>--}}
            {{--                                                    <div class="form-row">--}}
            {{--                                                        <div class="col-md-12 mb-2">--}}
            {{--                                                            <select class="custom-select"  name="" id="">--}}
            {{--                                                                <option value="all">نام شماره همراه</option>--}}


            {{--                                                            </select>--}}
            {{--                                                            <div class="valid-feedback">--}}
            {{--                                                                به نظر خوب میاد!--}}
            {{--                                                            </div>--}}
            {{--                                                            <div class="invalid-feedback">--}}
            {{--                                                                لطفا وارد کنید!--}}
            {{--                                                            </div>--}}
            {{--                                                        </div>--}}

            {{--                                                    </div>--}}
            {{--                                                    <div class="form-row">--}}
            {{--                                                        <div class="col-md-12 mb-2">--}}
            {{--                                                            <select class="custom-select"  name="" id="">--}}
            {{--                                                                <option value="all">گروه ثبت نامی</option>--}}


            {{--                                                            </select>--}}
            {{--                                                            <div class="valid-feedback">--}}
            {{--                                                                به نظر خوب میاد!--}}
            {{--                                                            </div>--}}
            {{--                                                            <div class="invalid-feedback">--}}
            {{--                                                                لطفا وارد کنید!--}}
            {{--                                                            </div>--}}
            {{--                                                        </div>--}}

            {{--                                                    </div>--}}
            {{--                                                    <div class="form-row">--}}
            {{--                                                        <div class="col-md-12 mb-2">--}}
            {{--                                                            <select class="custom-select"  name="" id="">--}}
            {{--                                                                <option value="all">پروژه</option>--}}


            {{--                                                            </select>--}}
            {{--                                                            <div class="valid-feedback">--}}
            {{--                                                                به نظر خوب میاد!--}}
            {{--                                                            </div>--}}
            {{--                                                            <div class="invalid-feedback">--}}
            {{--                                                                لطفا وارد کنید!--}}
            {{--                                                            </div>--}}
            {{--                                                        </div>--}}

            {{--                                                    </div>--}}




            {{--                                                </div>--}}


            {{--                                            </div>--}}


            {{--                                            <button class="btn btn-secondary mb-2"--}}
            {{--                                                    type="submit">جستجو--}}
            {{--                                            </button>--}}
            {{--                                        </form>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}

            {{--                </div>--}}
            {{--            </div>--}}

            <div class="col-md-12">
                <div class="row page-header">
                    <div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>لیست داوطلبان بدون مشاور همراه</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="    table-responsive ">
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
                                                        aria-label="گروه: activate to sort column ascending "
                                                        style="width:200px;text-align: center;font-size: 12px ">
                                                        گروه
                                                    </th>


                                                </tr>
                                                </thead>
                                                <?php $k = 0; ?>
                                                <tbody>
                                                @foreach($specials as $special )
                                                    <tr>
                                                        <th rowspan="1" colspan="1"
                                                            style="text-align: center;font-size: 13px">{{++$k}}
                                                        </th>

                                                        <th rowspan="1" colspan="1"
                                                            style="text-align: center;font-size: 13px">{{$special?$special->student_code:''}}
                                                        </th>


                                                        <th rowspan="1" colspan="1"
                                                            style="text-align: center;font-size: 13px">{{$special?$special->user->userInfo->first_name:''}}
                                                        </th>
                                                        <th style="text-align: center;font-size: 13px">{{$special?$special->user->userInfo->last_name:''}}
                                                        </th>


                                                        <th rowspan="1" colspan="1"
                                                            style="text-align: center;font-size: 13px">{{$special?$special->educationalGroup->group:''}}
                                                        </th>

                                                    </tr>
                                                @endforeach
                                                </tbody>
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




