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
                    <div class="statbox widget box box-shadow ">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>برنامه غذایی</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card  " style="width: 18rem;">
                                    <img class="card-img-top " src="{{asset('assets/dashboard/img/b.jpg')}}"
                                         alt="Card image cap" width="20%">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">

                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="{{asset('assets/dashboard/img/b.jpg')}}"
                                         alt="Card image cap" width="20%">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">

                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="{{asset('assets/dashboard/img/b.jpg')}}"
                                         alt="Card image cap" width="20%">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>


                </div>
            </div>

@endsection









