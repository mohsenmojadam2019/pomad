@extends('dashboard.layouts.app')
@section('content')



    <div id="content" class="main-content">
        <div class="container">

            <div class="container">




                <div class="row layout-top-spacing">
                    <div id="mediaObjectSimple" class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>برنامه مطالعاتی</h4>
                                    </div>
                                </div>
                            </div>


                                        <div class="widget-content widget-content-area">

                                    <div class="col-md-12" style="display: block;margin-left: auto; margin-right: auto;width:50%;">


                                    <img class="rounded"  src="{{asset('assets/dashboard/img/b.jpg')}}" alt="pic1">
                                    </div>


                                        <div class="row">
                                            <div class="col-xl-8 mx-auto mt-3">
                                                <blockquote class="blockquote">
                                                    <p class="d-inline">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                                        صنعت چاپ</p>
                                                </blockquote>
                                            </div>
                                        </div>



                                    <div class="custom-file-container" data-upload-id="mySecondImage">
                                        <label>بارگذاری (چندگانه اجازه می دهد) <a href="javascript:void(0)"
                                                                                  class="custom-file-container__image-clear"
                                                                                  title="Clear Image">x</a></label>
                                        <label class="custom-file-container__custom-file">
                                            <input type="file"
                                                   class="custom-file-container__custom-file__custom-file-input"
                                                   multiple="">
                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
                                            <span class="custom-file-container__custom-file__custom-file-control">انتخاب فایل...<span
                                                    class="custom-file-container__custom-file__custom-file-control__button"> Browse </span></span>
                                        </label>
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




