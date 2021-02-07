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

                <div class="alert alert-icon-left alert-light-success mb-4" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" data-dismiss="alert" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-alert-triangle">
                        <path
                            d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                        <line x1="12" y1="9" x2="12" y2="13"></line>
                        <line x1="12" y1="17" x2="12" y2="17"></line>
                    </svg>
                    <strong>هشدار!</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.
                </div>


                <div class="row layout-top-spacing">


                    <div class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>ارسال تیکت</h4>
                                    </div>
                                </div>
                            </div>


                            <div class="widget-content widget-content-area">


                                <form enctype="multipart/form-data" action="{{route('tickets.store')}}"
                                      method="post">
                                    @csrf
                                    <div class="col-md-4">
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlInput2">درخواست</label>

                                            <select class="custom-select" name="select" id="">

                                                <option value="it">فنی</option>
                                                <option value="consultant">مشاور</option>
                                                <option value="other">متفرقه</option>

                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlInput2">عنوان</label>
                                        <input name="title" type="text"
                                               class="form-control {{$errors->has('title')?'is-invalid':''}}"
                                               value="{{old('title')}}" id="exampleFormControlInput2"
                                               placeholder="لطفا به مشکل من رسیدگی کنید">


                                        @if ($errors->has('title'))
                                            <span class="form-text">
                                                <strong>{{$errors->first('title')}}</strong>
                                            </span>
                                        @endif
                                    </div>


                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlTextarea1"> توضیحات</label>
                                        <textarea name="description" class="form-control"
                                                  id="exampleFormControlTextarea1"
                                                  rows="3"
                                                  {{$errors->has('description')?'is-invalid':''}} value="{{old('description')}}">

                                        </textarea>

                                        @if ($errors->has('description'))
                                            <span class="form-text">
                                                <strong>{{$errors->first('description')}}</strong>
                                            </span>
                                        @endif

                                    </div>

                                    <div class="form-group mb-4 mt-3">
                                        <label for="exampleFormControlFile1">ورودیی پرونده </label>
                                        <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlSelect1"> وضعیت</label>
                                        <select name="status" class="form-control custom-select" id="status">
                                            <option value="open">باز</option>
                                            <option value="progress">انتظار</option>
                                            <option value="closed">بسته</option>

                                        </select>
                                    </div>



                                    <button type="submit" class="mt-4 mb-4 btn btn-secondary">ثبت</button>

                                    <a href="{{route('tickets.index')}}" type="submit" class="mt-4 mb-4 btn btn-danger">برگشت</a>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>


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
                                        <h4>ارسال تیکت</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="infobox-3">
                                    <div class="info-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
                                            <path
                                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                        </svg>
                                    </div>
                                    <span class="info-heading mb-8 bg-secondary">پشتیبانی</span>
                                    <p class="info-text mt-4 mb-5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                        چاپ و با استفاده از طراحان گرافیک است</p>

                                    <img class="text-center" src="{{asset('assets/dashboard/img/b.jpg')}}" alt="">

                                    <div class="row mt-5 ">

                                        <a class="info-link bg-danger" href="#">پاسخ
                                            <svg style="transform: rotate(180deg)" xmlns="http://www.w3.org/2000/svg"
                                                 width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round" class="feather feather-arrow-right">
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                                <polyline points="12 5 19 12 12 19"></polyline>
                                            </svg>
                                        </a>

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


