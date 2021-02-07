@extends('dashboard.layouts.app')
@section('content')




    <div id="content" class="main-content">
        <div class="col-md-12">
            <div class="container">

                <div class="page-header">
                    <div class="page-title">
                        <h3>خدمات عمومی</h3>
                    </div>
                </div>


                <div class="row">


                    <div id="card_2" class="col-lg-4 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>فیلم ها</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <div class="card component-card_2">
                                    <img src="{{asset('assets/dashboard/img/400x300.jpg')}}" class="card-img-top" alt="widget-card-2">
                                    <div class="card-body">
{{--                                        <h5 class="card-title">فیلم ها</h5>--}}
                                        <a href="#" class="btn btn-secondary mb-4 mr-2"> ورود به بخش فیلمها </a>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div id="card_2" class="col-lg-4 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>مطالب</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <div class="card component-card_2">
                                    <img src="{{asset('assets/dashboard/img/400x300.jpg')}}" class="card-img-top" alt="widget-card-2">
                                    <div class="card-body">
                                        {{--                                        <h5 class="card-title">فیلم ها</h5>--}}
                                        <a href="#" class="btn btn-secondary mb-4 mr-2"> ورود به بخش مطالب </a>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>


                    <div id="card_2" class="col-lg-4 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>فیلم ها</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <div class="card component-card_2">
                                    <img src="{{asset('assets/dashboard/img/400x300.jpg')}}" class="card-img-top" alt="widget-card-2">
                                    <div class="card-body">
                                        {{--                                        <h5 class="card-title">فیلم ها</h5>--}}
                                        <a href="#" class="btn btn-secondary mb-4 mr-2"> ورود به بخش مطالب </a>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

{{--ecardeon--}}


                    {{--                    --}}

                </div>
{{--                <div class="row">--}}
{{--                <div id="content" class="main-content">--}}
{{--                    <div class="col-md-12">--}}




{{--                        <div class="row layout-top-spacing">--}}
{{--                            <div class="col-lg-12 layout-spacing">--}}
{{--                                <div class="statbox widget box box-shadow">--}}
{{--                                    <div id="accordionBasic" class="widget-header">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">--}}
{{--                                                <h4>برنامه این هفته</h4>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="widget-content widget-content-area">--}}
{{--                                        <div id="toggleAccordion">--}}
{{--                                            <div class="card">--}}
{{--                                                <div class="card-header" id="headingOne1">--}}
{{--                                                    <section class="mb-0 mt-0">--}}
{{--                                                        <div role="menu" class="collapsed" data-toggle="collapse"--}}
{{--                                                             data-target="#defaultAccordionOne" aria-expanded="true"--}}
{{--                                                             aria-controls="defaultAccordionOne">--}}
{{--                                                            مورد #1--}}
{{--                                                            <div class="icons">--}}
{{--                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"--}}
{{--                                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"--}}
{{--                                                                     stroke-width="2" stroke-linecap="round"--}}
{{--                                                                     stroke-linejoin="round"--}}
{{--                                                                     class="feather feather-chevron-down">--}}
{{--                                                                    <polyline points="6 9 12 15 18 9"></polyline>--}}
{{--                                                                </svg>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </section>--}}
{{--                                                </div>--}}

{{--                                                <div id="defaultAccordionOne" class="collapse" aria-labelledby="headingOne1"--}}
{{--                                                     data-parent="#toggleAccordion">--}}
{{--                                                    <div class="card-body">--}}
{{--                                                        <p class="">--}}
{{--                                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با--}}
{{--                                                            استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در--}}
{{--                                                            ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز،--}}
{{--                                                            و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای--}}
{{--                                                            زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و--}}
{{--                                                            متخصصان را می طلبد.--}}
{{--                                                        </p>--}}

{{--                                                        <p class="">--}}
{{--                                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با--}}
{{--                                                            استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در--}}
{{--                                                            ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز،--}}
{{--                                                            و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای--}}
{{--                                                            زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و--}}
{{--                                                            متخصصان را می طلبد.--}}
{{--                                                        </p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="card">--}}
{{--                                                <div class="card-header" id="headingTwo1">--}}
{{--                                                    <section class="mb-0 mt-0">--}}
{{--                                                        <div role="menu" class="" data-toggle="collapse"--}}
{{--                                                             data-target="#defaultAccordionTwo" aria-expanded="false"--}}
{{--                                                             aria-controls="defaultAccordionTwo">--}}
{{--                                                            مورد #2--}}
{{--                                                            <div class="icons">--}}
{{--                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"--}}
{{--                                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"--}}
{{--                                                                     stroke-width="2" stroke-linecap="round"--}}
{{--                                                                     stroke-linejoin="round"--}}
{{--                                                                     class="feather feather-chevron-down">--}}
{{--                                                                    <polyline points="6 9 12 15 18 9"></polyline>--}}
{{--                                                                </svg>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </section>--}}
{{--                                                </div>--}}
{{--                                                <div id="defaultAccordionTwo" class="collapse show"--}}
{{--                                                     aria-labelledby="headingTwo1" data-parent="#toggleAccordion">--}}
{{--                                                    <div class="card-body">--}}
{{--                                                        <ul class="list-unstyled">--}}
{{--                                                            <li><a href="javascript:void(0);" class="">سیب</a></li>--}}
{{--                                                            <li><a href="javascript:void(0);" class="">پرتغال</a></li>--}}
{{--                                                            <li><a href="javascript:void(0);" class="">موز</a></li>--}}
{{--                                                            <li><a href="javascript:void(0);" class="">لیست</a></li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="card">--}}
{{--                                                <div class="card-header" id="headingThree1">--}}
{{--                                                    <section class="mb-0 mt-0">--}}
{{--                                                        <div role="menu" class="collapsed" data-toggle="collapse"--}}
{{--                                                             data-target="#defaultAccordionThree" aria-expanded="false"--}}
{{--                                                             aria-controls="defaultAccordionThree">--}}
{{--                                                            مورد #3--}}
{{--                                                            <div class="icons">--}}
{{--                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"--}}
{{--                                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"--}}
{{--                                                                     stroke-width="2" stroke-linecap="round"--}}
{{--                                                                     stroke-linejoin="round"--}}
{{--                                                                     class="feather feather-chevron-down">--}}
{{--                                                                    <polyline points="6 9 12 15 18 9"></polyline>--}}
{{--                                                                </svg>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </section>--}}
{{--                                                </div>--}}
{{--                                                <div id="defaultAccordionThree" class="collapse" aria-labelledby="headingThree1"--}}
{{--                                                     data-parent="#toggleAccordion">--}}
{{--                                                    <div class="card-body">--}}
{{--                                                        <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با--}}
{{--                                                            استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در--}}
{{--                                                            ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز،--}}
{{--                                                            و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای--}}
{{--                                                            زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و--}}
{{--                                                            متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان--}}
{{--                                                            رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد--}}
{{--                                                            کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه--}}
{{--                                                            راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل--}}
{{--                                                            حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود--}}
{{--                                                            طراحی اساسا مورد استفاده قرار گیرد.</p>--}}

{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}


{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}



{{--                    </div>--}}

{{--                </div>--}}
{{--                </div>--}}



            </div>
        </div>

    </div>











@endsection




