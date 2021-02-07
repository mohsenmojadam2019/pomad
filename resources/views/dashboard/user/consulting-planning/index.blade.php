//consultingPlaning
//تریاژ

@extends('dashboard.layouts.app')
@section('content')




    <div id="content" class="main-content">

        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('user-home')}}">خانه</a></li>
                {{--                <li class="breadcrumb-item active"><a href="{{route('consulting-planning.index')}}">وقت دهی مشاوره</a></li>--}}
            </ol>
        </nav>


        {{--        --}}

        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3> وقت دهی جلسه مشاور همراه

                    </h3>
                </div>
            </div>

            <div class="row layout-top-spacing" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
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
                                                            style="width: 105px;">ردیف
                                                        </th>
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
                                                            aria-label=" تاریخ : activate to sort column ascending"
                                                            style="width: 56px;"> تاریخ
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="html5-extension"
                                                            rowspan="1" colspan="1"
                                                            aria-label="زمان: activate to sort column ascending"
                                                            style="width: 53px;">زمان
                                                        </th>

                                                        <th class="sorting" tabindex="0" aria-controls="html5-extension"
                                                            rowspan="1" colspan="1"
                                                            aria-label="تنظیمات: activate to sort column ascending"
                                                            style="width: 143px;">تنظیمات
                                                        </th>
                                                    </tr>
                                                    {{--                                                    @if(isset($specialStudent))--}}
                                                    </thead>
                                                    <?php $k = 0; ?>

                                                    <tbody>
                                                    @foreach($specials as $special )
                                                        <tr role="row">
                                                            <th rowspan="1" colspan="1"
                                                                style="text-align: center;font-size: 13px">{{++$k}}
                                                            </th>
                                                            <th rowspan="1" colspan="1"
                                                                style="text-align: center;font-size: 13px">{{$special?$special->student_code:''}}
                                                            </th>
                                                            <th style="text-align: center;font-size: 13px">{{$special?$special->user->userInfo->first_name:''}}
                                                                &nbsp{{$special?$special->user->userInfo->last_name:''}} </th>
                                                            <td>{{$special?$special->user->userInfo->first_name:''}}</td>
                                                            <td>{{$special?$special->educationalGroup->group:''}}</td>


                                                            <form action="{{route('consulting-planning-post')}}"
                                                                  method="post">
                                                                @csrf
                                                                <td><input name="date_start" class="datepicker0"></td>
                                                                <td><input name="time_start" type="time"></td>

{{--                                                                @foreach( as )--}}
                                                                    <td>
                                                                        <input type="hidden" name="id"
                                                                               value="{{$special->id}}">
                                                                        <button type="submit" class="btn btn-secondary">
                                                                            ثبت
                                                                        </button>

                                                                    </td>
{{--                                                                @endforeach--}}

                                                            </form>
                                                        </tr>
                                                    @endforeach

                                                    </tbody>
                                                    {{--                                                    @endif--}}
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











@endsection









