@extends('dashboard.layouts.app')
@section('content')



    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>نمایش فیش غیر حضوری</h3>
                </div>
            </div>


            <nav class="breadcrumb-two" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                    <li class="breadcrumb-item "><a href="{{url('dashboard/educational-group')}}">مالی</a>
                    <li class="breadcrumb-item active"><a href="{{url('dashboard/educational-group')}}">نمایش فیش غیر حضوری</a>
                    </li>
                </ol>
            </nav>


            <div class="row layout-top-spacing" id="cancel-row   modalVerticallyCentered ">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="table-responsive  ">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="default-ordering" class="table table-hover dataTable" role="grid"
                                           aria-describedby="default-ordering_info">


                                        <thead>

                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label="ردیف: activate to sort column ascending">ردیف
                                            </th>

                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label="نام داوطلب: activate to sort column ascending">نام داوطلب
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label="نام خانوادگی: activate to sort column ascending">نام خانوادگی
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label=" مقطع : activate to sort column ascending"> مقطع

                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label=" سال کنکور : activate to sort column ascending"> سال کنکور

                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label=" شهر : activate to sort column ascending"> شهر

                                            </th>

                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label=" رشته : activate to sort column ascending"> رشته

                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label=" مدرسه نهم : activate to sort column ascending"> مدرسه نهم

                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label=" مدرسه دهم : activate to sort column ascending"> مدرسه دهم

                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label=" مدرسه یازدهم : activate to sort column ascending"> مدرسه یازدهم

                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label=" مدرسه چهارم : activate to sort column ascending"> مدرسه چهارم

                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label=" مبلغ : activate to sort column ascending"> مبلغ

                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label=" مقطع : activate to sort column ascending"> شماره پیگیری

                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label=" بانک : activate to sort column ascending"> بانک

                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label=" تاریخ : activate to sort column ascending"> تاریخ

                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label=" ساعت : activate to sort column ascending"> ساعت

                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label=" نوع واریز : activate to sort column ascending"> نوع واریز

                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label=" شماره منزل : activate to sort column ascending"> شماره منزل

                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label=" موبایل : activate to sort column ascending"> موبایل

                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label=" موبایل پدر : activate to sort column ascending"> موبایل پدر

                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label=" موبایل مادر : activate to sort column ascending"> موبایل مادر

                                            </th>


                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label="توضیحات: activate to sort column ascending">توضیحات
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        <tr role="row">
                                            <td>1</td>
                                            <td> محسن</td>
                                            <td class="sorting_1">مجدم</td>
                                            <td class="sorting_1">12</td>
                                            <td class="sorting_1">99</td>
                                            <td class="sorting_1">تهران</td>
                                            <td class="sorting_1">ریاضی</td>
                                            <td class="sorting_1">خاتم</td>
                                            <td class="sorting_1">خاتم</td>
                                            <td class="sorting_1">خاتم</td>
                                            <td class="sorting_1">خاتم</td>
                                            <td class="sorting_1">500000</td>
                                            <td class="sorting_1">546896383</td>
                                            <td class="sorting_1">ملی</td>
                                            <td class="sorting_1">تاریخ</td>
                                            <td class="sorting_1">ا</td>
                                            <td class="sorting_1">ا</td>
                                            <td class="sorting_1">ا</td>
                                            <td class="sorting_1">ا</td>
                                            <td class="sorting_1">ا</td>
                                            <td class="sorting_1">ا</td>
                                            <td class="sorting_1">ا</td>


                                        </tr>

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


    {{----}}


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




