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



            <div class="row">

                <div id="tabsWithIcons" class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>انتخاب منو</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area rounded-pills-icon">

                            <ul class="nav nav-pills mb-4 mt-3  justify-content-center" id="rounded-pills-icon-tab" role="tablist">

                                <li class="nav-item ml-2 mr-2">
                                    <a class="nav-link mb-2 text-center active" id="rounded-pills-icon-home-tab"
                                       data-toggle="pill" href="#rounded-pills-icon-1" role="tab" aria-controls="rounded-pills-icon-home" aria-selected="true">
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline> روز اول</a>
                                </li>

                                <li class="nav-item ml-2 mr-2">
                                    <a class="nav-link mb-2 text-center" id="rounded-pills-icon-profile-tab" data-toggle="pill"
                                       href="#rounded-pills-icon-2" role="tab" aria-controls="rounded-pills-icon-profile" aria-selected="false">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        روز دوم</a>
                                </li>

                                <li class="nav-item ml-2 mr-2">
                                    <a class="nav-link mb-2 text-center" id="rounded-pills-icon-contact-tab" data-toggle="pill"
                                       href="#rounded-pills-icon-3" role="tab" aria-controls="rounded-pills-icon-contact" aria-selected="false">
                                        روز سوم</a>
                                </li>

                                <li class="nav-item ml-2 mr-2">
                                    <a class="nav-link mb-2 text-center" id="rounded-pills-icon-contact-tab" data-toggle="pill"
                                       href="#rounded-pills-icon-4" role="tab" aria-controls="rounded-pills-icon-contact" aria-selected="false">
                                        روز چهارم</a>
                                </li>




                                <li class="nav-item ml-2 mr-2">
                                    <a class="nav-link mb-2 text-center" id="rounded-pills-icon-contact-tab" data-toggle="pill"
                                       href="#rounded-pills-icon-5" role="tab" aria-controls="rounded-pills-icon-contact" aria-selected="false">
                                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                        روز پنجم</a>
                                </li>

                                <li class="nav-item ml-2 mr-2">
                                    <a class="nav-link mb-2 text-center " id="rounded-pills-icon-home-tab" data-toggle="pill"
                                       href="#rounded-pills-icon-6" role="tab" aria-controls="rounded-pills-icon-home" aria-selected="true">
                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline> روز ششم</a>
                                </li>

                                <li class="nav-item ml-2 mr-2">
                                    <a class="nav-link mb-2 text-center" id="rounded-pills-icon-profile-tab" data-toggle="pill"
                                       href="#rounded-pills-icon-7" role="tab" aria-controls="rounded-pills-icon-profile" aria-selected="false">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        روز هفتم</a>
                                </li>

                                <li class="nav-item ml-2 mr-2">
                                    <a class="nav-link mb-2 text-center" id="rounded-pills-icon-contact-tab" data-toggle="pill"
                                       href="#rounded-pills-icon-8" role="tab" aria-controls="rounded-pills-icon-contact" aria-selected="false">
                                        روز هشتم</a>
                                </li>

                                <li class="nav-item ml-2 mr-2">
                                    <a class="nav-link mb-2 text-center" id="rounded-pills-icon-contact-tab" data-toggle="pill"
                                       href="#rounded-pills-icon-9" role="tab" aria-controls="rounded-pills-icon-contact" aria-selected="false">
                                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                        روز نهم</a>
                                </li>

                                <li class="nav-item ml-2 mr-2">
                                    <a class="nav-link mb-2 text-center" id="rounded-pills-icon-contact-tab" data-toggle="pill"
                                       href="#rounded-pills-icon-10" role="tab" aria-controls="rounded-pills-icon-contact" aria-selected="false">
                                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                         روز دهم</a>
                                </li>



                            </ul>
                            <div class="tab-content" id="rounded-pills-icon-tabContent">

                                <div class="tab-pane fade active show" id="rounded-pills-icon-1" role="tabpanel" aria-labelledby="rounded-pills-icon-home-tab">
                                    <p class="mb-4">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد.
                                    </p>

                                    <p>
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد.
                                    </p>
                                </div>

                                <div class="tab-pane fade" id="rounded-pills-icon-2" role="tabpanel" aria-labelledby="rounded-pills-icon-profile-tab">

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

                                <div class="tab-pane fade" id="rounded-pills-icon-3" role="tabpanel" aria-labelledby="rounded-pills-icon-contact-tab">
                                    <p class="dropcap  dc-outline-primary">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                </div>

                                <div class="tab-pane fade" id="rounded-pills-icon-4" role="tabpanel" aria-labelledby="rounded-pills-icon-settings-tab">
                                    <blockquote class="blockquote">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                                    </blockquote>
                                </div>



                                <div class="tab-pane fade" id="rounded-pills-icon-5" role="tabpanel" aria-labelledby="rounded-pills-icon-settings-tab">
                                    <blockquote class="blockquote">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                                    </blockquote>
                                </div>
                                <div class="tab-pane fade" id="rounded-pills-icon-6" role="tabpanel" aria-labelledby="rounded-pills-icon-settings-tab">
                                    <blockquote class="blockquote">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                                    </blockquote>
                                </div>
                                <div class="tab-pane fade" id="rounded-pills-icon-7" role="tabpanel" aria-labelledby="rounded-pills-icon-settings-tab">
                                    <blockquote class="blockquote">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                                    </blockquote>
                                </div>
                                <div class="tab-pane fade" id="rounded-pills-icon-8" role="tabpanel" aria-labelledby="rounded-pills-icon-settings-tab">
                                    <blockquote class="blockquote">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                                    </blockquote>
                                </div>
                                <div class="tab-pane fade" id="rounded-pills-icon-9" role="tabpanel" aria-labelledby="rounded-pills-icon-settings-tab">
                                    <blockquote class="blockquote">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد
                                    </blockquote>
                                </div>
                                <div class="tab-pane fade" id="rounded-pills-icon-10" role="tabpanel" aria-labelledby="rounded-pills-icon-settings-tab">
                                    <blockquote class="blockquote">
                                        لورم ایپسوم
                                    </blockquote>
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
