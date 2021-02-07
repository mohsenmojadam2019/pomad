@extends('dashboard.layouts.app')
@include('dashboard.layouts.css-hover')

@section('content')



    <div id="content" class="main-content col-md-12">
        <div class="container">
            <div class="container">
                <nav class="breadcrumb-two" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('user-home')}}">خانه</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('user-service-private')}}">خدمات اختصاصی</a></li>
                        <li class="breadcrumb-item "><a href="{{route('user-workshop-sliders')}}">اسلایدهای کارگاه</a></li>
                    </ol>
                </nav>

                <div class="row page-header">
                    <div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>اسلایدهای کارگاه</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="row layout-spacing">

                                    <figure class="snip1205">
                                        <img src="{{asset('assets/dashboard/img/sample43.jpg')}}" alt="sample42"/>
                                        <i class="ion-chatboxes"></i>
                                        <a href="#"></a>
                                    </figure>
                                    <figure class="snip1205">
                                        <img src="{{asset('assets/dashboard/img/sample43.jpg')}}" alt="sample42"/>
                                        <i class="ion-chatboxes"></i>
                                        <a href="#"></a>
                                    </figure>

                                    <figure class="snip1205 green">
                                        <img src="{{asset('assets/dashboard/img/sample42.jpg')}}" alt="sample43"/>
                                        <i class="ion-search"></i>
                                        <a href="#"></a>
                                        <p></p>
                                    </figure>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    {{--    --}}













@endsection







