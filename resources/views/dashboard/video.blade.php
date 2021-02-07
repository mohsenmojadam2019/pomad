@extends('dashboard.layouts.app')
@section('content')
    <style>
        .video{
            margin-top: 60px;position: relative;
            padding-bottom: 56.25%; /*16:9*/
            padding-top: 30px;
            height: 0;
            overflow: hidden;

        }
        @media only screen and (min-width: 1200px) {
            .video {
                text-align: center;
            }
        }

    </style>




    <div id="content" class="main-content" >
        <div class="col-md-12 ">

            <div  class=" layout-spacing controls  video" style="  ; ">
                <video controls src="http://pourdastmalchi.ir/publics/videos/kg4/kg4video.mp4"></video>
            </div>
        </div>
    </div>


@endsection



