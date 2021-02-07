@extends('dashboard.layouts.app')
{{--@push('')--}}


{{--@endpush--}}

@include('dashboard.layouts.css-service')

@section('content')

    <div id="content" class="main-content">


        {{--        <div class="container">--}}
        <div class="container">


            <div class="row page-header">

                    <div class="widget-content widget-content-area">

                        <div class="sc_studi_smart_nav_content_inner">
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="vc_tta-container" data-vc-action="collapse">

                                                <div
                                                    class="vc_general vc_tta vc_tta-tabs vc_tta-color-white vc_tta-style-outline vc_tta-shape-rounded vc_tta-spacing-1 vc_tta-o-no-fill vc_tta-tabs-position-top vc_tta-controls-align-center wpb_animate_when_almost_visible wpb_top-to-bottom top-to-bottom wpb_start_animation animated">
                                                    <div class="vc_tta-panels-container">
                                                        <div class="vc_tta-panels">
                                                            <div class="vc_tta-panel vc_active"
                                                                 id="studi_categories"
                                                                 data-vc-content=".vc_tta-panel-body">

                                                                <div class="vc_tta-panel-body">
                                                                    <style>
                                                                        div#jpcarousel786 .owl-dot span {
                                                                            background-color: #c4c4c4 !important;
                                                                        }

                                                                        div#jpcarousel786 .owl-dot.active span {
                                                                            background-color: #1e73be !important;
                                                                        }

                                                                    </style>
                                                                    <div id="jpcarousel786"
                                                                         class="srow sc_cat_material_layout  owl-carousel owl-rtl owl-theme owl-loaded owl-drag">


                                                                        <div class="owl-stage-outer">
                                                                            <div class="owl-stage"
                                                                                 style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1356px;">
                                                                                <div class="owl-item active"
                                                                                     style="width: 226px;">
                                                                                    <div
                                                                                        class="sc_studi_cat_holder wpb_column vc_column_container vc_col-sm-3">
                                                                                        <a href="{{route('user-online-test')}}" class="sc_studi_card sc_studi_main_card"
                                                                                           style="--bg-color:#b8f9d3;--bg-color-light:#d6fff1;--text-color-hover: #4C5656;--box-shadow-color:#9adbb5;">
                                                                                            <div
                                                                                                class="sc_studi_overlay"></div>
                                                                                            <div
                                                                                                class="sc_studi_circle">

                                                                                                <!-- <img style="width:71px;width:76px;" src="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart.png"> -->
                                                                                                <img width="71"
                                                                                                     height="71"
                                                                                                     src="../wp-content/uploads/2020/03/line-chart-150x150.png"
                                                                                                     class="attachment-71x76 size-71x76"
                                                                                                     alt=""
                                                                                                     loading="lazy"
                                                                                                     srcset="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-150x150.png 150w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-300x300.png 300w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-400x400.png 400w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-120x120.png 120w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-220x220.png 220w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-100x100.png 100w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-64x64.png 64w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-460x460.png 460w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-65x65.png 65w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart.png 512w"
                                                                                                     sizes="(max-width: 71px) 100vw, 71px">
                                                                                            </div>
                                                                                            <div
                                                                                                class="sc_studi_cats_info">
                                                                                                <p>آزمون های آنلاین دوره ای</p>
                                                                                                <p style="font-size:14px;">
                                                                                                </p>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="owl-item active"
                                                                                     style="width: 226px;">
                                                                                    <div
                                                                                        class="sc_studi_cat_holder wpb_column vc_column_container vc_col-sm-3">
                                                                                        <a href="{{route('user-workshop-clips')}}"
                                                                                           class="sc_studi_card sc_studi_main_card"
                                                                                           style="--bg-color:#ffd861;--bg-color-light:#fff67f;--text-color-hover: #4C5656;--box-shadow-color:#e1ba43;">
                                                                                            <div
                                                                                                class="sc_studi_overlay"></div>
                                                                                            <divxamp
                                                                                                class="sc_studi_circle">

                                                                                                <!-- <img style="width:71px;width:76px;" src="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter.png"> -->
                                                                                                <img width="71"
                                                                                                     height="71"
                                                                                                     src="../wp-content/uploads/2020/03/painter-150x150.png"
                                                                                                     class="attachment-71x76 size-71x76"
                                                                                                     alt=""
                                                                                                     loading="lazy"
                                                                                                     srcset="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-150x150.png 150w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-300x300.png 300w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-400x400.png 400w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-120x120.png 120w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-220x220.png 220w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-100x100.png 100w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-64x64.png 64w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-460x460.png 460w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-65x65.png 65w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter.png 512w"
                                                                                                     sizes="(max-width: 71px) 100vw, 71px">
                                                                                            </divxamp>
                                                                                            <div
                                                                                                class="sc_studi_cats_info">
                                                                                                <p>کلیپ های کارگاه</p>
                                                                                                <p style="font-size:14px;">
                                                                                                </p>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="owl-item active"
                                                                                     style="width: 226px;">
                                                                                    <div
                                                                                        class="sc_studi_cat_holder wpb_column vc_column_container vc_col-sm-3">
                                                                                        <a href="{{route('user-workshop-sliders')}}"
                                                                                           class="sc_studi_card sc_studi_main_card"
                                                                                           style="--bg-color:#26a69a;--bg-color-light:#44c4b8;--text-color-hover: #4C5656;--box-shadow-color:#08887c;">
                                                                                            <div
                                                                                                class="sc_studi_overlay"></div>
                                                                                            <div
                                                                                                class="sc_studi_circle">

                                                                                                <!-- <img style="width:71px;width:76px;" src="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education.png"> -->
                                                                                                <img width="71"
                                                                                                     height="71"
                                                                                                     src="../wp-content/uploads/2020/03/online-education-150x150.png"
                                                                                                     class="attachment-71x76 size-71x76"
                                                                                                     alt=""
                                                                                                     loading="lazy"
                                                                                                     srcset="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-150x150.png 150w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-300x300.png 300w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-400x400.png 400w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-120x120.png 120w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-220x220.png 220w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-100x100.png 100w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-64x64.png 64w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-460x460.png 460w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-65x65.png 65w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education.png 512w"
                                                                                                     sizes="(max-width: 71px) 100vw, 71px">
                                                                                            </div>
                                                                                            <div
                                                                                                class="sc_studi_cats_info">
                                                                                                <p>اسلاید های کارگاه</p>
                                                                                                <p style="font-size:14px;">
                                                                                                </p>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="owl-item active"
                                                                                     style="width: 226px;">
                                                                                    <div
                                                                                        class="sc_studi_cat_holder wpb_column vc_column_container vc_col-sm-3">
                                                                                        <a href="{{route('user-workshop-questions')}}"
                                                                                           class="sc_studi_card sc_studi_main_card"
                                                                                           style="--bg-color:#8224e3;--bg-color-light:#a042ff;--text-color-hover: #4C5656;--box-shadow-color:#6406c5;">
                                                                                            <div
                                                                                                class="sc_studi_overlay"></div>
                                                                                            <div
                                                                                                class="sc_studi_circle">

                                                                                                <!-- <img style="width:71px;width:76px;" src="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/owl.png"> -->
                                                                                                <img width="71"
                                                                                                     height="71"
                                                                                                     src="../wp-content/uploads/2020/03/owl-150x150.png"
                                                                                                     class="attachment-71x76 size-71x76"
                                                                                                     alt=""
                                                                                                     loading="lazy"
                                                                                                     srcset="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/owl-150x150.png 150w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/owl-300x300.png 300w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/owl-400x400.png 400w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/owl-120x120.png 120w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/owl-220x220.png 220w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/owl-100x100.png 100w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/owl-64x64.png 64w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/owl-460x460.png 460w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/owl-65x65.png 65w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/owl.png 512w"
                                                                                                     sizes="(max-width: 71px) 100vw, 71px">
                                                                                            </div>
                                                                                            <div
                                                                                                class="sc_studi_cats_info">
                                                                                                <p>سوالات کارگاه</p>
                                                                                                <p style="font-size:14px;">
                                                                                                </p>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="owl-item active"
                                                                                     style="width: 226px;">
                                                                                    <div
                                                                                        class="sc_studi_cat_holder wpb_column vc_column_container vc_col-sm-3">
                                                                                        <a href="{{route('user-nutrition-programs')}}"
                                                                                           class="sc_studi_card sc_studi_main_card"
                                                                                           style="--bg-color:#ceb2fc;--bg-color-light:#ecd0ff;--text-color-hover: #4C5656;--box-shadow-color:#b094de;">
                                                                                            <div
                                                                                                class="sc_studi_overlay"></div>
                                                                                            <div
                                                                                                class="sc_studi_circle">

                                                                                                <!-- <img style="width:71px;width:76px;" src="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation.png"> -->
                                                                                                <img width="71"
                                                                                                     height="71"
                                                                                                     src="../wp-content/uploads/2020/03/presentation-150x150.png"
                                                                                                     class="attachment-71x76 size-71x76"
                                                                                                     alt=""
                                                                                                     loading="lazy"
                                                                                                     srcset="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-150x150.png 150w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-300x300.png 300w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-400x400.png 400w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-120x120.png 120w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-220x220.png 220w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-100x100.png 100w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-64x64.png 64w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-460x460.png 460w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-65x65.png 65w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation.png 512w"
                                                                                                     sizes="(max-width: 71px) 100vw, 71px">
                                                                                            </div>
                                                                                            <div
                                                                                                class="sc_studi_cats_info">
                                                                                                <p>برنامه تغذیه ای</p>
                                                                                                <p style="font-size:14px;">
                                                                                                </p>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <script>
                                                                        jQuery(document).ready(function () {
                                                                            jQuery('#jpcarousel786').addClass('owl-carousel owl-rtl owl-theme');
                                                                            jQuery('#jpcarousel786').owlCarousel({
                                                                                loop: false,
                                                                                margin: 0,
                                                                                stagePadding: 0,
                                                                                nav: false,
                                                                                dots: true,
                                                                                navText: ["<i class='fa fa-chevron-right'></i>", "<i class='fa fa-chevron-left'></i>"],
                                                                                responsive: {
                                                                                    0: {
                                                                                        items: 1,
                                                                                        nav: false,
                                                                                    },
                                                                                    768: {
                                                                                        items: 2
                                                                                    },
                                                                                    1000: {
                                                                                        items: 5
                                                                                    }
                                                                                }
                                                                            });
                                                                        });
                                                                    </script>

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
{{--دوم--}}

                        <div class="sc_studi_smart_nav_content_inner">
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="vc_tta-container" data-vc-action="collapse">

                                                <div
                                                    class="vc_general vc_tta vc_tta-tabs vc_tta-color-white vc_tta-style-outline vc_tta-shape-rounded vc_tta-spacing-1 vc_tta-o-no-fill vc_tta-tabs-position-top vc_tta-controls-align-center wpb_animate_when_almost_visible wpb_top-to-bottom top-to-bottom wpb_start_animation animated">
                                                    <div class="vc_tta-panels-container">
                                                        <div class="vc_tta-panels">
                                                            <div class="vc_tta-panel vc_active"
                                                                 id="studi_categories"
                                                                 data-vc-content=".vc_tta-panel-body">

                                                                <div class="vc_tta-panel-body">
                                                                    <style>
                                                                        div#jpcarousel786 .owl-dot span {
                                                                            background-color: #c4c4c4 !important;
                                                                        }

                                                                        div#jpcarousel786 .owl-dot.active span {
                                                                            background-color: #1e73be !important;
                                                                        }

                                                                    </style>
                                                                    <div id="jpcarousel786"
                                                                         class="srow sc_cat_material_layout  owl-carousel owl-rtl owl-theme owl-loaded owl-drag">


                                                                        <div class="owl-stage-outer">
                                                                            <div class="owl-stage"
                                                                                 style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1356px;">
                                                                                <div class="owl-item active"
                                                                                     style="width: 226px;">
                                                                                    <div
                                                                                        class="sc_studi_cat_holder wpb_column vc_column_container vc_col-sm-3">
                                                                                        <a href="{{route('user-study-programs')}}"
                                                                                           class="sc_studi_card sc_studi_main_card"
                                                                                           style="--bg-color:#b8f9d3;--bg-color-light:#d6fff1;--text-color-hover: #4C5656;--box-shadow-color:#9adbb5;">
                                                                                            <div
                                                                                                class="sc_studi_overlay"></div>
                                                                                            <div
                                                                                                class="sc_studi_circle">

                                                                                                <!-- <img style="width:71px;width:76px;" src="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart.png"> -->
                                                                                                <img width="71"
                                                                                                     height="71"
                                                                                                     src="../wp-content/uploads/2020/03/line-chart-150x150.png"
                                                                                                     class="attachment-71x76 size-71x76"
                                                                                                     alt=""
                                                                                                     loading="lazy"
                                                                                                     srcset="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-150x150.png 150w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-300x300.png 300w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-400x400.png 400w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-120x120.png 120w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-220x220.png 220w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-100x100.png 100w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-64x64.png 64w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-460x460.png 460w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-65x65.png 65w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart.png 512w"
                                                                                                     sizes="(max-width: 71px) 100vw, 71px">
                                                                                            </div>
                                                                                            <div
                                                                                                class="sc_studi_cats_info">
                                                                                                <p>تمرین های مشاوره ای</p>
                                                                                                <p style="font-size:14px;">
                                                                                                </p>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="owl-item active"
                                                                                     style="width: 226px;">
                                                                                    <div
                                                                                        class="sc_studi_cat_holder wpb_column vc_column_container vc_col-sm-3">
                                                                                        <a href="{{route('user-study-methods')}}"
                                                                                           class="sc_studi_card sc_studi_main_card"
                                                                                           style="--bg-color:#ffd861;--bg-color-light:#fff67f;--text-color-hover: #4C5656;--box-shadow-color:#e1ba43;">
                                                                                            <div
                                                                                                class="sc_studi_overlay"></div>
                                                                                            <divxamp
                                                                                                class="sc_studi_circle">

                                                                                                <!-- <img style="width:71px;width:76px;" src="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter.png"> -->
                                                                                                <img width="71"
                                                                                                     height="71"
                                                                                                     src="../wp-content/uploads/2020/03/painter-150x150.png"
                                                                                                     class="attachment-71x76 size-71x76"
                                                                                                     alt=""
                                                                                                     loading="lazy"
                                                                                                     srcset="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-150x150.png 150w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-300x300.png 300w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-400x400.png 400w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-120x120.png 120w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-220x220.png 220w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-100x100.png 100w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-64x64.png 64w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-460x460.png 460w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-65x65.png 65w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter.png 512w"
                                                                                                     sizes="(max-width: 71px) 100vw, 71px">
                                                                                            </divxamp>
                                                                                            <div
                                                                                                class="sc_studi_cats_info">
                                                                                                <p>روش مطالعه تکمیلی</p>
                                                                                                <p style="font-size:14px;">
                                                                                                </p>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="owl-item active"
                                                                                     style="width: 226px;">
                                                                                    <div
                                                                                        class="sc_studi_cat_holder wpb_column vc_column_container vc_col-sm-3">
                                                                                        <a href="{{route('user-further-infos')}}"
                                                                                           class="sc_studi_card sc_studi_main_card"
                                                                                           style="--bg-color:#26a69a;--bg-color-light:#44c4b8;--text-color-hover: #4C5656;--box-shadow-color:#08887c;">
                                                                                            <div
                                                                                                class="sc_studi_overlay"></div>
                                                                                            <div
                                                                                                class="sc_studi_circle">

                                                                                                <!-- <img style="width:71px;width:76px;" src="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education.png"> -->
                                                                                                <img width="71"
                                                                                                     height="71"
                                                                                                     src="../wp-content/uploads/2020/03/online-education-150x150.png"
                                                                                                     class="attachment-71x76 size-71x76"
                                                                                                     alt=""
                                                                                                     loading="lazy"
                                                                                                     srcset="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-150x150.png 150w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-300x300.png 300w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-400x400.png 400w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-120x120.png 120w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-220x220.png 220w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-100x100.png 100w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-64x64.png 64w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-460x460.png 460w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-65x65.png 65w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education.png 512w"
                                                                                                     sizes="(max-width: 71px) 100vw, 71px">
                                                                                            </div>
                                                                                            <div
                                                                                                class="sc_studi_cats_info">
                                                                                                <p>اطلاعات تکمیلی</p>
                                                                                                <p style="font-size:14px;">
                                                                                                </p>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <script>
                                                                        jQuery(document).ready(function () {
                                                                            jQuery('#jpcarousel786').addClass('owl-carousel owl-rtl owl-theme');
                                                                            jQuery('#jpcarousel786').owlCarousel({
                                                                                loop: false,
                                                                                margin: 0,
                                                                                stagePadding: 0,
                                                                                nav: false,
                                                                                dots: true,
                                                                                navText: ["<i class='fa fa-chevron-right'></i>", "<i class='fa fa-chevron-left'></i>"],
                                                                                responsive: {
                                                                                    0: {
                                                                                        items: 1,
                                                                                        nav: false,
                                                                                    },
                                                                                    768: {
                                                                                        items: 2
                                                                                    },
                                                                                    1000: {
                                                                                        items: 5
                                                                                    }
                                                                                }
                                                                            });
                                                                        });
                                                                    </script>

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

