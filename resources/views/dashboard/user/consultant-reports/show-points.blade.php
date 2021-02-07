@extends('dashboard.layouts.app')
@section('content')

    <div id="content" class="main-content">

        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/educational-group')}}">مشاوره</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/educational-group')}}">امتیازات مشاوران</a></li>
                {{--                <li class="breadcrumb-item" aria-current="page"><a href="{{url('dashboard/user-address')}}">صفحه اصلی</a></li>--}}
            </ol>
        </nav>


        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>نمایش امتیازات مشاوران</h3>
                </div>
            </div>

            <div class="row layout-top-spacing" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="table-responsive mb-4 mt-4">
                            <div id="default-ordering_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">


                                <div class="row">
                                    <div class="col-sm-12">
                                        <form action="" methode="post">
                                            @csrf
                                            <div class="row mb-4">
                                                <select name="" id="">

                                                    <option value="">خانوم افشاری سما99</option>
                                                </select>

                                                <button type="submit" class="btn btn-secondary mr-3">جستجو</button>
                                            </div>
                                            <table id="default-ordering" class="table table-hover dataTable"
                                                   style="width:100%" role="grid"
                                                   aria-describedby="default-ordering_info">
                                                <thead>
                                                <tr role="row">
                                                    <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                        rowspan="1" colspan="1"
                                                        aria-label="ردیف: activate to sort column ascending">ردیف
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                        aria-label=" داوطلب : activate to sort column ascending"
                                                        style="width: 150px;text-align: center; "> داوطلب
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                        rowspan="1" colspan="1"
                                                        aria-label=" مشاور : activate to sort column ascending"
                                                        style="width: 150px;text-align: center; "> مشاور
                                                    </th>
                                                    <th class="sorting_desc" tabindex="0"
                                                        aria-controls="default-ordering" aria-sort="descending"
                                                        aria-label="مورد: activate to sort column ascending "
                                                        style="width:500px;text-align: center; ">مورد
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                        rowspan="1" colspan="1"
                                                        aria-label="امتیاز : activate to sort column ascending"
                                                        style="width: 164px;text-align: center; "> امتیاز
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                        rowspan="1" colspan="1"
                                                        aria-label=" تاریخ : activate to sort column ascending"
                                                        style="width: 142px;text-align: center; "> تاریخ
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                        rowspan="1" colspan="1"
                                                        aria-label="ساعت: activate to sort column ascending"
                                                        style="width: 160px;text-align: center; ">ساعت
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <tr>
                                                    <th rowspan="1" colspan="1" style="text-align: center">1</th>
                                                    <th style="text-align: center"> محسن مجدم</th>
                                                    <th rowspan="1" colspan="1" style="text-align: center"> افشاری سما
                                                    </th>
                                                    <th style="width: 500px;text-align: center">ارائه برنامه مطالعاتی
                                                        دقیق تا زمان جلسه بعد ( خوانا – با جزییات )
                                                    </th>
                                                    <th rowspan="1" colspan="1" style="text-align: center">+</th>
                                                    <th rowspan="1" colspan="1" style="text-align: center"> ۱۳۹۹/۰۲/۱۴
                                                    </th>
                                                    <th rowspan="1" colspan="1" style="text-align: center"> ۲۰:۳۸</th>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>





@endsection









