@extends('dashboard.layouts.app')
@extends('dashboard.layouts.app')
@section('content')


    <div id="content" class="main-content">

        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/user-school-info')}}">اطلاعات مدرسه</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/user-school-info/create')}}">اضافه کردن اطلاعات مدرسه</a></li>
                {{--                <li class="breadcrumb-item" aria-current="page"><a href="{{url('dashboard/user-address')}}">صفحه اصلی</a></li>--}}
            </ol>
        </nav>


            <div class="container">


                <div class="row page-header">
                    <div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>اطلاعات مدرسه</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form action="{{route('user-school-info.store')}}" method="POST" class="needs-validation was-validated" novalidate="">

                                    @csrf


                                    <div class="form-row">
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustomUsername">مقطع نهم</label>
                                            <div class="input-group">

                                                <input value="{{$school_info ?? '' ? $school_info ?? ''->school_9 : ''}}" name="school_9" type="text"



                                                       class="form-control" id="validationCustomUsername"
                                                       placeholder="مقطع نهم" aria-describedby="inputGroupPrepend"
                                                       required="">
                                                <div class="valid-feedback">
                                                    به نظر خوب میاد!
                                                </div>
                                                <div class="invalid-feedback">
                                                    لطفا وارد کنید!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom01">مقطع دهم</label>
                                            <input value="{{$school_info ?? '' ? $school_info ?? ''->school_10 : ''}}" name="school_10" type="text"
                                                   class="form-control" id="validationCustom01" placeholder="مقطع دهم"
                                                   value="" required="">
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
                                            <label for="validationCustom03">مقطع یازدهم</label>
                                            <input value="{{$school_info ?? '' ? $school_info ?? ''->school_11 : ''}}" name="school_11"
                                                   type="text" class="form-control" id="validationCustom03"
                                                   placeholder=" مقطع یازدهم" required="">
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
                                            <label for="validationCustom03">مقطع دوازدهم</label>
                                            <input value="{{$school_info ?? '' ? $school_info ?? ''->school_12 : ''}}" name="school_12" type="text"
                                                   class="form-control" id="validationCustom03" placeholder=" مقطع دوازدهم"
                                                   required="">
                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>
                                        </div>

                                    </div>


                                    <button  class="btn btn-secondary mb-2"
                                             type="submit">ثبت</button>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>










@endsection




