

@extends('dashboard.layouts.app')
@section('content')


    <div id="content" class="main-content">

        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/user-info')}}">اطلاعات اضافه کاربر</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/user-info/edit_info')}}">آپدیت اطلاعات اضافه کاربر</a></li>
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
                                        <h4>نشانی محل سکونت</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form action="{{route('user-address.update',$address->id)}}" method="post" id="general-info" class="section general-info">
                                    @csrf
                                    @method('put')
                                    <div class="form-row">
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustomUsername">استان</label>
                                            <div class="input-group">
                                                <input value="" name="province" type="text"
                                                       class="form-control" id="validationCustomUsername"
                                                       placeholder=""
                                                       aria-describedby="inputGroupPrepend"
                                                       required="" >
                                                <div class="valid-feedback" value="" >
                                                    به نظر خوب میاد!
                                                </div>
                                                <div class="invalid-feedback">
                                                    لطفا وارد کنید!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom01">شهرستان</label>
                                            <input  name="city" type="text"
                                                    class="form-control" id="validationCustom01" placeholder=" "
                                                    required="" >
                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-12 mb-4">
                                            <label for="validationCustom03">آدرس</label>
                                            <textarea  name="address" type="text"
                                                       class="form-control " aria-describedby="inputGroupPrepend"
                                                       placeholder=" نشانی محل سکونت "
                                                       required="" >
                                            </textarea>
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
                                            <label for="validationCustom03">کد پستی</label>
                                            <input value="" name="postal_code" type="text"
                                                   class="form-control "
                                                   placeholder="  "
                                                   required="" >

                                            {{--                                            <input id="datepicker0" type="text" class="hasDatepicker">--}}

                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>
                                        </div>

                                    </div>

                                    <button type="submit"
                                            class="btn btn-secondary mb-2">ویرایش</button>

                                </form>


                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>









@endsection







{{----}}
