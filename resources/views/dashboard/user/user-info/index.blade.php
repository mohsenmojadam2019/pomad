@extends('dashboard.layouts.app')
@section('content')


    <div id="content" class="main-content">

        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/user-info')}}">ادرس</a></li>
                {{--                <li class="breadcrumb-item" aria-current="page"><a href="{{url('dashboard/user-address')}}">صفحه اصلی</a></li>--}}
            </ol>
        </nav>


        <div class="container">
            <div class="container">


                <div class="row page-header">
                    <div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>اطلاعات اضافه کاربر</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content widget-content-area">


                                    <div class="form-row">
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustomUsername">نام</label>
                                                <span  style="color: #6f42c1">{{$user_info ? $user_info->first_name : ''}}</span>


                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom01">نام خانوادگی</label>
                                            <span  style="color: #6f42c1">{{ $user_info ?  $user_info->last_name : ''}}</span>
                                        </div>

                                    </div>


                                    <div class="form-row">
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom03">تاریخ تولد </label>
                                            <span  style="color: #6f42c1"> {{$user_info ? $user_info->birth_date: ''}}</span>
                                        </div>

                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom03">جنسیت</label>

                                                <span style="color: #6f42c1">{{$user_info ? ($user_info->gender == 'female' ? 'خانوم' : 'آقا') : '' }}</span>

                                            </div>
                                        </div>
                                    <a href="{{route('user-info-edit')}}" class="btn btn-secondary mb-2">ویرایش</a>

                            </div>



                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>











@endsection




