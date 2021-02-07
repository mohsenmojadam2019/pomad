@extends('dashboard.layouts.app')
@section('content')










<div id="content" class="main-content">
    <nav class="breadcrumb-two" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
            <li class="breadcrumb-item active"><a href="{{url('dashboard/educational-group')}}">مشاوره</a></li>
            <li class="breadcrumb-item active"><a href="{{url('dashboard/educational-group')}}">لیست کارنامه مشاوره ای</a></li>
        </ol>
    </nav>





    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>نتیجه جستجو</h3>
            </div>
        </div>

        <div class="row layout-top-spacing" id="cancel-row">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">
                        <div id="default-ordering_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row"><div class="col-sm-12">

                          <div style="text-align: center">

                              تعداد : 70 نفر

                          </div>


                                    <table id="default-ordering" class="table table-hover dataTable" style="width:100%" role="grid" aria-describedby="default-ordering_info">

                                        <thead>

                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="ردیف: activate to sort column ascending" >ردیف</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label=" کد داوطلبی : activate to sort column ascending" style="width:50px;text-align: center"> کد داوطلبی </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label=" نام و نام خانوادگی : activate to sort column ascending" style="width: 278px;text-align: center"> نام و نام خانوادگی </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="گروه: activate to sort column ascending" style="width: 163px;text-align: center">گروه</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="مشاور همراه: activate to sort column ascending" style="width: 163px;text-align: center">مشاور همراه</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="آخرین گزارش: activate to sort column ascending" style="width: 163px;text-align: center">آخرین گزارش</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="تنظیمات: activate to sort column ascending" style="width: 163px;text-align: center">تنظیمات</th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        <tr role="row">
                                            <td style="text-align: center">ردیف</td>
                                            <td style="text-align: center">1810037492</td>
                                            <td style="text-align: center"> محسن مجدم</td>
                                            <td style="text-align: center">گروه </td>

                                            <td class="sorting_1">قریشی</td>
                                            <td style="text-align: center">آخرین گزارش</td>
                                            <td style="text-align: center"><button class="btn btn-secondary">انتخاب</button></td>


                                        </tr>
                                  </tbody>

                                    </table></div></div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
