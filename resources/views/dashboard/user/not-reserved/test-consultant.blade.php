@extends('dashboard.layouts.app')
@section('content')
{{--دومی--}}
    <div id="content" class="main-content">

        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/educational-group')}}">مشاوره</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/educational-group')}}">نتیجه تست مشاوران</a>
                </li>
            </ol>
        </nav>


        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>نتیجه تست مشاوران</h3>
                </div>
            </div>

            <div class="row layout-top-spacing" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="table-responsive mb-4 mt-4">
                            <div id="default-ordering_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">


                                <div class="row">
                                    <div class="col-sm-12">


                                        <div class="col-md-12">

                                            <form method="post" action="">

                                                @csrf

                                                <div class="form-row mb-4">
                                                    <div class="form-group col-md-3">

                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <select id="inputState" class="form-control">
                                                            <option selected="">انتخاب کنید...</option>
                                                            <option>...</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <a type="submit" class="btn btn-secondary" >انتخاب</a>
                                                    </div>
                                                </div>






                                            </form>
                                        </div>








                                        <div class="table-responsive">

                                            <table id="check_val" class="table table-striped table-bordered">

                                                <thead>

                                                <tr id="">

                                                    <th style="text-align: center;padding: 0!important;vertical-align: middle;">ردیف</th>

                                                    <th style="text-align: center;padding: 0!important;vertical-align: middle;">نام ونام خانوادگی</th>

                                                    <th style="text-align: center;padding: 0!important;vertical-align: middle;">کد ملی</th>
                                                    <th style="text-align: center;padding: 0!important;vertical-align: middle;">مدرسه</th>



                                                    <th style="text-align: center;padding: 0!important;vertical-align: middle;">عامل تواضع<br><table class="table table-bordered" style="margin: 0;text-align: center;">
                                                            <thead><tr><th style="text-align: center;font-size: 0.7em;">صمیمیت</th><th style="text-align: center;font-size: 0.7em;font-size: 0.7em;">انصاف</th><th style="text-align: center;font-size: 0.7em;width: 100px;">اجتناب از حرص</th><th style="text-align: center;font-size: 0.7em;">حجب و حیا</th></tr></thead>
                                                        </table></th>



                                                    <th style="text-align: center;padding: 0!important;vertical-align: middle;">عامل دلپذیری<br><table class="table table-bordered" style="margin: 0;text-align: center;">

                                                            <thead><tr><th style="text-align: center;font-size: 0.7em;">بخشش</th><th style="text-align: center;font-size: 0.7em;font-size: 0.7em;">ملایمت</th><th style="text-align: center;font-size: 0.7em;">انعطاف پذیری</th><th style="text-align: center;font-size: 0.7em;">صبر و شکیبایی</th></tr></thead>

                                                        </table></th>



                                                    <th style="text-align: center;padding: 0!important;vertical-align: middle;">عامل هیجان پذیری<br><table class="table table-bordered" style="margin: 0;text-align: center;">

                                                            <thead><tr><th style="text-align: center;font-size: 0.7em;">ترس</th><th style="text-align: center;font-size: 0.7em;font-size: 0.7em;">اضطراب</th><th style="text-align: center;font-size: 0.7em;">وابستگی</th><th style="text-align: center;font-size: 0.7em;">احساساتی بودن</th></tr></thead>

                                                        </table></th>



                                                    <th style="text-align: center;padding: 0!important;vertical-align: middle;">عامل وظیفه شناسی<br><table class="table table-bordered" style="margin: 0;text-align: center;">

                                                            <thead><tr><th style="text-align: center;font-size: 0.7em;">سازمان دهی</th><th style="text-align: center;font-size: 0.7em;font-size: 0.7em;">سخت کوشی</th><th style="text-align: center;font-size: 0.7em;">کمال گرایی</th><th style="text-align: center;font-size: 0.7em;">دوراندیشی</th></tr></thead>

                                                        </table></th>



                                                    <th style="text-align: center;padding: 0!important;vertical-align: middle;">عامل برونگرایی<br><table class="table table-bordered" style="margin: 0;text-align: center;">

                                                            <thead><tr><th style="text-align: center;font-size: 0.7em;width: 100px;">عزت نفس اجتماعی</th><th style="text-align: center;font-size: 0.7em;">جسارت اجتماعی</th><th style="text-align: center;font-size: 0.7em;">معاشرت پذیری</th><th style="text-align: center;font-size: 0.7em;">سرزندگی</th></tr></thead>

                                                        </table></th>



                                                    <th style="text-align: center;padding: 0!important;vertical-align: middle;">عامل گشودگی به تجربه<br><table class="table table-bordered" style="margin: 0;text-align: center;">

                                                            <thead><tr><th style="text-align: center;font-size: 0.7em;">درک زیبایی</th><th style="text-align: center;font-size: 0.7em;">کنجکاوی</th><th style="text-align: center;font-size: 0.7em;">خلاقیت</th><th style="text-align: center;font-size: 0.7em;">تجدد</th></tr></thead>

                                                        </table></th>





                                                    <th style="text-align: center;padding: 0!important;vertical-align: middle;">نوع دوستی</th>

                                                </tr>

                                                </thead>

                                                <tbody>








                                                </tbody>

                                            </table>









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









