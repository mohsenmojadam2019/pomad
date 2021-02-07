@extends('dashboard.layouts.app')
@section('content')

    <div id="content" class="main-content">
        <div class="container">



                <div class="row layout-top-spacing">
                    <nav class="breadcrumb-two" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                            <li class="breadcrumb-item active"><a href="{{url('dashboard/user-address')}}">
                                    مشاوره</a></li>
                            <li class="breadcrumb-item active"><a href="{{url('dashboard/user-address')}}">زمانبندی</a>
                            </li>
                        </ol>
                    </nav>

                    <div id="tableStriped" class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>زمان بندی</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content widget-content-area">
                                <div class="table-responsive">

                                    <div class="row">

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


                                    </div>
                                    <hr>
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
                                    <table class="table table-bordered table-striped mb-4">


                                        <thead>
                                        <tr>
                                            <th class="text-center">روز هفته</th>
                                            <th class="text-center">تاریخ</th>
                                            <th class="text-center"> توضیحات</th>
                                            <th class="text-center">ساعت 9</th>
                                            <th class="text-center">ساعت 10</th>
                                            <th class="text-center">ساعت 11</th>
                                            <th class="text-center">ساعت 12</th>
                                            <th class="text-center">ساعت 13</th>
                                            <th class="text-center">ساعت 14</th>
                                            <th class="text-center">ساعت 15</th>
                                            <th class="text-center">ساعت 16</th>
                                            <th class="text-center">ساعت 17</th>
                                            <th class="text-center">ساعت 18</th>
                                            <th class="text-center">ساعت 19</th>
                                            <th class="text-center">ساعت 20</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                           <td style="text-align: center">شنبه</td>
                                           <td style="text-align: center">1399/05/11</td>
                                           <td style="text-align: center"></td>
                                           <td style="text-align: center"></td>
                                           <td style="text-align: center"></td>
                                           <td style="text-align: center"></td>
                                           <td style="text-align: center"></td>
                                           <td style="text-align: center"></td>
                                           <td style="text-align: center"></td>
                                           <td style="text-align: center"></td>
                                           <td style="text-align: center"></td>
                                           <td style="text-align: center"></td>
                                           <td style="text-align: center"></td>
                                           <td style="text-align: center"></td>
                                           <td style="text-align: center"></td>
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
                                        <h4>اسامی داوطلبان تحت پوشش</h4>
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
                                            <th class="text-center"> گروه ثبت نامی</th>



                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>

                                            <td style="text-align: center">محسن مجدم</td>
                                            <td style="text-align: center">علوم تجربی</td>
                                            <td style="text-align: center">گروه ثبت نامی</td>

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


                                            <table class="table table-bordered table-striped mb-4">
                                                <div>جدول زمان بندی فوق در تاریخ .......... توسط آقا / خانم .......... تنظیم گردید و اینجانب ضمن کنترل دقیق آن ، تنظیم جلسه مشاوره فردی برای تمامی داوطلبان تحت پوشش ، بجز موارد زیر را تایید مینمایم .

                                                </div>
                                                &nbsp
                                                <div>نام و نام خانوادگی .................... و امضاء .........</div>
                                                &nbsp
                                                &nbsp
                                                <thead>
                                                <tr>
                                                    <th class="text-center">نام و نام خانوادگی</th>
                                                    <th class="text-center">علت عدم تنظیم وقت</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>

                                                    <td style="text-align: center">محسن مجدم</td>
                                                    <td style="text-align: center">نامشخص</td>

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

    </div>









@endsection









