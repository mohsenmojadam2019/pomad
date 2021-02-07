
@extends('dashboard.layouts.app')
@section('content')

    <div id="content" class="main-content">

        <nav class="breadcrumb-two" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('user-home')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{route('user-educational-info.index')}}">تحصیلات</a></li>
                <li class="breadcrumb-item active"><a href="{{route('user-educational-info.update')}}">آپدیت تحصیلات </a></li>
            </ol>
        </nav>

        <div class="container">
            <div class="container">


                <div class="row page-header">
                    <div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>اطلاعات تحصیلی</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form method="post" action="{{route('user-educational-info.update',$user_education_info->id)}}"  class="needs-validation was-validated" novalidate="">

                                    @csrf
                                    @method('put')

                                    <div class="form-row">
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustomUsername">معدل کتبی دیپلم</label>
                                            <div class="input-group">

                                                <input name="average_Written_diplom" type="text"
                                                       class="form-control" id="validationCustomUsername"
                                                       placeholder="معدل کتبی دیپلم" aria-describedby="inputGroupPrepend"
                                                       required="" value="{{$user_education_info->average_Written_diplom}}">
                                                <div class="valid-feedback">
                                                    به نظر خوب میاد!
                                                </div>
                                                <div class="invalid-feedback">
                                                    لطفا وارد کنید!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom01">گروه آزمایشی</label>


                                            @foreach($educationalField as $field)

                                                <option value="{{$field->id}}" name="user_educational_field_id" selected>{{$field->title}}</option>

                                            @endforeach

                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>
                                        </div>

                                    </div>
                                    <div class="valid-feedback">
                                        به نظر خوب میاد!
                                    </div>
                                    <div class="invalid-feedback">
                                        لطفا وارد کنید!
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom03">سال اخذ مدرک دیپلم</label>
                                            <input value="{{$user_education_info->get_license_year}}" name="get_license_year" type="text"
                                                   class="form-control" id="validationCustom03" placeholder=" سال اخذ مدرک دیپلم"
                                                   required="" >
                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom04">سال پایان تحصیل </label>
                                            <input value="{{$user_education_info->end_education}}" name="end_education"
                                                   type="text" class="form-control" id="validationCustom04"
                                                   placeholder="سال پایان تحصیل"  required="" >
                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>

                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom03">مقطع</label>

                                            <select name="educational_grade_id" required="" class="form-control" id="validationCustom03" >

                                                @foreach($educationalGrade as $grade)
                                                    <option value="{{$grade->id}}" name="grade_id" selected>{{$grade->title}}</option>
                                                @endforeach

                                            </select>


                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom03">رشته دیپلم</label>

                                            <select name="educational_grade_id" class="form-control" id="validationCustom01" placeholder=" رشته دیپلم">
                                                @foreach($userDiplomaField as $DiplomaField)

                                                    <option value="{{$DiplomaField->id}}" name="user_educational_field_id" selected>{{$DiplomaField->title}}</option>

                                                @endforeach

                                            </select>

                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>
                                        </div>




                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom04">سال تحصیلی </label>
                                            <input value="{{$user_education_info->academic_year}}" name="academic_year"
                                                   type="text" class="form-control" id="validationCustom04"
                                                   placeholder="سال تحصیلی"  required="" >

                                            <div class="valid-feedback">
                                                به نظر خوب میاد!
                                            </div>
                                            <div class="invalid-feedback">
                                                لطفا وارد کنید!
                                            </div>
                                        </div>

                                    </div>




                                    <button class="btn btn-secondary mb-2">ویرایش</button>

                                </form>


                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>











@endsection









