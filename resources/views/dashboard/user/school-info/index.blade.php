@extends('dashboard.layouts.app')
@section('content')


    <div id="content" class="main-content">

        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/user-school-info')}}">اطلاعات مدرسه</a></li>
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
                                        <label for="validationCustomUsername">نام مدرسه پایه نهم:</label>
                                        <span  style="color: #6f42c1">{{$school_info ? $school_info->school_9 : ''}}</span>


                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="validationCustom01">نام مدرسه پایه دهم:</label>
                                        <span  style="color: #6f42c1">{{ $school_info ?  $school_info->school_10 : ''}}</span>
                                    </div>

                                </div>


                                <div class="form-row">
                                    <div class="col-md-6 mb-4">
                                        <label for="validationCustom03">نام مدرسه پایه یازدهم: </label>
                                        <span  style="color: #6f42c1"> {{$school_info ? $school_info->school_11: ''}}</span>
                                    </div>

                                </div>


                                <div class="form-row">
                                    <div class="col-md-6 mb-4">
                                        <label for="validationCustom03">نام مدرسه پایه دوازدهم:</label>
                                        <span  style="color: #6f42c1"> {{$school_info ? $school_info->school_12: ''}}</span>
                                    </div>

                                </div>


                                <a href="{{route('user-school-info-edit')}}" class="btn btn-secondary mb-2">ویرایش</a>

                            </div>



                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>











@endsection




