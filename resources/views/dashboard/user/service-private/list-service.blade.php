@extends('dashboard.layouts.app')
@include('dashboard.layouts.css-hover')

@section('content')



    <div id="content" class="main-content col-md-12">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>پروفایل</h3>
                </div>
            </div>

            <div class="row layout-spacing">

                <nav class="breadcrumb-two" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('dashboard/')}}">خانه</a></li>
                        <li class="breadcrumb-item active"><a href="{{url('dashboard/user-service-private')}}">اطلاعات مدرسه</a></li>
                        <li class="breadcrumb-item active"><a href="{{url('dashboard/user-service-private/psychology-ques')}}">اطلاعات مدرسه</a></li>
                    </ol>
                </nav>



                <div class="row layout-spacing">
                <!-- Content -->
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
        {{--    </div>--}}

    </div>
    </div>


    {{--    --}}













@endsection







