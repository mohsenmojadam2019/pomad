



@extends('dashboard.layouts.app')
@section('content')




    <div id="content" class="main-content">

        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('user-home')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{route('user-educational-info.index')}}">مشاوره</a></li>
                <li class="breadcrumb-item active"><a href="{{route('user-educational-info.index')}}">اطلاعات مشاور</a></li>
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
                                        <h4>اطلاعات مشاور</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form  class="needs-validation was-validated" novalidate="">
                                    <div class="form-row">
                                        <div class="col-md-6 mb-4">
                                            <div class="input-group">

                                            <label for="validationCustomUsername">نام</label>

{{--                                              <span>{{$user_education_info ? $user_education_info->average_Written_diplom :''}}</span>--}}
                                                <div class="valid-feedback">
                                                    به نظر خوب میاد!
                                                </div>
                                                <div class="invalid-feedback">
                                                    لطفا وارد کنید!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom01">نام خانوادگی</label>

{{--                                           <span>{{$userDiplomaField ? $userDiplomaField->title :''}}</span>--}}
                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom04">تاریخ تولد</label>
{{--                                            <span>{{$user_education_info ? $user_education_info->end_education :''}}</span>--}}
                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>

                                        </div>




                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom03">مدرک تحصیلی</label>
{{--                                            <span>{{$user_education_info ? $user_education_info->get_license_year :''}}</span>--}}
                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>
                                        </div>




                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom03">آدرس</label>
{{--                                            <span>{{$educationalGrade ? $educationalGrade->title :''}}</span>--}}

                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom01">تلفن</label>

{{--                                            <span>{{$educationalField ? $educationalField->title :''}}</span>--}}
                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>
                                        </div>

                                    </div>


                                    <div class="form-row">
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom03">تاریخ تولد</label>
{{--                                            <span>{{$user_education_info?$user_education_info->academic_year:''}}</span>--}}
                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom03">کدملی</label>
                                            {{--                                            <span>{{$user_education_info?$user_education_info->academic_year:''}}</span>--}}
                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom03">وضعیت تاهل</label>
                                            {{--                                            <span>{{$user_education_info?$user_education_info->academic_year:''}}</span>--}}
                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom03">ارزشیابی</label>
                                            {{--                                            <span>{{$user_education_info?$user_education_info->academic_year:''}}</span>--}}
                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom03">همکاری قبلا داشته است ؟</label>
                                            {{--                                            <span>{{$user_education_info?$user_education_info->academic_year:''}}</span>--}}
                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>
                                        </div>



                                    </div>


                                    <a class="float-left" href="{{route('user-educational-info-edit')}}">
                                        <i class="btn btn-secondary mb-2"> ویرایش</i>
                                    </a>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>











@endsection









