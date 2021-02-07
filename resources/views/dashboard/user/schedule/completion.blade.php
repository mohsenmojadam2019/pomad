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
                            <li class="breadcrumb-item active"><a href="{{url('dashboard/user-address')}}">زمانبدی (تکمیل)</a>
                            </li>
                        </ol>
                    </nav>

                    <div id="tableStriped" class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>زمانبرگ</h4>
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
                                            <th class="text-center">روز هفته</th>
                                            <th class="text-center">تاریخ</th>
                                            <th class="text-center">توضیحات</th>
                                            <th class="text-center">09:00</th>
                                            <th class="text-center">09:30</th>
                                            <th class="text-center">10:00</th>
                                            <th class="text-center">10:30</th>
                                            <th class="text-center">11:00</th>
                                            <th class="text-center">11:30</th>
                                            <th class="text-center">12:00</th>
                                            <th class="text-center">12:30</th>
                                            <th class="text-center">13:00</th>
                                            <th class="text-center">13:30</th>
                                            <th class="text-center">14:00</th>
                                            <th class="text-center">14:30</th>
                                            <th class="text-center">15:00</th>
                                            <th class="text-center">15:30</th>
                                            <th class="text-center">16:00</th>
                                            <th class="text-center">16:30</th>
                                            <th class="text-center">17:00</th>
                                            <th class="text-center">17:30</th>
                                            <th class="text-center">18:00</th>
                                            <th class="text-center">18:30</th>
                                            <th class="text-center">19:00</th>
                                            <th class="text-center">19:30</th>
                                            <th class="text-center">20:00</th>
                                            <th class="text-center">20:30</th>
                                            <th class="text-center">21:00</th>
                                            <th class="text-center">21:30</th>


                                        </tr>




                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="text-align: center">شنبه</td>
                                            <td style="text-align: center;color: red">10/08/1399</td>
                                            <td style="text-align: center">ندارد</td>
                                            <td style="text-align: center" >1</td>
                                            <td style="text-align: center" >1</td>
                                            <td style="text-align: center" >1</td>
                                            <td style="text-align: center" >1</td>
                                            <td style="text-align: center" >1</td>
                                            <td style="text-align: center" >1</td>
                                            <td style="text-align: center" >1</td>
                                            <td style="text-align: center" >1</td>
                                            <td style="text-align: center" >1</td>
                                            <td style="text-align: center" >1</td>
                                            <td style="text-align: center" >1</td>
                                            <td style="text-align: center" >1</td>
                                            <td style="text-align: center" >1</td>
                                            <td style="text-align: center" >1</td>
                                            <td style="text-align: center" >1</td>
                                            <td style="text-align: center" >1</td>
                                            <td style="text-align: center" >1</td>
                                            <td style="text-align: center" >1</td>
                                            <td style="text-align: center" >1</td>
                                            <td style="text-align: center" >1</td>
                                            <td style="text-align: center" >1</td>
                                            <td style="text-align: center" >1</td>
                                            <td style="text-align: center" >1</td>
                                            <td style="text-align: center" >1</td>
                                            <td style="text-align: center" >1</td>
                                            <td style="text-align: center" >1</td>



                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>




                    <div id="tableStriped" class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>اسامی داوطلبان تحت پوشش
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content widget-content-area">
                                <div class="table-responsive">


                                    <table class="table table-bordered table-striped mb-4">


                                        <thead>
                                        <tr>
                                            <th class="text-center">نام و نام خانوادگی</th>
                                            <th class="text-center">گروه آزمایشی</th>
                                            <th class="text-center">گروه ثبت نامی</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="text-align: center">محسن مجدم</td>
                                            <td style="text-align: center">علوم تجربی</td>
                                            <td style="text-align: center">غیرحضوری 99</td>
                                        </tr>

                                        </tbody>




                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div id="tableStriped" class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4></h4>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content widget-content-area">
                                <div class="table-responsive">
<p style="font-size: 12px">
    جدول زمان بندی فوق در تاریخ .......... توسط آقا / خانم .......... تنظیم گردید و اینجانب ضمن کنترل دقیق آن ، تنظیم جلسه مشاوره فردی برای تمامی داوطلبان تحت پوشش ، بجز موارد زیر را تایید مینمایم .



</p>
                                    &nbsp
                                    &nbsp
                                    <p style="font-size: 12px">
                                        نام و نام خانوادگی .................... و امضاء .......
                                    </p>

                                    &nbsp
                                    &nbsp

                                    <table class="table table-bordered table-striped mb-4">


                                        <thead>
                                        <tr>
                                            <th class="text-center">نام و نام خانوادگی</th>
                                            <th class="text-center">علت عدم تنظیم وقت</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="text-align: center">محسن مجدم</td>
                                            <td style="text-align: center">وقت نبود</td>
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









