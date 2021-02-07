@extends('dashboard.layouts.app')
@section('content')


    <div id="content" class="main-content">

        {{--    --}}
        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/user-address')}}">ادرس</a></li>
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
                                        <h4>نشانی محل سکونت داوطلب</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content widget-content-area">


                                <div class="form-row">
                                    <div class="col-md-6 mb-4">
                                        <label for="validationCustomUsername">استان</label>
                                        <span  style="color: #6f42c1">{{$address ? $address->province : ''}}</span>


                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="validationCustom01">شهرستان</label>
                                        <span  style="color: #6f42c1">{{ $address ?  $address->city : ''}}</span>
                                    </div>

                                </div>


                                <div class="form-row">
                                    <div class="col-md-6 mb-4">
                                        <label for="validationCustom03">آدرس </label>
                                        <span  style="color: #6f42c1"> {{$address ? $address->address: ''}}</span>
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-4">
                                        <label for="validationCustom03">کد پستی </label>
                                          <span  style="color: #6f42c1"> {{$address ? $address->postal_code: ''}}</span>
                                    </div>

                                </div>


                                <a href="{{route('user-address-edit')}}" class="btn btn-primary">ویرایش</a>

                            </div>



                        </div>
                    </div>
                </div>
            </div>


        </div>








    </div>
    </div>





@endsection








