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


                            <main class="container py-4">


                                <div class="row">


                                    <a href="{{route('discussions.create')}}" class="btn btn-secondary">Add Discussion</a>


                                    <div class="col-md-4">

                                        <ul class="list-group">

                                            @foreach($channels as $channel)

                                                <li class="list-group-item">

                                                    {{$channel->name}}

                                                </li>


                                            @endforeach
                                        </ul>


                                    </div>


                                    <div class="col-md-8">


                                    </div>


                                </div>


                            </main>


                        </div>

                    </div>

                </div>

@endsection









