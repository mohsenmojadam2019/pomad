@extends('dashboard.layouts.app')

@section('content')


    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">

                </div>
            </div>


            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>آزمون</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">


{{--                        <div class="statbox widget box box-shadow">--}}
{{--                            <div class="widget-header">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">--}}
{{--                                        <h4>رادیو درون خطی</h4>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="widget-content widget-content-area">

                                <p class=" mb-5">لطفا به سوال پاسخ دهید ؟</p>


                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline1"> گزینه اول</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline2">گزینه دوم </label>
                                </div>

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline3"> گزینه سوم</label>
                                </div>

                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline4" name="customRadioInline1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline4"> گزینه چهارم</label>
                                </div>

                            </div>
                        </div>



                </div>

            </div>

@endsection









