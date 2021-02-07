@extends('dashboard.layouts.app')
@section('content')

    <div id="content" class="main-content">
        <div class="container">


            <div class="row  style="text-align: center" layout-top-spacing">
                <nav class="breadcrumb-two" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                        <li class="breadcrumb-item active"><a href="{{url('dashboard/user-address')}}">مشاوره</a></li>
                        <li class="breadcrumb-item active"><a href="{{url('dashboard/user-address')}}">ارزشیابی جلسه
                                مشاور همراه </a></li>

                    </ol>
                </nav>

                <div id="tableStriped" class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row" style="text-align: center">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4> مشاوره همراه : <span style="color: red">



{{--                                            نامشو از کجا بیاریم--}}


{{--                                            {{$mentors->user->userInfo->last_name}}--}}
                                        </span></h4>
                                </div>
                            </div>
                        </div>

                        <div class="widget-content widget-content-area">
                            <div class="table-responsive">
                                <form action="{{route('user-home')}}" method="post">


                                <table class="table table-bordered table-striped ">


                                    <tr>
                                        <th class="text-center">بازخورد</th>
                                        <th class="text-center">مورد ارزشیابی</th>

                                    </tr>



                                        @csrf


                                        <tbody>
                                        <tr>
                                            <td >
                                                <div class="row" style="text-align: center">
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-success  mb-4 mr-2">
                                                            <input type="checkbox" name="a[]" value="1">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-warning  mb-4 mr-2">
                                                            <input type="checkbox" name="a[]" value="2">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-danger  mb-4 mr-2">
                                                            <input type="checkbox" name="a[]" value="3">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </td>

                                            <td style="text-align: center">برگزاری جلسه در تاریخ تعیین شده</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row" style="text-align: center">
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-success  mb-4 mr-2">
                                                            <input type="checkbox" name="b[]" value="1">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-warning  mb-4 mr-2">
                                                            <input type="checkbox" name="b[]" value="2">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-danger  mb-4 mr-2">
                                                            <input type="checkbox" name="b[]" value="3">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </td>
                                            <td style="text-align: center">شروع جلسه در زمان مقرر و راس ساعت
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row" style="text-align: center">
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-success  mb-4 mr-2">
                                                            <input type="checkbox" name="c[]" value="1">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-warning  mb-4 mr-2">
                                                            <input type="checkbox" name="c[]" value="2">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-danger  mb-4 mr-2">
                                                            <input type="checkbox" name="c[]" value="3">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </td>
                                            <td style="text-align: center">رعایت ظاهر رسمی و اداری ( پوشش فرم )</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row" style="text-align: center">
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-success  mb-4 mr-2">
                                                            <input type="checkbox" name="d[]" value="1">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-warning  mb-4 mr-2">
                                                            <input type="checkbox" name="d[]" value="2">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-danger  mb-4 mr-2">
                                                            <input type="checkbox" name="d[]" value="3">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </td>
                                            <td style="text-align: center">برگزاری جلسه با صدای آرام</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row" style="text-align: center">
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-success  mb-4 mr-2">
                                                            <input type="checkbox" name="e[]" value="1">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-warning  mb-4 mr-2">
                                                            <input type="checkbox" name="e[]" value="2">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-danger  mb-4 mr-2">
                                                            <input type="checkbox" name="e[]" value="3">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </td>
                                            <td style="text-align: center">رعایت مدت زمان جلسه ( حداقل 45 دقیقه – حداکثر
                                                60 دقیقه )
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row" style="text-align: center">
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-success  mb-4 mr-2">
                                                            <input type="checkbox" name="f[]" value="1">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-warning  mb-4 mr-2">
                                                            <input type="checkbox" name="f[]" value="2">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-danger  mb-4 mr-2">
                                                            <input type="checkbox" name="f[]" value="3">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </td>
                                            <td style="text-align: center">ارائه محتوای مناسب در جلسه بر اساس دستورالعمل
                                                دوره
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row" style="text-align: center">
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-success  mb-4 mr-2">
                                                            <input type="checkbox" name="g[]" value="1">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-warning  mb-4 mr-2">
                                                            <input type="checkbox" name="g[]" value="2">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-danger  mb-4 mr-2">
                                                            <input type="checkbox" name="g[]" value="3">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </td>
                                            <td style="text-align: center">ارائه برنامه مطالعاتی دقیق تا زمان جلسه بعد (
                                                خوانا – با جزییات )
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row" style="text-align: center">
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-success  mb-4 mr-2">
                                                            <input type="checkbox" name="h[]" value="1">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-warning  mb-4 mr-2">
                                                            <input type="checkbox" name="h[]" value="2">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-danger  mb-4 mr-2">
                                                            <input type="checkbox" name="h[]" value="3">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </td>
                                            <td style="text-align: center">کنترل پیشروی دروس و ثبت در دفتر برنامه ریزی
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row" style="text-align: center">
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-success  mb-4 mr-2">
                                                            <input type="checkbox" name="i[]" value="1">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-warning  mb-4 mr-2">
                                                            <input type="checkbox" name="i[]" value="2">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-danger  mb-4 mr-2">
                                                            <input type="checkbox" name="i[]" value="3">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </td>
                                            <td style="text-align: center">بررسی و ثبت نتیجه آزمون آزمایشی</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row" style="text-align: center">
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-success  mb-4 mr-2">
                                                            <input type="checkbox" name="g[]" value="1">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-warning  mb-4 mr-2">
                                                            <input type="checkbox" name="g[]" value="2">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-danger  mb-4 mr-2">
                                                            <input type="checkbox" name="g[]" value="3">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </td>
                                            <td style="text-align: center">پیگیری موارد مشخص شده در جلسات فردی ،
                                                دستیاران ارشد ، تماس های هماهنگ اولیا
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row" style="text-align: center">
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-success  mb-4 mr-2">
                                                            <input type="checkbox" name="h[]" value="1">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-warning  mb-4 mr-2">
                                                            <input type="checkbox" name="h[]" value="2">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-danger  mb-4 mr-2">
                                                            <input type="checkbox" name="h[]" value="3">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </td>
                                            <td style="text-align: center">ثبت جلسه در پرونده داوطلب و تکمیل تمامی بخش
                                                ها
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <div class="row" style="text-align: center">
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-success  mb-4 mr-2">
                                                            <input type="checkbox" name="i[]" value="1">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-warning  mb-4 mr-2">
                                                            <input type="checkbox" name="i[]" value="2">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-danger  mb-4 mr-2">
                                                            <input type="checkbox" name="i[]" value="3">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </td>
                                            <td style="text-align: center">ارائه گزارشات مربوطه به هر دوره ، پایان هر
                                                جلسه
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row" style="text-align: center">
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-success  mb-4 mr-2">
                                                            <input type="checkbox" name="j[]" value="1">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-warning  mb-4 mr-2">
                                                            <input type="checkbox" name="j[]" value="2">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-danger  mb-4 mr-2">
                                                            <input type="checkbox" name="j[]" value="3">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </td>
                                            <td style="text-align: center">بررسی نیاز داوطلب به جلسات دستیار ارشد ، فردی
                                                و معلم خصوصی و تکمیل فرم مربوطه
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="row" style="text-align: center">
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-success  mb-4 mr-2">
                                                            <input type="checkbox" name="k[]" value="1">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-warning  mb-4 mr-2">
                                                            <input type="checkbox" name="k[]" value="2">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-danger  mb-4 mr-2">
                                                            <input type="checkbox" name="k[]" value="3">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </td>
                                            <td style="text-align: center">بایگانی و عکس از برنامه مطالعاتی داوطلب</td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <div class="row" style="text-align: center">
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-success  mb-4 mr-2">
                                                            <input type="checkbox" name="l[]" value="1">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-warning  mb-4 mr-2">
                                                            <input type="checkbox" name="l[]" value="2">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-danger  mb-4 mr-2">
                                                            <input type="checkbox" name="l[]" value="3">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </td>


                                            <td style="text-align: center">تعیین زمان جلسه بعد پایان هر جلسه و ثبت در
                                                زمانبندی
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row" style="text-align: center">
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-success  mb-4 mr-2">
                                                            <input type="checkbox" name="f[]" value="1">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-warning  mb-4 mr-2">
                                                            <input type="checkbox" name="f[]" value="2">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-danger  mb-4 mr-2">
                                                            <input type="checkbox" name="f[]" value="3">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </td>
                                            <td style="text-align: center">امضای دفتر جلسات و دریافت امضا از داوطلب
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row" style="text-align: center">
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-success  mb-4 mr-2">
                                                            <input type="checkbox" name="m[]" value="1">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-warning  mb-4 mr-2">
                                                            <input type="checkbox" name="m[]" value="2">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-danger  mb-4 mr-2">
                                                            <input type="checkbox" name="m[]" value="3">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </td>
                                            <td style="text-align: center">ارائه زمانبرگ پایان هر جلسه
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row" style="text-align: center">
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-success  mb-4 mr-2">
                                                            <input type="checkbox" name="n[]" value="1">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-warning  mb-4 mr-2">
                                                            <input type="checkbox" name="n[]" value="2">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <label
                                                            class="switch s-icons s-outline  s-outline-danger  mb-4 mr-2">
                                                            <input type="checkbox" name="n[]" value="3">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </td>
                                            <td style="text-align: center">برقراری تماس دوره در زمان مقرر</td>
                                        </tr>


                                        </tbody>


                                </table>
                                <button type="submit" class="btn btn-secondary">ثبت</button>
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









