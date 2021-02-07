@extends('dashboard.layouts.app')
@section('content')



    <div id="content" class="main-content">
        <div class="container">

            <div class="container">

                <div class="page-header">
                    <div class="page-title">
                        <h3></h3>
                    </div>
                </div>


                <div class="row layout-top-spacing">


                    <div class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>پشتیبانی تیکت</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <form>
                                    <div class="col-md-4">
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlInput2">درخواست</label>

                                            <select class="custom-select" name="" id="">

                                                <option value=fani">فنی</option>
                                                <option value="consultant">مشاور</option>


                                            </select>


                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlInput2">درخواست</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput2"
                                               placeholder="لطفا به مشکل من رسیدگی کنید">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlSelect1"> انتخاب کنید</label>
                                        <select class="form-control custom-select" id="exampleFormControlSelect1">
                                            <option>فرزند من مطالعه ندارد</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlTextarea1"> متن</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                  rows="3"></textarea>
                                    </div>
                                    <div class="form-group mb-4 mt-3">
                                        <label for="exampleFormControlFile1">ورودیی پرونده </label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                    <input type="submit" value="ارسال" name="time" class="mt-4 mb-4 btn btn-primary">
                                </form>



                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>

    </div>


@endsection


