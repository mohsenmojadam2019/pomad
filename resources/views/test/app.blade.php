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


                            <div class="d-flex justify-content-end mb-2">

                                <a href="{{route('discussion.create')}}" class="btn btn-success">Add Discussion</a>


                            </div>


                            <div class="card">


                                <div class="card-header">Ddddd</div>
                                <div class="card-body">


                                </div>


                            </div>

                            <main class="container py-4">


                                <div class="row">


                                    <div class="col-md-4">

                                        @auth()
                                            <a href="{{route('discussions.create')}}" class="btn btn-secondary">Add
                                                Discussion</a>

                                        @else
                                            <a href="{{route('login')}}" class="btn btn-secondary">sign Discussion</a>


                                        @endauth


                                        <div class="card">

                                            <div class="card-header">
                                                Channel
                                            </div>

                                            <div class="card-body">

                                                <ul class="list-group">

                                                    @foreach($channels as $channel)

                                                        <li class="list-group-item">

                                                            {{$channel->name}}


                                                        </li>


                                                    @endforeach


                                                </ul>

                                            </div>

                                        </div>


                                    </div>


                                    <div class="col-md-8">

                                        @yield('discussion')

                                    </div>

                                </div>

                            </main>







@endsection









