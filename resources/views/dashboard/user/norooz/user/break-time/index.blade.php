@extends('dashboard.layouts.app')

@section('content')

    <style>
        .container{
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 0;
            flex-wrap: wrap;
        }

        .container .box{
            position: relative;
            width: 320px;
            height: 400px;
            color: #fff;
            background: #111;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 30px;
            transition: .5s;
        }

        .container .box:hover{
            transform: translatey(-20px);
        }

        .container .box::before{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg,#ffbc00,#ff0058);
        }

        .container .box::after{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg,#ffbc00,#ff0058);
            filter: blur(30px);
            transition: 0.5s;
        }

        .container .box:hover:nth-child(1)::after{
            filter: blur(75px);
        }

        .container .box:hover:nth-child(2)::after{
            filter: blur(75px);
        }

        .container .box:hover:nth-child(3)::after{
            filter: blur(75px);
        }

        .container .box:nth-child(2)::before,.container .box:nth-child(2)::after{
            background: linear-gradient(315deg,#03a9f4,#ff0058);
        }

        .container .box:nth-child(3)::before,.container .box:nth-child(3)::after{
            background: linear-gradient(315deg,#4dff03,#00d0ff);
        }

        .container .box span{
            position: absolute;
            top: 6px;
            left: 6px;
            right: 6px;
            bottom: 6px;
            background: rgba(0,0,0,.6);
            z-index: 2;
        }

        .container .box span::before{
            content: '';
            width: 50%;
            height: 100%;
            top: 0;
            left: 0;
            position: absolute;
            background: rgba(255,255,255,.1);
            pointer-events: none;
        }

        .container .box .content{
            position: relative;
            z-index: 10;
            padding: 20px 40px;
        }

        .container .box .content h2{
            font-size: 2em;
            color: #fff;
            margin-bottom: 25px;
        }

        .container .box .content p{
            font-size: .95em;
            line-height: 1.4em;
            color: #fff;
            margin-bottom: 20px;
        }

        .container .box .content a{
            font-size: 1.1em;
            color: #111;
            background: #ddd;
            display: inline-block;
            text-decoration: none;
            text-align: center;
            line-height: 40px;
            width: 120px;
            height: 40px;
            backdrop-filter: blur(5px);
        }



    </style>






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
                                    <h4>زنگ تفریح</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">

                        <div class="alert alert-arrow-left alert-icon-left alert-light-primary mb-4" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" data-dismiss="alert" width="24" height="24"
                                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                     stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-bell">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                            <strong>هشدار!</strong> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.
                        </div>




                        <div class="row">


                                <div class="card component-card_2">
                                    <img src="{{asset('assets/dashboard/img/b.jpg')}}" class="card-img-top " alt="widget-card-2">
                                    <div class="card-body">
                                        <h5 class="card-title">لیست مطالب</h5>
                                        <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                        <a href="{{route('norooz-breakTime-text')}}" class="btn btn-primary "> بیشتر کاوش کنید </a>
                                    </div>
                                </div>


                                <div class="card component-card_2">
                                    <img src="{{asset('assets/dashboard/img/b.jpg')}}" class="card-img-top " alt="widget-card-2">
                                    <div class="card-body">
                                        <h5 class="card-title">لیست ویدیو</h5>
                                        <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                        <a href="{{route('norooz-breakTime-video')}}" class="btn btn-primary"> بیشتر کاوش کنید </a>
                                    </div>
                                </div>








                        </div>




                    </div>

                </div>

@endsection








