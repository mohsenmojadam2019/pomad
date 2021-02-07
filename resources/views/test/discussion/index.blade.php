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
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4></h4>
                                </div>
                            </div>
                        </div>


                        <div class="widget-content widget-content-area">


                            @section('f')

                                <div class="d-flex justify-content-end mb-2"></div>

                                <a href="{{route('')}}"></a>

                                @foreach($discussions as $discussion)
                                    <div class="card">

                                        <div class="card-header">

                                            {{$discussion->title}}

                                        </div>

                                        <div class="card-body">

{!!  $discussion->content!!}

                                        </div>


                                    </div>


                        </div>


                        @endforeach



                        @endsection()


                    </div>

                </div>

            </div>

    {{$discussions->links()}}


@endsection









