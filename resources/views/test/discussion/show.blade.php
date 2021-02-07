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


                            @extends('test.app')

                            @section('discussion')
                                @foreach($discussion->replies as $reply)

                                    <div class="card my-5">

                                        <div class="card-header">

                                            <div class="d-flex justify-content-between">

                                                <img src="{{Gravatar::src($reply->owner->email)}}" width="40%"
                                                     height="40%">

                                                <span>{{$reply->owner->name}}</span>


                                            </div>

                                            <div>

                                                @if(auth()->user()->id===$discussion->user_id)


                                                    <form
                                                        action="{{route('discussions.best-reply',['discussion'=>$discussion->slug,'reply'=>$reply->id])}}"
                                                        method=post>
                                                        @csrf
                                                        <button type="submit" class="btn btn-secondary ">mark</button>
                                                    </form>
                                                @endif

                                            </div>


                                        </div>

                                        <div class="card-body ">
                                            {!!$reply->content!!}

                                            @if($discussion->bestReply)

                                                <div class="card bg-success my-5">

                                                    <div class="card-header">

                                                        <div class="d-flex justify-content-between">
<div>
                                                            <img
                                                                src="{{Gravatar::src($discussion->bestReply->owner->email)}}"
                                                                width="40px" height="40px" alt="">
                                                            <strong>{{$discussion->bestReply->owner->name}}</strong>
                                                        </div>

                                                            <div>
<strong>best reply</strong>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="card card-body">
                                                        {!! $discussion->bestReply->content !!}


                                                    </div>

                                                </div>

                                            @endif

                                        </div>

                                    </div>
                                @endforeach
                                {{$discussion->replies()->paginate(3)->links()}}




                                <div class="card-body">

                                    <form action="{{route('replies.store',$discussion->slug)}}" method="post">
                                        @csrf


                                        <input type="hidden" name="content">

                                        <textarea name="" id="" cols="30" rows="10">



                                        </textarea>
                                        <button type="submit" class="btn btn-secondary"> add reply</button>

                                    </form>


                                </div>

                            @endsection

                        </div>

                    </div>

                </div>

@endsection









