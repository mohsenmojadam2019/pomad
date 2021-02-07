@extends('dashboard.layouts.app')
@section('content')

    <div id="content" class="main-content">
        <div class="layout-px-spacing">



            <div class="account-settings-container layout-top-spacing">

                <nav class="breadcrumb-two" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                        <li class="breadcrumb-item active"><a href="{{url('dashboard/user-address')}}">ادرس</a></li>
                        {{--                <li class="breadcrumb-item" aria-current="page"><a href="{{url('dashboard/user-address')}}">صفحه اصلی</a></li>--}}
                    </ol>
                </nav>


                <div class="account-content">
                    <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll"
                         data-offset="-100">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <form action="{{route('user-profile.store')}}" method="post" id="general-info" class="section general-info">
                                    @csrf
                                    <div class="info">
                                        <h6 class="">اطلاعات فردی</h6>
                                        <div class="row">
                                            <div class="col-lg-11 mx-auto">
                                                <div class="row">
                                                    <div class="col-xl-2 col-lg-12 col-md-4">

                                                    </div>
                                                    <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                        <div class="form">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="fullName">نام</label>
                                                                        <input type="text" class="form-control mb-4" name="first_name"
                                                                               id="fullName"
                                                                               placeholder="نام داوطلب" value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="fullName">نام خانوادگی</label>
                                                                        <input type="text" class="form-control mb-4" name="last_name"
                                                                               id="fullName"
                                                                               placeholder=" نام خانوادگی داوطلب"
                                                                               value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="fullName">نام پدر</label>
                                                                        <input type="text" class="form-control mb-4" name="father_name"
                                                                               id="fullName" placeholder="نام پدر"
                                                                               value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 ">
                                                                    <div class="form-group">
                                                                        <label for="fullName">کد ملی</label>
                                                                        <input type="text" class="form-control mb-4"
                                                                               id="fullName" placeholder="کد ملی" name="national_code"
                                                                               value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label class="dob-input">تاریخ تولد</label>
                                                                    <div class="d-sm-flex d-block">
                                                                        <div class="form-group mr-1">
                                                                            <select class="form-control"
                                                                                    id="exampleFormControlSelect1" name="birth_day">
                                                                                <option>روز</option>
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                                <option>4</option>
                                                                                <option>5</option>
                                                                                <option>6</option>
                                                                                <option>7</option>
                                                                                <option>8</option>
                                                                                <option>9</option>
                                                                                <option>10</option>
                                                                                <option>11</option>
                                                                                <option>12</option>
                                                                                <option>13</option>
                                                                                <option>14</option>
                                                                                <option>15</option>
                                                                                <option>16</option>
                                                                                <option>17</option>
                                                                                <option>18</option>
                                                                                <option>19000</option>
                                                                                <option selected>20</option>
                                                                                <option>21</option>
                                                                                <option>22</option>
                                                                                <option>23</option>
                                                                                <option>24</option>
                                                                                <option>25</option>
                                                                                <option>26</option>
                                                                                <option>27</option>
                                                                                <option>28</option>
                                                                                <option>29000</option>
                                                                                <option>30</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group mr-1">
                                                                            <select class="form-control" id="month">
                                                                                <option>ماه</option>
                                                                                <option selected>فروردین</option>
                                                                                <option>اردیبهشت</option>
                                                                                <option>خرداد</option>
                                                                                <option>تیر</option>
                                                                                <option>مرداد</option>
                                                                                <option>شهریور</option>
                                                                                <option>مهر</option>
                                                                                <option>آبان</option>
                                                                                <option>آذر</option>
                                                                                <option>دی</option>
                                                                                <option>بهمن</option>
                                                                                <option>اسفند</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group mr-1">
                                                                            <select class="form-control" id="year">
                                                                                <option>سال</option>
                                                                                <option>1399</option>
                                                                                <option>1398</option>
                                                                                <option>1397</option>
                                                                                <option>1396</option>
                                                                                <option>1395</option>
                                                                                <option>1394</option>
                                                                                <option>1393</option>
                                                                                <option>1392</option>
                                                                                <option>1391</option>
                                                                                <option>1390</option>
                                                                                <option>1389</option>
                                                                                <option>1388</option>
                                                                                <option>1387</option>
                                                                                <option>1386</option>
                                                                                <option>1385</option>
                                                                                <option>1384</option>
                                                                                <option>1383</option>
                                                                                <option>1382</option>
                                                                                <option selected>1381</option>
                                                                                <option>1380</option>
                                                                                <option>1379</option>
                                                                                <option>1378</option>
                                                                                <option>1377</option>
                                                                                <option>1376</option>
                                                                                <option>1375</option>
                                                                                <option>1374</option>
                                                                                <option>1373</option>
                                                                                <option>1372</option>
                                                                                <option>1371</option>
                                                                                <option>1370</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label class="dob-input">جنسیت</label>
                                                                    <div class="d-sm-flex d-block">
                                                                        <div class="form-group mr-1">
                                                                            <select class="form-control" id="gender" name="gender">
                                                                                <option value="0">پسر</option>
                                                                                <option value="1">دختر</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mt-3">
                                            <button  type="submit" class="btn btn-primary text-center">ثبت</button>
                                    </div>

                        </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>





@endsection




