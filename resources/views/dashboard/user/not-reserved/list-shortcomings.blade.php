@extends('dashboard.layouts.app')
@section('content')



    <div id="content" class="main-content">
        <div class="layout-px-spacing">


            <nav class="breadcrumb-two" aria-label="breadcrumb">
                <ol class="breadcrumb">

                    <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                    <li class="breadcrumb-item "><a href="{{url('dashboard/educational-group')}}">مشاوره</a>
                    <li class="breadcrumb-item active"><a href="{{url('dashboard/contact-user')}}"> لیست نواقص داوطلبان</a>

                    </li>
                </ol>
            </nav>


            <div class="page-header">
                <div class="page-title">
                    <h5>  لیست نواقص داوطلبان</h5>
                </div>
            </div>





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
                                                aria-label="نام داوطلب: activate to sort column ascending">ردیف
                                            </th>

                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label="نام داوطلب: activate to sort column ascending">نام داوطلب
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label=" نام خانوادگی : activate to sort column ascending"> نام خانوادگی
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label=" متن درخواست : activate to sort column ascending"> متن درخواست
                                            </th>
                                            <th class="sorting_desc" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1" aria-sort="descending"
                                                aria-label="تاریخ ثبت: activate to sort column ascending">تاریخ ثبت
                                                همراه
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label=" زمان ثبت : activate to sort column ascending"> زمان ثبت
                                            </th>

                                            <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                rowspan="1" colspan="1"
                                                aria-label="وضعیت: activate to sort column ascending">وضعیت
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        <tr role="row">
                                            <td>1</td>
                                            <td> محسن</td>
                                            <td class="sorting_1">مجدم</td>
                                            <td>سلام من مشکل دارم</td>
                                            <td>1399/02/12</td>
                                            <td>17:32</td>

                                            <td class="text-center">

                                                <a class="btn btn-secondary" href="" style="color: #0d9a5d;">تایید</a>

                                            </td>
                                        </tr>

                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th style="color: #004fe6" rowspan="1" colspan="1">ردیف</th>
                                            <th style="color: #004fe6" rowspan="1" colspan="1"> نام داوطلب</th>
                                            <th style="color: #004fe6" rowspan="1" colspan="1">نام خانوادگی</th>
                                            <th style="color: #004fe6" rowspan="1" colspan="1"> متن درخواست</th>
                                            <th style="color: #004fe6" rowspan="1" colspan="1"> تاریخ ثبت</th>
                                            <th style="color: #004fe6" rowspan="1" colspan="1"> زمان ثبت</th>

                                            <th style="color: #004fe6" rowspan="1" colspan="1"> وضعیت</th>

                                        </tfoot>
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