{{--سوم--}}
                        <div class="sc_studi_smart_nav_content_inner">
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="vc_tta-container" data-vc-action="collapse">

                                                <div
                                                    class="vc_general vc_tta vc_tta-tabs vc_tta-color-white vc_tta-style-outline vc_tta-shape-rounded vc_tta-spacing-1 vc_tta-o-no-fill vc_tta-tabs-position-top vc_tta-controls-align-center wpb_animate_when_almost_visible wpb_top-to-bottom top-to-bottom wpb_start_animation animated">
                                                    <div class="vc_tta-panels-container">
                                                        <div class="vc_tta-panels">
                                                            <div class="vc_tta-panel vc_active"
                                                                 id="studi_categories"
                                                                 data-vc-content=".vc_tta-panel-body">

                                                                <div class="vc_tta-panel-body">
                                                                    <style>
                                                                        div#jpcarousel786 .owl-dot span {
                                                                            background-color: #c4c4c4 !important;
                                                                        }

                                                                        div#jpcarousel786 .owl-dot.active span {
                                                                            background-color: #1e73be !important;
                                                                        }

                                                                    </style>
                                                                    <div id="jpcarousel786"
                                                                         class="srow sc_cat_material_layout  owl-carousel owl-rtl owl-theme owl-loaded owl-drag">


                                                                        <div class="owl-stage-outer">
                                                                            <div class="owl-stage"
                                                                                 style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1356px;">
                                                                                <div class="owl-item active"
                                                                                     style="width: 226px;">
                                                                                    <div
                                                                                        class="sc_studi_cat_holder wpb_column vc_column_container vc_col-sm-3">
                                                                                        <a href="{{route('user-parents-services')}}"
                                                                                           class="sc_studi_card sc_studi_main_card"
                                                                                           style="--bg-color:#b8f9d3;--bg-color-light:#d6fff1;--text-color-hover: #4C5656;--box-shadow-color:#9adbb5;">
                                                                                            <div
                                                                                                class="sc_studi_overlay"></div>
                                                                                            <div
                                                                                                class="sc_studi_circle">

                                                                                                <!-- <img style="width:71px;width:76px;" src="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart.png"> -->
                                                                                                <img width="71"
                                                                                                     height="71"
                                                                                                     src="../wp-content/uploads/2020/03/line-chart-150x150.png"
                                                                                                     class="attachment-71x76 size-71x76"
                                                                                                     alt=""
                                                                                                     loading="lazy"
                                                                                                     srcset="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-150x150.png 150w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-300x300.png 300w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-400x400.png 400w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-120x120.png 120w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-220x220.png 220w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-100x100.png 100w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-64x64.png 64w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-460x460.png 460w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart-65x65.png 65w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/line-chart.png 512w"
                                                                                                     sizes="(max-width: 71px) 100vw, 71px">
                                                                                            </div>
                                                                                            <div
                                                                                                class="sc_studi_cats_info">
                                                                                                <p>خدمات اولیا</p>
                                                                                                <p style="font-size:14px;">
                                                                                                </p>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="owl-item active"
                                                                                     style="width: 226px;">
                                                                                    <div
                                                                                        class="sc_studi_cat_holder wpb_column vc_column_container vc_col-sm-3">
                                                                                        <a href="{{route('user-activation-code')}}"
                                                                                           class="sc_studi_card sc_studi_main_card"
                                                                                           style="--bg-color:#ffd861;--bg-color-light:#fff67f;--text-color-hover: #4C5656;--box-shadow-color:#e1ba43;">
                                                                                            <div
                                                                                                class="sc_studi_overlay"></div>
                                                                                            <divxamp
                                                                                                class="sc_studi_circle">

                                                                                                <!-- <img style="width:71px;width:76px;" src="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter.png"> -->
                                                                                                <img width="71"
                                                                                                     height="71"
                                                                                                     src="../wp-content/uploads/2020/03/painter-150x150.png"
                                                                                                     class="attachment-71x76 size-71x76"
                                                                                                     alt=""
                                                                                                     loading="lazy"
                                                                                                     srcset="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-150x150.png 150w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-300x300.png 300w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-400x400.png 400w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-120x120.png 120w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-220x220.png 220w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-100x100.png 100w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-64x64.png 64w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-460x460.png 460w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter-65x65.png 65w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/painter.png 512w"
                                                                                                     sizes="(max-width: 71px) 100vw, 71px">
                                                                                            </divxamp>
                                                                                            <div
                                                                                                class="sc_studi_cats_info">
                                                                                                <p>دریافت کد فعالسازی</p>
                                                                                                <p style="font-size:14px;">
                                                                                                </p>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="owl-item active"
                                                                                     style="width: 226px;">
                                                                                    <div
                                                                                        class="sc_studi_cat_holder wpb_column vc_column_container vc_col-sm-3">
                                                                                        <a href="{{route('user-psychology-ques')}}"
                                                                                           class="sc_studi_card sc_studi_main_card"
                                                                                           style="--bg-color:#26a69a;--bg-color-light:#44c4b8;--text-color-hover: #4C5656;--box-shadow-color:#08887c;">
                                                                                            <div
                                                                                                class="sc_studi_overlay"></div>
                                                                                            <div
                                                                                                class="sc_studi_circle">

                                                                                                <!-- <img style="width:71px;width:76px;" src="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education.png"> -->
                                                                                                <img width="71"
                                                                                                     height="71"
                                                                                                     src="../wp-content/uploads/2020/03/online-education-150x150.png"
                                                                                                     class="attachment-71x76 size-71x76"
                                                                                                     alt=""
                                                                                                     loading="lazy"
                                                                                                     srcset="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-150x150.png 150w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-300x300.png 300w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-400x400.png 400w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-120x120.png 120w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-220x220.png 220w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-100x100.png 100w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-64x64.png 64w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-460x460.png 460w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education-65x65.png 65w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/online-education.png 512w"
                                                                                                     sizes="(max-width: 71px) 100vw, 71px">
                                                                                            </div>
                                                                                            <div
                                                                                                class="sc_studi_cats_info">
                                                                                                <p>پرسشنامه روانشناسی</p>
                                                                                                <p style="font-size:14px;">
                                                                                                </p>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="owl-item active"
                                                                                     style="width: 226px;">
                                                                                    <div
                                                                                        class="sc_studi_cat_holder wpb_column vc_column_container vc_col-sm-3">
                                                                                        <a href="{{route('user-consulting-resumes')}}"
                                                                                           class="sc_studi_card sc_studi_main_card"
                                                                                           style="--bg-color:#8224e3;--bg-color-light:#a042ff;--text-color-hover: #4C5656;--box-shadow-color:#6406c5;">
                                                                                            <div
                                                                                                class="sc_studi_overlay"></div>
                                                                                            <div
                                                                                                class="sc_studi_circle">

                                                                                                <!-- <img style="width:71px;width:76px;" src="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/owl.png"> -->
                                                                                                <img width="71"
                                                                                                     height="71"
                                                                                                     src="../wp-content/uploads/2020/03/owl-150x150.png"
                                                                                                     class="attachment-71x76 size-71x76"
                                                                                                     alt=""
                                                                                                     loading="lazy"
                                                                                                     srcset="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/owl-150x150.png 150w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/owl-300x300.png 300w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/owl-400x400.png 400w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/owl-120x120.png 120w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/owl-220x220.png 220w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/owl-100x100.png 100w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/owl-64x64.png 64w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/owl-460x460.png 460w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/owl-65x65.png 65w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/owl.png 512w"
                                                                                                     sizes="(max-width: 71px) 100vw, 71px">
                                                                                            </div>
                                                                                            <div
                                                                                                class="sc_studi_cats_info">
                                                                                                <p>کارنامه مشاوره های</p>
                                                                                                <p style="font-size:14px;">
                                                                                                </p>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="owl-item active"
                                                                                     style="width: 226px;">
                                                                                    <div
                                                                                        class="sc_studi_cat_holder wpb_column vc_column_container vc_col-sm-3">
                                                                                        <a href="{{route('user-nutrition-programs')}}"
                                                                                           class="sc_studi_card sc_studi_main_card"
                                                                                           style="--bg-color:#ceb2fc;--bg-color-light:#ecd0ff;--text-color-hover: #4C5656;--box-shadow-color:#b094de;">
                                                                                            <div
                                                                                                class="sc_studi_overlay"></div>
                                                                                            <div
                                                                                                class="sc_studi_circle">

                                                                                                <!-- <img style="width:71px;width:76px;" src="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation.png"> -->
                                                                                                <img width="71"
                                                                                                     height="71"
                                                                                                     src="../wp-content/uploads/2020/03/presentation-150x150.png"
                                                                                                     class="attachment-71x76 size-71x76"
                                                                                                     alt=""
                                                                                                     loading="lazy"
                                                                                                     srcset="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-150x150.png 150w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-300x300.png 300w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-400x400.png 400w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-120x120.png 120w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-220x220.png 220w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-100x100.png 100w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-64x64.png 64w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-460x460.png 460w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-65x65.png 65w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation.png 512w"
                                                                                                     sizes="(max-width: 71px) 100vw, 71px">
                                                                                            </div>
                                                                                            <div
                                                                                                class="sc_studi_cats_info">
                                                                                                <p>برنامه تغذیه ای</p>
                                                                                                <p style="font-size:14px;">
                                                                                                </p>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="owl-item active"
                                                                                 style="width: 226px;">
                                                                                <div
                                                                                    class="sc_studi_cat_holder wpb_column vc_column_container vc_col-sm-3">
                                                                                    <a href="{{route('user-study-programs')}}"
                                                                                       class="sc_studi_card sc_studi_main_card"
                                                                                       style="--bg-color:#ceb2fc;--bg-color-light:#ecd0ff;--text-color-hover: #4C5656;--box-shadow-color:#b094de;">
                                                                                        <div
                                                                                            class="sc_studi_overlay"></div>
                                                                                        <div
                                                                                            class="sc_studi_circle">

                                                                                            <!-- <img style="width:71px;width:76px;" src="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation.png"> -->
                                                                                            <img width="71"
                                                                                                 height="71"
                                                                                                 src="../wp-content/uploads/2020/03/presentation-150x150.png"
                                                                                                 class="attachment-71x76 size-71x76"
                                                                                                 alt=""
                                                                                                 loading="lazy"
                                                                                                 srcset="http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-150x150.png 150w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-300x300.png 300w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-400x400.png 400w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-120x120.png 120w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-220x220.png 220w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-100x100.png 100w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-64x64.png 64w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-460x460.png 460w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation-65x65.png 65w, http://studiare.pourshahabadi.ir/wp-content/uploads/2020/03/presentation.png 512w"
                                                                                                 sizes="(max-width: 71px) 100vw, 71px">
                                                                                        </div>
                                                                                        <div
                                                                                            class="sc_studi_cats_info">
                                                                                            <p>برنامه مطالعاتی</p>
                                                                                            <p style="font-size:14px;">
                                                                                            </p>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                    <script>
                                                                        jQuery(document).ready(function () {
                                                                            jQuery('#jpcarousel786').addClass('owl-carousel owl-rtl owl-theme');
                                                                            jQuery('#jpcarousel786').owlCarousel({
                                                                                loop: false,
                                                                                margin: 0,
                                                                                stagePadding: 0,
                                                                                nav: false,
                                                                                dots: true,
                                                                                navText: ["<i class='fa fa-chevron-right'></i>", "<i class='fa fa-chevron-left'></i>"],
                                                                                responsive: {
                                                                                    0: {
                                                                                        items: 1,
                                                                                        nav: false,
                                                                                    },
                                                                                    768: {
                                                                                        items: 2
                                                                                    },
                                                                                    1000: {
                                                                                        items: 5
                                                                                    }
                                                                                }
                                                                            });
                                                                        });
                                                                    </script>

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




                    </div>



@endsection










