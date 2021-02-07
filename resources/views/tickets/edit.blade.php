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

                                {{--<h1 class="h2">update tickets {{$tickets->id}}</h1>--}}

                                <form action="{{'tickets.update',$tickets->id}}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    @method('put')

                                    <div class="col-md-4">
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlInput2">درخواست</label>

                                            <select class="custom-select" name="select" id="">

                                                <option value=it">فنی</option>
                                                <option value="consultant">مشاور</option>


                                            </select>


                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlInput2">درخواست</label>
                                        <input type="text"
                                               class="form-control {{$errors->has('summary')?'is-invalid':''}}"
                                               id="exampleFormControlInput2" name="summary"
                                               placeholder="لطفا به مشکل من رسیدگی کنید" value="{{$ticket->summery}}">

                                        @if ($errors->has('summary'))
                                            <span class="form-text">
                                                <strong>{{$errors->first('summary')}}</strong>
                                            </span>
                                        @endif

                                    </div>


                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlTextarea1"> توضیحات</label>
                                        <textarea name="description" class="form-control"
                                                  id="exampleFormControlTextarea1"
                                                  rows="3" value="{{$ticket->description}}" {{$errors->has('description')?'is-invalid':''}}>

                                            {!! $ticket->description !!}

                                        </textarea>

                                        @if ($errors->has('description'))
                                            <span class="form-text">
                                                <strong>{{$errors->first('description')}}</strong>
                                            </span>
                                        @endif

                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlSelect1"> انتخاب کنید</label>
                                        <select name="status" class="form-control custom-select" id="status">
                                            <option value="open" {{$ticket->status=="open" ?'selected' :''}}>
                                                باز
                                            </option>
                                            <option value="progress" {{$ticket->status=="progress" ?'selected' :''}}>

                                                انتظار
                                            </option>
                                            <option value="closed" {{$ticket->status=="closed" ?'selected' :''}}>
                                                بسته
                                            </option>

                                        </select>
                                    </div>


                                    <section class="form-group mb-4 mt-3">
                                        <input type="file" name="image" class="form-control"  >
                                        <td><img src="{{asset("assets/dashboard/img/".$item->image)}}" width="50px" height="50px"></td>
                                    </section>


                                    <button type="submit" value="اپدیت"  class="mt-4 mb-4 btn btn-primary"></button>
                                    <a href="{{route('tickets.index')}}" type="button" value="برگشت"  class="mt-4 mb-4 btn btn-secondary"></a>
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


