@extends('dashboard.layouts.app')
@section('content')
    {{--تعیین وقت جلسه بعدی--}}



    <div id="content" class="main-content">


        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/educational-group')}}">گروه آموزشی</a></li>
                {{--                <li class="breadcrumb-item" aria-current="page"><a href="{{url('dashboard/user-address')}}">صفحه اصلی</a></li>--}}
            </ol>
        </nav>


        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h5> جلسات مشاور همراه
                    </h5>
                </div>
            </div>


            <div class="row layout-top-spacing" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

                    <div class="widget-content widget-content-area br-6">

                        <div class="row text-center">
                            <form action="" method="post">
                                @csrf

                                <input value="تاریخ خود را انتخاب کنید" type="text" id="datepicker0">
                                <button class="btn btn-secondary ml-2"> انتخاب</button>
                            </form>
                            <a href="{{url('dashboard/scheduling-counseling-session')}}" class="btn btn-success ml-2">
                                ثبت دستی</a>
                            <a href="" class="btn btn-primary ml-2"> ثبت تماس بین دوره</a>
                            {{--                                --}}
                            <a href="" class="btn btn-danger ml-2">تماس نگرفته های امروز-&nbsp نفر</a>

                        </div>
                        <div class="table-responsive mb-4 mt-4">
                            <div id="html5-extension_wrapper"
                                 class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="dt-buttons">


                                                </div>
                                            </div>


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
                                                            aria-label=" خروج : activate to sort column ascending"
                                                            style="width: 106px;"> خروج
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="html5-extension"
                                                            rowspan="1" colspan="1"
                                                            aria-label="مدت جلسه: activate to sort column ascending"
                                                            style="width: 80px;">مدت جلسه
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



                                                    @foreach($specials as $k=> $special )
                                                        <tr role="row">
                                                            <td class="sorting_1">{{++$k}}</td>
                                                            <td class="sorting_1">{{$special?$special->student_code:''}}</td>
                                                            <td class="sorting_1">{{$special?$special->user->userInfo->first_name:''}}
                                                                &nbsp{{$special?$special->user->userInfo->last_name:''}}</td>
                                                            <td class="sorting_1">{{$special?$special->user->userInfo->first_name:''}}</td>
                                                            <td class="sorting_1">{{$special?$special->educationalGroup->group:''}}</td>


                                                            <td class="sorting_1">{{$special?$special->user->consultingPlanning->date_start:''}}</td>
                                                            <td class="sorting_1">{{$special?$special->user->consultingPlanning->time_start:''}}</td>


                                                            <form action="{{route('consulting-session-post')}}"
                                                                  method="post">
                                                                @csrf

                                                                <td class="sorting_1"><input type="time" name="end">
                                                                </td>
                                                                <td class="sorting_1"><input type="time" name="entry">
                                                                </td>
                                                                <td class="sorting_1"><input type="time" name="exit">
                                                                </td>
                                                                <td class="sorting_1"><input type="time"
                                                                                             name="lag_time_session">
                                                                </td>
                                                                <td class="sorting_1"><input type="time"
                                                                                             name="lag_time_delay"></td>
                                                                <td>

                                                                    <label
                                                                        class="switch s-icons s-outline  s-outline-secondary  mb-1 mr-2">
                                                                        <input type="checkbox" name="delay">
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                </td>
                                                                <td>

                                                                    <label
                                                                        class="switch s-icons s-outline  s-outline-secondary  mb-1 mr-2">
                                                                        <input type="checkbox" name="contact">
                                                                        <span class="slider round"></span>
                                                                    </label>

                                                                </td>
                                                                <td>

                                                                    <input value="" type="text" class="datepicker0"
                                                                           name="next_date">

                                                                </td>
                                                                <td><input type="time" name="next_time">
                                                                </td>

                                                                <td>
                                                                    <input type="hidden" name="id"
                                                                           value="{{$special->id}}">
                                                                    <button class="btn btn-secondary"
                                                                            type="submit"></button>



                                                            <a href="{{url('dashboard/assessment')}}"
                                                               style="border-left: 1px solid ; color: #6f42c1">ارزشیابی</a>


                                                            <a style="border-left: 1px solid;color: red "
                                                               data-toggle="modal"
                                                               data-target="#zoomupModal">ویرایش</a>


                                                            <a href=""
                                                               style="border-left: 1px solid;color: #bf6516">امروز</a>


                                                            </td>
                                                            </form>
                                                        </tr>

                                                    @endforeach
                                                    {{--@endforeach--}}
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


                {{--   modal     --}}
                <div id="zoomupModal" class="modal animated zoomInUp custo-zoomInUp" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ویرایش اطلاعات</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                            <form action="{{route('consulting-session-post')}}">
                                @csrf
                                <div class="modal-body">

                                    <div class="form-group">

                                        <input type="text" class="form-control" value=""
                                               placeholder=" ساعت شروع جلسه">
                                        <input type="text" class="form-control" value=""
                                               placeholder="ساعت پایان جلسه">
                                        <input type="text" class="form-control" value="" placeholder="ورود به کلاس">
                                        <input type="text" class="form-control" value="" placeholder="خروج از کلاس">


                                    </div>


                                </div>
                                <div class="modal-footer md-button">
                                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> نادیده
                                        گرفتن
                                    </button>
                                    <button type="submit" class="btn btn-primary">ذخیره</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>











@endsection









