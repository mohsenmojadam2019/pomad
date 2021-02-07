@extends('dashboard.layouts.app')
@section('content')


    <div id="content" class="main-content">

        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/educational-group')}}">گروه آموزشی</a></li>
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
                                        <h4>گروه های آموزشی</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content widget-content-area">


                                <div class="form-row">
                                    <div class="col-md-6 mb-4">
                                        <label for="validationCustomUsername">نام گروه آموزشی</label>
                                        <span  style="color: #6f42c1">{{$educational_group ? $educational_group->name: ''}}</span>


                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="validationCustom01">تاریخ گروه آزمایشی</label>
                                        <span  style="color: #6f42c1">{{$educational_group ? $educational_group->year: ''}}</span>
                                    </div>

                                </div>


                                <div class="form-row">
                                    <div class="col-md-6 mb-4">
                                        <label for="validationCustom03">گروه آزمایشی </label>
                                        <span  style="color: #6f42c1">{{$educational_group ? $educational_group->group: ''}} </span>
                                    </div>

                                </div>


                                <a href="{{route('educational-group-edit')}}" class="btn btn-primary">ویرایش</a>

                            </div>



                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    </div>









@endsection




