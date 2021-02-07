@extends('dashboard.layouts.app')
@section('content')


    <div id="content" class="main-content">

        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/user-address')}}">نشانی محل سکونت</a></li>
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
                                <form method="post" action="{{route('user-address.store')}}"  class="needs-validation was-validated" novalidate="" >
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustomUsername">استان</label>
                                            <div class="input-group">
                                                <input name="province" type="text"
                                                       class="form-control" id="validationCustomUsername"
                                                       placeholder=""
                                                       aria-describedby="inputGroupPrepend"
                                                       required="" >
                                                <div class="valid-feedback" >
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
                                                   class="form-control " id="datepicker0"
                                                   placeholder=" نشانی محل سکونت "
                                                   required="" ></textarea>
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
                                                   class="form-control " id="datepicker0"
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


                                    {{--                                    <a href="{{route('user-profile.edit',$user->id)}}" class="btn btn-secondary mb-2"--}}
                                    {{--                                       type="submit">ویرایش</a>--}}


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




