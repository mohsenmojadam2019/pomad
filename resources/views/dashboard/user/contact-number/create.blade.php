@extends('dashboard.layouts.app')
@section('content')




    <div id="content" class="main-content">

        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/user-contact-number')}}">تماس ها</a></li>
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
                                        <h4>شماره تماس ها</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form method="POST" action="{{route('user-contact-number.store')}}"
                                      class="needs-validation was-validated" novalidate="">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-6 mb-4">
                                            <label for=" validationCustom01">

                                                شماره پدر

                                            </label>
                                            <div class="input-group">

                                                <input value="{{$contactNumber->father_number}}" name="father_number"
                                                       type="text"
                                                       class="form-control" id="validationCustomUsername"
                                                       placeholder="نام پدر" aria-describedby="inputGroupPrepend"
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
                                            <label for="validationCustom01">نام مادر</label>
                                            <input value="{{$contactNumber->mother_number}}" name="mother_number"
                                                   type="type"
                                                   class="form-control" id="validationCustom01" placeholder="شماره مادر"
                                                   value="" required="">
                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom01">شماره منزل</label>
                                            <input value="{{$contactNumber->home_number}}" name="home_number"
                                                   type="type"
                                                   class="form-control" id="validationCustom01" placeholder="شماره منزل"
                                                   value="" required="">
                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom01">شماره تلگرام</label>
                                            <input value="{{$contactNumber->telegram_number}}" name="telegram_number"
                                                   type="text"
                                                   class="form-control" id="validationCustom01"
                                                   placeholder="شماره تلگرام"
                                                   value="" required="">
                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>
                                        </div>


                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom03">شماره اضطراری</label>
                                            <input value="{{$contactNumber->emergency_number}}" name="emergency_number"
                                                   type="text"
                                                   class="form-control" id="validationCustom03"
                                                   placeholder=" شماره اضطراری"
                                                   required="">
                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>
                                        </div>


                                    </div>


                                    <button type="submit"
                                            class="btn btn-secondary">ویرایش
                                    </button>

                                </form>


                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>











@endsection




