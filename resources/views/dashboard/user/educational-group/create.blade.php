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
                                        <h4>گروه آموزشی</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content widget-content-area">

                                <form action="{{route('educational-group.store')}}" method="post">
                                    @csrf

                                    <div class="form-row">
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustomUsername">نام گروه آموزشی</label>
                                            <span style="color: #6f42c1"></span>
                                            <div class="input-group">
                                                <input value="{{$educational_group ? $educational_group->name: ''}}" name="name" type="text"
                                                       class="form-control" id="validationCustomUsername"
                                                       placeholder=""
                                                       aria-describedby="inputGroupPrepend"
                                                       required="">
                                                <div class="valid-feedback">
                                                    به نظر خوب میاد!
                                                </div>
                                                <div class="invalid-feedback">
                                                    لطفا وارد کنید!
                                                </div>
                                            </div>
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
                                <label for="validationCustom03">گروه آزمایشی </label>
                                <span style="color: #6f42c1"> </span>
                                <div class="input-group">
                                    <input value="{{$educational_group ? $educational_group->group: ''}}" name="group" type="text"
                                           class="form-control" id="validationCustomUsername"
                                           placeholder=""
                                           aria-describedby="inputGroupPrepend"
                                           required="">
                                    <div class="valid-feedback">
                                        به نظر خوب میاد!
                                    </div>
                                    <div class="invalid-feedback">
                                        لطفا وارد کنید!
                                    </div>
                                </div>
                            </div>

                        </div>


                                    <div class="form-row">
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom03">تاریخ گروه آزمایشی</label>

                                            <select class="form-control form-control-sm" id="validationCustom01" name="year"  >
                                                <option value="1398">1398</option>
                                                <option value="1399">1399</option>
                                                <option value="1400"  selected>1400</option>
                                                <option value="1401">1401</option>
                                                <option value="1402">1402</option>
                                                <option value="1403">1403</option>
                                                <option value="1404">1404</option>
                                                <option value="1405">1405</option>
                                                <option value="1406">1406</option>
                                                <option value="1407">1407</option>

                                            </select>

                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>
                                        </div>
                                    </div>




                                    {{--                                    --}}

                        <button type="submit" class="btn btn-primary">ویرایش</button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>


    </div>
    </div>

    </div>









@endsection




