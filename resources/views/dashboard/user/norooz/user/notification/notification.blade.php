@extends('dashboard.layouts.app')
@section('content')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>اعلانات</h3>
                </div>
            </div>

            <div class="row app-notes layout-top-spacing" id="cancel-row">
                <div class="col-lg-12">
                    <div class="app-hamburger-container">
                        <div class="hamburger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-menu chat-menu d-xl-none">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                        </div>
                    </div>

                    <div class="app-container">

                        <div class="app-note-container">

                            @if(isset($userEducationalInfo))
                                @foreach($userEducationalInfo as $item)
                                    <div id="ct" class="note-container note-grid">
                                        <div class="note-item all-notes note-personal">

                                            <div class="note-inner-content">
                                                <form action="{{route('user-workshop-reserve')}}" method="post"                                                  class="note-content">

                                                    @csrf
                                                    <input type="hidden" name="workshop_id" value="{{$item['id']}}">
                                                    <p class="note-title"
                                                       data-noteTitle="رزرو کلاس انلاین">{{$item['title']}}</p>
                                                    <p class="meta-time">1399/09/24</p>
                                                    <div class="note-description-content">
                                                        <p class="note-description"
                                                           data-noteDescription="در صورت تمایل به شرکت در کلاس انلاین کلیک نمایید">
                                                            در صورت تمایل به شرکت در کلاس انلاین کلیک نمایید</p>
                                                    </div>

                                                    <div class="widget-content"></div>
                                                    <div class=" text-center">
                                                        <button type="submit" class="btn btn-secondary mb-2  mixin"> کلیک
                                                        </button>


                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                        @endforeach
                                        @endif
                                        {{--                       @endif--}}
                                    </div>

                        </div>

                    </div>

                </div>


            </div>
        </div>

    </div>





    <!--  END CONTENT AREA  -->
@endsection


