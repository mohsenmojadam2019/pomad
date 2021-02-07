@extends('dashboard.layouts.app')
@section('content')




    <div id="content" class="main-content">


        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/educational-group')}}">مشاوره</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/educational-group')}}">جلسات مشاور همراه</a></li>
            </ol>
        </nav>


        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h5> لیست جلسات مشاوره
                    </h5>
                </div>
            </div>


            <div class="row layout-top-spacing" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                    <div class="widget-content widget-content-area br-6">

                        <div class="row text-center">
                            <input class="custom-select" value="تاریخ خود را انتخاب کنید" type="text" id="datepicker0">
                            <button class="btn btn-secondary ml-2"> انتخاب</button>
                            <button class="btn btn-success ml-2"> ثبت دستی</button>
                            <button class="btn btn-primary ml-2"> ثبت تماس بین دوره</button>

                        </div>

                        <div class="col-md-12">

                            <form action="" method="post"></form>
                            @csrf
                            <select class="custom-select" name="" id="">

                                <option value="all">انتخاب کد داوطلبی</option>

                            </select>
                        </div>


                        <div class="table-responsive mb-4 mt-4">
                            <div id="html5-extension_wrapper"
                                 class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">



                                            <div class="col-md-12">
                                                <table id="html5-extension"
                                                       class="table table-hover non-hover dataTable no-footer"
                                                       style="width: 100%;" role="grid"
                                                       aria-describedby="html5-extension_info">
                                                    <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="html5-extension" rowspan="1" colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="کد داوطلب: activate to sort column descending"
                                                            style="width: 105px;">کد داوطلب
                                                        </th>
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="html5-extension" rowspan="1" colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="نام و نام خانوادگی: activate to sort column descending"
                                                            style="width: 105px;">نام و نام خانوادگی
                                                        </th>
                                                        <th class="sorting_asc" tabindex="0"
                                                            aria-controls="html5-extension" rowspan="1" colspan="1"
                                                            aria-sort="ascending"
                                                            aria-label="مشاوره همراه: activate to sort column descending"
                                                            style="width: 105px;">مشاوره همراه
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="html5-extension"
                                                            rowspan="1" colspan="1"
                                                            aria-label=" گروه آموزشی : activate to sort column ascending"
                                                            style="width: 239px;"> گروه آموزشی
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="html5-extension"
                                                            rowspan="1" colspan="1"
                                                            aria-label=" شروع : activate to sort column ascending"
                                                            style="width: 56px;"> شروع
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="html5-extension"
                                                            rowspan="1" colspan="1"
                                                            aria-label="پایان: activate to sort column ascending"
                                                            style="width: 53px;">پایان
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="html5-extension"
                                                            rowspan="1" colspan="1"
                                                            aria-label=" ورود : activate to sort column ascending"
                                                            style="width: 116px;"> ورود
                                                        </th>

                                                        <th class="sorting" tabindex="0" aria-controls="html5-extension"
                                                            rowspan="1" colspan="1"
                                                            aria-label="مدت تاخیر: activate to sort column ascending"
                                                            style="width: 62px;">مدت تاخیر
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="html5-extension"
                                                            rowspan="1" colspan="1"
                                                            aria-label="تاخیر مشاور: activate to sort column ascending"
                                                            style="width: 62px;">تاخیر مشاور
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="html5-extension"
                                                            rowspan="1" colspan="1"
                                                            aria-label="تلفنی: activate to sort column ascending"
                                                            style="width: 62px;">تلفنی
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="html5-extension"
                                                            rowspan="1" colspan="1"
                                                            aria-label="جلسه بعد: activate to sort column ascending"
                                                            style="width: 62px;">جلسه بعد
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="html5-extension"
                                                            rowspan="1" colspan="1"
                                                            aria-label="ساعت جلسه بعد: activate to sort column ascending"
                                                            style="width: 62px;">ساعت جلسه بعد
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="html5-extension"
                                                            rowspan="1" colspan="1"
                                                            aria-label="تنظیمات: activate to sort column ascending"
                                                            style="width: 143px;">تنظیمات
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <tr role="row">
                                                        <td class="sorting_1">1810037492</td>
                                                        <td class="sorting_1">محسن مجدم</td>
                                                        <td>قریشی</td>
                                                        <td>یازدهم غیر حضوری</td>
                                                        <td> 08:00</td>
                                                        <td> 09:00</td>
                                                        <td> 08:00</td>
                                                        <td> 09:00</td>
                                                        <td>2</td>
                                                        <td>1</td>
                                                        <td><input type="checkbox"></td>
                                                        <td><input type="checkbox"></td>
                                                        <td><input id="datepicker0"></td>
                                                        <td>
                                                            <select name="" id="">
                                                                <option value="0">08</option>
                                                                <option value="0">09</option>
                                                                <option value="0">10</option>
                                                                <option value="0">11</option>
                                                                <option value="0">12</option>
                                                                <option value="0">13</option>
                                                                <option value="0">14</option>
                                                                <option value="0">15</option>
                                                                <option value="0">16</option>
                                                                <option value="0">17</option>
                                                                <option value="0">18</option>
                                                                <option value="0">19</option>
                                                                <option value="0">20</option>
                                                                <option value="0">21</option>
                                                                <option value="0">22</option>

                                                            </select>
                                                            <select name="" id="">
                                                                <option value="0">00</option>
                                                                <option value="15">15</option>
                                                                <option value="30">30</option>
                                                                <option value="45">45</option>
                                                            </select>
                                                        </td>

                                                        <td>
                                                            <a href=""
                                                               style="border-left: 1px solid;color: green">ثبت</a>
                                                            <a href="" style="border-left: 1px solid ; color: #6f42c1">ارزشیابی</a>
                                                            <a href=""
                                                               style="border-left: 1px solid;color: red ">ویرایش</a>
                                                            <a href="" style="border-left: 1px solid;color: #bf6516">امروز</a>


                                                        </td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>


                                            {{--  {{$check_mentor->link()}}                                              --}}


                                            {{--                                                <div class="col-md-12">--}}
                                            {{--                                                    <div class="row">--}}
                                            {{--                                                        <div class="col-md-5">--}}
                                            {{--                                                            <div class="dataTables_info" id="html5-extension_info" role="status" aria-live="polite">صفحه 1 از 4</div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="col-md-7">--}}
                                            {{--                                                            <div class="dataTables_paginate paging_simple_numbers" id="html5-extension_paginate">--}}
                                            {{--                                                                <ul class="pagination"><li class="paginate_button page-item previous disabled" id="html5-extension_previous">--}}
                                            {{--                                                                        <a href="#" aria-controls="html5-extension" data-dt-idx="0" tabindex="0" class="page-link">--}}
                                            {{--                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">--}}
                                            {{--                                                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline></svg></a></li>--}}
                                            {{--                                                                    <li class="paginate_button page-item active">
                                            <a href="#" aria-controls="html5-extension" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>--}}
                                            {{--                                                                    <li class="paginate_button page-item "><a href="#" aria-controls="html5-extension" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="html5-extension" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>--}}
                                            {{--                                                                    <li class="paginate_button page-item "><a href="#" aria-controls="html5-extension" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item next" id="html5-extension_next"><a href="#" aria-controls="html5-extension" data-dt-idx="5" tabindex="0" class="page-link">--}}
                                            {{--                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left">--}}
                                            {{--                                                                                <line x1="19" y1="12" x2="5" y2="12"></line>--}}
                                            {{--                                                                                <polyline points="12 19 5 12 12 5"></polyline>--}}
                                            {{--                                                                            </svg>--}}
                                            {{--                                                                        </a>--}}
                                            {{--                                                                    </li>--}}
                                            {{--                                                                </ul></div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


                {{--        --}}


            </div>











@endsection









