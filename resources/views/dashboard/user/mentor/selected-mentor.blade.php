@extends('dashboard.layouts.app')
@section('content')


    {{--انتخاب مشاور--}}



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
                                                    aria-label="نام مشاور همراه : activate to sort column ascending"
                                                    style="width: 200px;text-align: center;font-size: 12px ">نام مشاوره
                                                    همراه
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                    rowspan="1" colspan="1"
                                                    aria-label="انتخاب مشاور همراه : activate to sort column ascending"
                                                    style="width: 200px;text-align: center;font-size: 12px ">انتخاب
                                                    مشاور همراه
                                                </th>


                                            </tr>
                                            </thead>

                                            <?php $k = 1?>
                                            <tbody>
                                            @foreach($special as $item)
                                            <tr>
                                                    <td style="text-align: center">{{$k++}}</td>
                                                    <td style="text-align: center">{{$item->user->userInfo->first_name}}</td>
                                                    <td style="text-align: center">{{$item->user->userInfo->last_name}}</td>
                                                    <td style="text-align: center">{{$item->educationalGroup->group}}</td>
                                                    <td style="text-align: center">{{$item->mentor ? $item->mentor->userInfo->first_name . ' ' . $item->mentor->userInfo->last_name  :''}}</td>
                                                    <form action="{{route('select-mentor-post')}}" method="post">
                                                        @csrf
                                                        <td>
                                                            <select name="mentor_id" class="custom-select">
                                                                <option value="all">مشاور را انتخاب کنید</option>
                                                                @foreach($special as $mentor)
                                                                    <option  value="{{$mentor->id}}">{{$mentor->user->userInfo->first_name}}</option>
                                                                @endforeach

                                                            </select>
                                                            <input type="hidden" name="id" value="{{$item->user_id}}">
                                                            <button type="submit" class="btn btn-secondary">انتخاب
                                                            </button>

                                                        </td>
                                                    </form>

                                            </tr>
                                            @endforeach

                                            </tbody>
                                            <tbody>


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









