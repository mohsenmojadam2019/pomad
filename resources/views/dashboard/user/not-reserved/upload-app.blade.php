@extends('dashboard.layouts.app')
@section('content')




    <div id="content" class="main-content">

        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/user-address')}}">مشاوره</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/user-address')}}">ارسال برنامه</a></li>
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
                                        <h4>ارسال برنامه</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-6 mb-4">
                                            <div class="input-group">

                                                <span>نام کاربری</span><span style="color: #0d9a5d">6464</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <span>نام</span><span style="color: #0d9a5d">6464</span>

                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <span>نام خانوادگی</span><span style="color: #0d9a5d">6464</span>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <span>تلفن</span><span style="color: #0d9a5d">6464</span>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <span>موبایل</span><span style="color: #0d9a5d">6464</span>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <span>مشاور همراه</span><span style="color: #0d9a5d">6464</span>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <span>گروه</span><span style="color: #0d9a5d">6464</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">


                                    <form class="needs-validation was-validated" novalidate="">

                                        <span style="color: #0d9a5d;margin-bottom: 30px">ارسال برنامه</span>

                                        <div class="d-flex mb-4">
                                            <input type="file" class="form-control-file" id="mail_File_attachment" multiple="multiple" >
                                        </div>

                                        <a href="" class="btn btn-danger mb-2 " style="margin-top: 50px;">ارسال فایل</a>

                                    </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>











@endsection




