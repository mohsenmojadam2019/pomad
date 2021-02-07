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
                                    <h4>کارگاه تعاملی</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">

                        <div style="text-align:center;">

                            <a href="{{route('norooz-workshop-iframe')}}"
                               class="btn btn-secondary justify-content-center">ورود به آزمون</a>
                        </div>
                    </div>

                </div>
            </div>

@endsection









