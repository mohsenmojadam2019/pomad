@extends('dashboard.layouts.app')
@section('content')

    <div id="content" class="main-content">
        <div class="container">


            <div class="row layout-top-spacing">
                <nav class="breadcrumb-two" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                        <li class="breadcrumb-item active"><a href="{{url('dashboard/user-address')}}">مشاوره</a></li>
                        <li class="breadcrumb-item active"><a href="{{url('dashboard/user-address')}}">ثبت تخلف</a></li>

                    </ol>
                </nav>

                <div id="tableStriped" class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>ثبت تخلف</h4>
                                </div>
                            </div>
                        </div>

                        <div class="widget-content widget-content-area">
                            <div class="table-responsive">


                                <table class="table table-bordered table-striped ">

                                    <thead>
                                    <tr>
                                        <th>
                                            لیست مشاوران
                                        </th>
                                        <th>
                                            تعداد :{{ $mentors->count() }} نفر
                                        </th>

                                    </tr>
                                    </thead>
                                        <tr>
                                            <th class="text-center">ردیف</th>
                                            <th class="text-center">جنسیت</th>
                                            <th class="text-center">مشاور</th>

                                            <th class="text-center">تنظیمات</th>


                                        </tr>
                                        <tbody>
                                        @foreach( $mentors as $key => $mentor)
                                        <tr>

                                            <td style="text-align: center">{{$key}}</td>
                                            <td style="text-align: center">{{$mentor->mentor ? $mentor->mentor->userInfo->gender:''}}</td>
                                            <td style="text-align: center">{{$mentor->mentor ? $mentor->mentor->userInfo->first_name . ' ' . $mentor->mentor->userInfo->last_name  :''}}</td>

                                            <td style="text-align: center;color: #6f42c1"><a href="{{route('record-violations.assessment',$mentor->id)}}">انتخاب</a></td>

                                        </tr>
                                        @endforeach

                                        </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>


            </div>


        </div>

    </div>

    </div>









@endsection









