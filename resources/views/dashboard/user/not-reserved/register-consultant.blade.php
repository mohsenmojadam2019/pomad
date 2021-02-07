@extends('dashboard.layouts.app')
@section('content')










<div id="content" class="main-content">
    <nav class="breadcrumb-two" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
            <li class="breadcrumb-item active"><a href="{{url('dashboard/educational-group')}}">مشاوره</a></li>
            <li class="breadcrumb-item active"><a href="{{url('dashboard/educational-group')}}">ثبت نامی های مشاور در سایت</a></li>
        </ol>
    </nav>





    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>ثبت نامی های مشاور همراه</h3>
            </div>
        </div>

        <div class="row layout-top-spacing" id="cancel-row">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">
                        <div id="default-ordering_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row"><div class="col-sm-12"><table id="default-ordering" class="table table-hover dataTable" style="width:100%" role="grid" aria-describedby="default-ordering_info">
                                        <thead>

                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="ردیف: activate to sort column ascending" style="width: 146px;">ردیف</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label=" نام : activate to sort column ascending" style="width: 305px;"> نام </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label=" نام خانوادگی : activate to sort column ascending" style="width: 78px;"> نام خانوادگی </th>
                                            <th class="sorting_desc" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-sort="descending" aria-label="کدملی: activate to sort column ascending" style="width: 74px;">کد ملی</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label=" نام پدر : activate to sort column ascending" style="width: 153px;">نام پدر </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label=" وضعیت تحصیل : activate to sort column ascending" style="width: 145px;"> وضعیت تحصیل </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="سال: activate to sort column ascending" style="width: 163px;">سال</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="مقطع: activate to sort column ascending" style="width: 163px;">مقطع</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="رشته: activate to sort column ascending" style="width: 163px;">رشته</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="دانشگاه: activate to sort column ascending" style="width: 163px;">دانشگاه</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="ترم: activate to sort column ascending" style="width: 163px;">ترم</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="موبایل: activate to sort column ascending" style="width: 163px;">موبایل</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="تلفن: activate to sort column ascending" style="width: 163px;">تلفن</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="ایمیل: activate to sort column ascending" style="width: 163px;">ایمیل</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="سابقه مشاوره: activate to sort column ascending" style="width: 163px;">سابقه مشاوره</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="داوطلب مرکز: activate to sort column ascending" style="width: 163px;">داوطلب مرکز</th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        <tr role="row">
                                            <td style="text-align: center">ردیف</td>
                                            <td style="text-align: center"> نام</td>
                                            <td style="text-align: center">نام خانوادگی</td>
                                            <td style="text-align: center"> کدملی </td>
                                            <td class="sorting_1">نام پدر</td>
                                            <td style="text-align: center">وضعیت تحصیل</td>
                                            <td style="text-align: center">سال</td>
                                            <td style="text-align: center">مقطع</td>
                                            <td style="text-align: center">رشته </td>
                                            <td style="text-align: center">دانشگاه </td>
                                            <td style="text-align: center">ترم </td>
                                            <td style="text-align: center">موبایل </td>
                                            <td style="text-align: center">تلفن </td>
                                            <td style="text-align: center">ایمیل </td>
                                            <td style="text-align: center">سابقه مشاوره </td>
                                            <td style="text-align: center">داوطلب مرکز </td>

                                        </tr>
                                  </tbody>
                                        <tfoot>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="ردیف: activate to sort column ascending" style="width: 146px;">ردیف</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label=" نام : activate to sort column ascending" style="width: 305px;"> نام </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label=" نام خانوادگی : activate to sort column ascending" style="width: 78px;"> نام خانوادگی </th>
                                            <th class="sorting_desc" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-sort="descending" aria-label="کدملی: activate to sort column ascending" style="width: 74px;">کد ملی</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label=" نام پدر : activate to sort column ascending" style="width: 153px;">نام پدر </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label=" وضعیت تحصیل : activate to sort column ascending" style="width: 145px;"> وضعیت تحصیل </th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="سال: activate to sort column ascending" style="width: 163px;">سال</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="مقطع: activate to sort column ascending" style="width: 163px;">مقطع</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="رشته: activate to sort column ascending" style="width: 163px;">رشته</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="دانشگاه: activate to sort column ascending" style="width: 163px;">دانشگاه</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="ترم: activate to sort column ascending" style="width: 163px;">ترم</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="موبایل: activate to sort column ascending" style="width: 163px;">موبایل</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="تلفن: activate to sort column ascending" style="width: 163px;">تلفن</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="ایمیل: activate to sort column ascending" style="width: 163px;">ایمیل</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="سابقه مشاوره: activate to sort column ascending" style="width: 163px;">سابقه مشاوره</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1" colspan="1" aria-label="داوطلب مرکز: activate to sort column ascending" style="width: 163px;">داوطلب مرکز</th>
                                        </tr>
                                        </tfoot>
                                    </table></div></div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
