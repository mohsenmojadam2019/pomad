<!DOCTYPE html>
<html lang="en">

{{--header starts here--}}
@include('dashboard.layouts.head')
{{--header ends here--}}
<body class="dashboard-analytics">

<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->

<!--  BEGIN NAVBAR  -->
@include('dashboard.layouts.navbar')
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay show"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
@include('dashboard.layouts.sidebar')
<!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->

{{--alert    --}}
<div class="align-content-lg-center">
@include('dashboard.layouts.alerts')
</div>
{{--alert--}}
    <!--  END CONTENT AREA  -->


    @yield('content')

</div>
<!-- END MAIN CONTAINER -->
@include('dashboard.layouts.footer')
</body>

</html>
