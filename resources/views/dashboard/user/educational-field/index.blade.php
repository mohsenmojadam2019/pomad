@extends('dashboard.layouts.app')
@section('content')




    <div id="content" class="main-content">

        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/user-educational-field')}}">ادرس</a></li>
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
                                        <h4>تحصیلی</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form  class="needs-validation was-validated" novalidate="">
                                    <div class="form-row">
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustomUsername">عنوان </label>

                                         <span>{{ $educational_field ?  $educational_field->title : ''}}</span>

                                            <div class="input-group">

                                    <a href="{{route('educational-field-edit')}}" class="btn btn-secondary mt-2">ویرایش</a>

                                </form>


                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>











@endsection




