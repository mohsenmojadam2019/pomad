@extends('dashboard.layouts.app')
@section('content')
{{--دومی--}}
    <div id="content" class="main-content">

        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/educational-group')}}">مشاوره</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/educational-group')}}">سوابق داوطلبان</a>
                </li>
            </ol>
        </nav>


        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>نتیجه جستجو</h3>
                </div>
            </div>

            <div class="row layout-top-spacing" id="cancel-row">
                <div class="container">
                    <div class="container">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="table-responsive mb-4 mt-4">
                            <div id="default-ordering_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">


                                <div class="row">
                                    <div class="col-sm-12">


                                        <div class="col-md-12">

                                            <form method="post" action="">

                                                @csrf

                                                <div class="form-row mb-4">
                                                    <div class="form-group col-md-3">

                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <select id="inputState" class="form-control">
                                                            <option selected="">انتخاب کنید...</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <a type="submit" class="btn btn-secondary" >انتخاب</a>
                                                    </div>
                                                </div>






                                            </form>
                                        </div>






                                            <table id="default-ordering" class="table table-hover dataTable"
                                                   style="width:100%" role="grid"
                                                   aria-describedby="default-ordering_info">



                                                <thead>
                                                <tr role="row">
                                                    <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                        rowspan="1" colspan="1"
                                                        aria-label="ردیف: activate to sort column ascending"
                                                        style="width: 50px;text-align: center;font-size: 12px "
                                                    >ردیف
                                                    </th>




                                                    <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                        aria-label=" کد داوطلب : activate to sort column ascending"
                                                        style="width: 200px;text-align: center;font-size: 12px "> کد
                                                        داوطلب
                                                    </th>

                                                    <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                        aria-label=" نام : activate to sort column ascending"
                                                        style="width: 200px;text-align: center;font-size: 12px "> نام
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                        aria-label=" نام خانوادگی : activate to sort column ascending"
                                                        style="width: 200px;text-align: center;font-size: 12px "> نام
                                                        خانوادگی
                                                    </th>


                                                    <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                        width="300px"
                                                        aria-label="گروه : activate to sort column ascending"
                                                        style="width: 200px;text-align: center;font-size: 12px "> گروه
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                        rowspan="1" colspan="1"
                                                        aria-label=" مشاور همراه : activate to sort column ascending"
                                                        style="width: 200px;text-align: center;font-size: 12px "> مشاوره همراه
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                        rowspan="1" colspan="1"
                                                        aria-label="کدملی: activate to sort column ascending"
                                                        style="width: 200px;text-align: center;font-size: 10px ">کدملی
                                                    </th>


                                                    <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                        rowspan="1" colspan="1"
                                                        aria-label="تنظیمات: activate to sort column ascending"
                                                        style="width: 200px;text-align: center;font-size: 12px ">تنظیمات
                                                    </th>


                                                </tr>
                                                </thead>
                                                <tbody>

                                                <tr>
                                                    <th rowspan="1" colspan="1"
                                                        style="text-align: center;font-size: 13px">1
                                                    </th>
                                                    <th style="text-align: center;font-size: 13px"> 15739</th>
                                                    <th rowspan="1" colspan="1"
                                                        style="text-align: center;font-size: 13px"> محسن
                                                    </th>
                                                    <th rowspan="1" colspan="1"
                                                        style="text-align: center;font-size: 13px"> مجدم
                                                    </th>


                                                    <th width="200px" style="text-align: center;font-size: 13px"> یازدهم
                                                        غیر حضوری 1400
                                                    </th>

                                                    <th rowspan="1" colspan="1"
                                                        style="text-align: center;font-size: 13px"> قریشی
                                                    </th>


                                                    <th rowspan="1" colspan="1"
                                                        style="text-align: center;font-size: 13px"> 1810037492
                                                    </th>
                                                    <th rowspan="1" colspan="1"
                                                        style="text-align: center;font-size: 13px">

                                                        <a href="" style="text-align: center;color: #6f42c1" >نمایش</a>


                                                    </th>


                                                </tr>
                                            </table>
                                    </div>
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









