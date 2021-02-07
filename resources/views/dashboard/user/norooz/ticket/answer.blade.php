@extends('dashboard.layouts.app')


@section('content')

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">

                </div>
            </div>

            <div class="row layout-spacing">
                <div class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>تیکت پشتیبانی</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <span class="float-left  mb-5">مشاهده تیکت</span>
                            <a class="btn btn-secondary  float-right mb-5">همه تیکت ها</a>
                            &nbsp
                            &nbsp
                            &nbsp
                            &nbsp
                            &nbsp
                            &nbsp
                            &nbsp
                            &nbsp
                            &nbsp
                            <hr>
                            <div class="row" style="border: 1px solid #bbbbbb ";  >


                                <div class="col-md-12 mb-5 mt-5">
                                    <span>#40 &nbsp تماس ورودی قطع است</span>

                                </div>

                                <div class="col-md-12">
                                <span>
                                    <img src="{{asset('assets/dashboard/img/b.jpg')}}" alt="" style="width: 50px;border-radius: 50px">

                                    <span class="bg-danger">برسام ندای دانش</span>

                                </span>
                                </div>

                              <div class="col-md-12 mt-5">

                                  <div class="table-responsive">
                                      <table class="table table-bordered table-hover table-striped mb-4">
                                          <thead>
                                          <tr>
                                              <th class="text-center">   وضعیت </th>
                                              <th class="text-center">  اولویت  </th>
                                              <th class="text-center">  دپارتمان  </th>
                                              <th class="text-center">   تاریخ </th>
                                              <th></th>
                                          </tr>

                                          <tr >
                                              <th class="text-center  bg-success"   style="color: #0e0e0e">  پاسخ داده شده  </th>
                                              <th  style="color: #0e0e0e; text-align: center">  بالا  </th>
                                              <th   style="color: #0e0e0e; text-align: center">   فنی </th>
                                              <th   style="color: #0e0e0e; text-align: center">  13:25  </th>

                                          </tr>

                                          </thead>

                                      </table>
                                  </div>
                                      <div class="col-md-12">



                                         <span>با سلام</span> <br>
                                         <span>تماس های ورودی قطع است</span><br>
                                         <span class="mb-5">ممنون</span><br>



                                      </div>







                              </div>
                            </div>
                        </div>

                                <div class="widget-content widget-content-area">
                                    <div id="toggleAccordion">
                                        <div class="card">
                                            <div class="card-header" id="headingOne1">
                                                <section class="mb-0 mt-0">
                                                    <div role="menu" class="collapsed" data-toggle="collapse" data-target="#defaultAccordionOne" aria-expanded="true" aria-controls="defaultAccordionOne">

                                                  <div class="text-center bg-success " >ارسال تیکت </div>

                                                        <div class="icons">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>

                                            <div id="defaultAccordionOne" class="collapse" aria-labelledby="headingOne1" data-parent="#toggleAccordion">
                                                <div class="card-body">

                                                    <textarea name="" id="" style="width: 100%"  rows="10"></textarea>



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


                                                    <div class="mt-5"><input type="checkbox"> &nbsp  ارسال تیکت</div>

                                                    <a href="" class="btn btn-success ">ارسال تیکت</a>



                                                    <div class="col-md-12   mt-5">

                                                    <div class="widget-content widget-content-area">
                                                        <ul class="list-group list-group-media">

                                                            <li class="list-group-item list-group-item-action active">
                                                                <div class="media">
                                                                    <div class="mr-3">
                                                                        <img alt="avatar" src="assets/img/90x90.jpg" class="img-fluid rounded-circle">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h6 class="tx-inverse">پشتیبانی </h6>


                                                                        <span class="float-right"> 1399-10-12</span>
                                                                    </div>
                                                                </div>
                                                            </li>


                                                            <li class="list-group-item list-group-item-action">
                                                                <div class="media">
                                                                    <div class="mr-3">
                                                                        <img alt="avatar" src="assets/img/90x90.jpg" class="img-fluid rounded-circle">
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h6 class="tx-inverse">داوطلب</h6>
                                                                        <span class="float-right"> 1399-10-12</span>

                                                                        <br>
<div class="col-md-12 mb-5">
                                                                        <span class="border-bottom">من مشکل دارم</span>

</div>
                                                                        <a href=""> <img src="{{asset('assets/dashboard/img/b.jpg')}}" alt="" style="width: 300px;"></a>




                                                                    </div>
                                                                </div>
                                                            </li>

                                                        </ul>


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


            </div>

@endsection

