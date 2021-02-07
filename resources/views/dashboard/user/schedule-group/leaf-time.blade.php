@extends('dashboard.layouts.app')
@section('content')

    <div id="content" class="main-content">
        <div class="container">
            <div class="container">


                <div class="row layout-top-spacing">
                    <nav class="breadcrumb-two" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                            <li class="breadcrumb-item active"><a href="{{url('dashboard/user-address')}}">
                                    مشاوره</a></li>
                            <li class="breadcrumb-item active"><a href="{{url('dashboard/user-address')}}">زمانبرگ</a>
                            </li>
                        </ol>
                    </nav>

                    <div id="tableStriped" class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>زمان برگ</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content widget-content-area">
                                <div class="table-responsive">
                                    <div class="row">
                                        <div style="width: 50px;height: 50px;margin:0 30px 30px 0"><img
                                                src="{{asset('assets/dashboard/img/pourdastmalchi.png')}}" alt=""
                                                width="100px" height="50"></div>
                                        <div style="margin-left: 30px;margin-right: 80px">زمان بندی جلسات  مشاور همراه :


                                            <span style="color: #6f42c1 ">خانم افشاری 1400</span>

                                        </div>


                                        <div >دوره
                                           <span style="color: #0d9a5d">16=>1399/12/23</span>
                                            تا
                                           <span style="color: #0d9a5d"> 1400/01/13</span>
                                            آخرین مهلت تحویل قبل از :
                                           <span style="color: red">1399/12/23</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <table class="table table-bordered table-striped mb-4">
                                        <form action="" method="post">
                                            @csrf

                                            <div class="form-row" >

                                                <label style="margin-right: 50px;">مشاوره همراه</label>

                                                <select style="margin-bottom: 50px;width: 300px" name="" id="">
                                                    <option value="all" selected>مشاوره همراه</option>
                                                </select>

                                                <label style="margin-right: 50px">دوره</label>

                                                <select style="margin-bottom: 50px;width: 300px" name="" id="">
                                                    <option value="all" selected>دوره</option>


                                                </select>

                                                <button type="submit" class="btn btn-secondary mb-5 mr-3">انتخاب
                                                </button>

                                            </div>


                                        </form>


                                        <thead>
                                        <tr>
                                            <th class="text-center">ردیف</th>
                                            <th class="text-center">نام و نام خانوادگی داوطلب</th>
                                            <th class="text-center"> تاریخ و جلسه دوره</th>
                                            <th class="text-center">مدت جلسه</th>
                                            <th class="text-center">توضیحات</th>
                                            <th class="text-center">جلسه فوق به دلیل.....تشکیل نشد
                                                زمان و تاریخ جبرانی جلسه
                                            </th>
                                            <th class="text-center">تاریخ تماس دوره</th>
                                            <th class="text-center">مدت
                                                تماس
                                            </th>
                                            <th class="text-center">آرایه
                                                گزارش
                                            </th>
                                            <th class="text-center">تایید مرکز مشاوره
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td style="color: #0e0e0e">محسن مجدم</td>
                                            <td>
                                             تاریخ :......
                                                ساعت :......
                                            </td>
                                            <td>......</td>
                                            <td class=" text-center"> ......</td>
                                            <td class=" text-center">

                                                علت عدم تشکیل جلسه :............
                                                جلسه جبرانی:......(ذکر در ردیف:.........)


                                            </td>

                                            <td class=" text-center " style="color: #0e0e0e"> تاریخ : .........</td>
                                            <td class=" text-center"> ......</td>
                                            <td class=" text-center"><input type="checkbox"></td>
                                            <td class=" text-center" style="color: green">

                                          تاریخ:...........
                                                امضاء:...........


                                            </td>
                                        </tr>

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









