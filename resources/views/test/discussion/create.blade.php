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


                            <div class="card-header">Add Discussion</div>

                            <div class="card-body">

                                <form action="{{route('discussion.store')}}">

                                    @csrf

                                    <div class="form-group">

                                        <label for="title">title</label>
                                        <input type="text" class="form-control" name="title" value="">


                                    </div>

                                    <div class="form-group">

                                        <label for="content">content</label>

                                        <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>

                                    </div>


                                    <div class="form-group">

                                        <label for="title">channel</label>

                                        <select name="channel" id="" class="form-control">

                                            <option value="1">laravel</option>
                                            <option value="1">vue</option>
                                            <option value="1">angular</option>

                                        </select>


                                    </div>

<button type="submit" class="btn btn-success" >create discussion</button>




                                </form>




                            </div>


                        </div>

                    </div>

                </div>

@endsection









