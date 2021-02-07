@extends('dashboard.layouts.app')
@section('content')
    {{--ویرایش--}}
    <div id="content" class="main-content">

        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard/user-profile')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/educational-group')}}">مشاوره</a></li>
                <li class="breadcrumb-item active"><a href="{{url('dashboard/educational-group')}}">انتخاب مشاور
                        همراه</a>
                </li>
            </ol>
        </nav>


        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>انتخاب مشاور همراه</h3>
                </div>
            </div>

            <div class="row layout-top-spacing" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="table-responsive mb-4 mt-4">
                            <div id="default-ordering_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">


                                <div class="row">
                                    <div class="col-sm-12">

                                        <table id="default-ordering" class="table table-hover dataTable"
                                               style="width:100%" role="grid"
                                               aria-describedby="default-ordering_info">


                                            <thead>
                                            <tr role="row">
                                                <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                    rowspan="1" colspan="1"
                                                    aria-label="ردیف: activate to sort column ascending"
                                                    style="width: 50px;text-align: center;font-size: 12px "
                                                >ردیف
                                                </th>


                                                <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                    aria-label=" کد داوطلب : activate to sort column ascending"
                                                    style="width: 200px;text-align: center;font-size: 12px "> کد
                                                    داوطلب
                                                </th>

                                                <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                    aria-label=" نام : activate to sort column ascending"
                                                    style="width: 200px;text-align: center;font-size: 12px "> نام
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                    aria-label=" نام خانوادگی : activate to sort column ascending"
                                                    style="width: 200px;text-align: center;font-size: 12px "> نام
                                                    خانوادگی
                                                </th>


                                                <th class="sorting" tabindex="0" aria-controls="default-ordering"

                                                    aria-label="گروه : activate to sort column ascending"
                                                    style="width: 300px;text-align: center;font-size: 12px "> گروه
                                                </th>


                                                <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                    rowspan="1" colspan="1"
                                                    aria-label=" مشاور همراه : activate to sort column ascending"
                                                    style="width: 200px;text-align: center;font-size: 12px "> مشاوره
                                                    همراه
                                                </th>


                                            </tr>
                                            </thead>
                                            <tbody>


                                            <?php  $i = ''; ?>

                                            @foreach($mentors as  $mentor)

                                            <tr>
                                                <th rowspan="1" colspan="1"
                                                    style="text-align: center;font-size: 13px">  {{ ++$i }}

                                                </th>
                                                <th style="text-align: center;font-size: 13px"> 15739</th>
                                                <th rowspan="1" colspan="1" style="text-align: center;font-size: 13px"> {{$mentor ? $mentor->national_code: ''}}  </th>

                                                <th rowspan="1" colspan="1"
                                                    style="text-align: center;font-size: 13px"> {{$mentor ? $mentor->first_name: ''}}
                                                </th>


                                                <th width="200px" style="text-align: center;font-size: 13px"> {{$mentor ? $mentor->last_name: ''}}
                                                </th>
                                                <th>{{$educational_group ? $educational_group->name: ''}}</th>

                                                <th rowspan="1" colspan="1"
                                                    style="text-align: center;font-size: 13px"> {{$mentor ? $mentor->first_name: ''}}
                                                </th>

                                                <th>

                                                    <form action="">
                                                        <select name="" id="" class="form-control  custom-select">

                                                            <option value="all">انتخاب مشاور همراه</option>

                                                                @foreach($educational_group as $field)

                                                                    <option value="{{$field->id}}" name="user_educational_field_id" selected>{{$field->first_name}}</option>

                                                                @endforeach



                                                        </select>

                                                    </form>
                                                    <a href="" class="btn btn-secondary mt-2">انتخاب</a>

                                                </th>


                                            </tr>


                                            @endforeach
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





@endsection









