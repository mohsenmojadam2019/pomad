@extends('dashboard.layouts.app')
@section('content')



    <div id="content" class="main-content ">

        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/user-address')}}"> مشاوره</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/user-address')}}">لیست داوطلبان غیر حضوری</a></li>
            </ol>
        </nav>


        <div class="row">
            <div class="col-md-4">
                <div class="row page-header">
                    <div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>مقطع</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="widget-content widget-content-area">
                                        <form action="" method="POST" class="needs-validation was-validated"
                                              novalidate="">

                                            @csrf


                                            <div class="form-row">
                                                <div class="col-md-12 mb-2">
                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-2">
                                                            <select class="custom-select" name="" id="">

                                                                <option value="all">غیرحضوری 1400</option>

                                                            </select>
                                                        </div>

                                                    </div>


                                                </div>


                                            </div>


                                            <button class="btn btn-secondary mb-2"
                                                    type="submit">انتخاب
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-8">
                <div class="row page-header">

                    <div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>لیست فیش داوطلبان غیر حضوری</h4>
                                    </div>
                                </div>
                            </div>


                                    <div class="widget-content widget-content-area br-6">
                                        <div class="table-responsive mb-4 mt-4">
                                            <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th>ردیف</th>
                                                    <th> آدرس </th>
                                                    <th> نام </th>
                                                    <th>نام خانوادگی</th>
                                                    <th> تاریخ  </th>
                                                    <th> رشته </th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>تهران </td>
                                                    <td>محسن</td>
                                                    <td>مجدم</td>
                                                    <td>1394/3/18</td>
                                                    <td> ریاضی</td>



                                                </tr>

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


{{----}}
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('assets/dashboard/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/app.js')}}"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{asset('assets/dashboard/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="{{asset('assets/dashboard/plugins/table/datatable/datatables.js')}}"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="{{asset('assets/dashboard/plugins/table/datatable/button-ext/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/plugins/table/datatable/button-ext/jszip.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/plugins/table/datatable/button-ext/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/plugins/table/datatable/button-ext/buttons.print.min.js')}}"></script>
    <script>
        $('#html5-extension').DataTable( {
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn' },
                    { extend: 'csv', className: 'btn' },
                    { extend: 'excel', className: 'btn' },
                    { extend: 'print', className: 'btn' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>' },
                "sInfo": "صفحه _PAGE_ از _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "جستجو کنید...",
                "sLengthMenu": "نتایج :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7
        } );
    </script>




@endsection




