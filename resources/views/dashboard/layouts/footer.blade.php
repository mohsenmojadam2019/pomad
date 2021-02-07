<footer>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('assets/dashboard/js/libs/jquery-3.1.1.min.js')}}"></script>
    {{--    <script src="{{asset('assets/dashboard/bootstrap/js/popper.min.js')}}"></script>--}}
    <script src="{{asset('assets/dashboard/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/app.js')}}"></script>
    <script>
        $(document).ready(function () {
            App.init();
        });
    </script>
    <script src="{{asset('assets/dashboard/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{asset('assets/dashboard/plugins/apex/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/dashboard/dash_1.js')}}"></script>
    {{--<script src="{{asset('assets/dashboard/js/customform.js')}}"></script>--}}

    <script src="{{asset('assets/dashboard/js/scrollspyNav.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/forms/bootstrap_validation/bs_validation_script.js')}}"></script>
    <script src="{{asset('assets/dashboard/plugins/noUiSlider/nouislider.min.js')}}"></script>

    <script src="{{asset('assets/dashboard/plugins/datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/plugins/datepicker/bootstrap-datepicker.fa.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/plugins/noUiSlider/custom-nouiSlider.js')}}"></script>
    <script src="{{asset('assets/dashboard/plugins/bootstrap-range-Slider/bootstrap-rangeSlider.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/loader.js')}}"></script>


    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <!-- END PAGE LEVEL SCRIPTS -->


    <script>
        $(document).ready(function () {
            App.init();
        });
    </script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{asset('assets/dashboard/js/ie11fix/fn.fix-padStart.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/apps/notes.js')}}"></script>


    <!-- END GLOBAL MANDATORY STYLES -->
    <script src="{{asset('assets/dashboard/js/ie11fix/fn.fix-padStart.js')}}"></script>
    <script src="{{asset('assets/dashboard/plugins/editors/quill/quill.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/apps/todoList.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/components/ui-accordions.js')}}"></script>
    {{--sweetalert--}}
    <script src="{{asset('assets/dashboard/plugins/highlight/highlight.pack.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/scrollspyNav.js')}}"></script>

    <script src="{{asset('assets/dashboard/plugins/sweetalerts/sweetalert2.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/plugins/sweetalerts/custom-sweetalert.js')}}"></script>
    {{--table--}}
    <script src="{{asset('assets/dashboard/plugins/table/datatable/datatables.js')}}"></script>
    <script src="{{asset('assets/dashboard/plugins/table/datatable/button-ext/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/plugins/table/datatable/button-ext/jszip.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/plugins/table/datatable/button-ext/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/plugins/table/datatable/button-ext/buttons.print.min.js')}}"></script>


    <script src="{{asset('assets/dashboard/plugins/bootstrap-maxlength/bootstrap-maxlength.js')}}"></script>
    <script src="{{asset('assets/dashboard/plugins/bootstrap-maxlength/custom-bs-maxlength.js')}}"></script>


    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->


    <script src="{{asset('assets/dashboard/plugins/table/datatable/button-ext/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/plugins/table/datatable/button-ext/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/plugins/table/datatable/button-ext/jszip.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/plugins/table/datatable/button-ext/dataTables.buttons.min.js')}}"></script>
    <link href="{{asset('assets/dashboard/js/app.js')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/dashboard/js/popper.min.js')}}" rel="stylesheet" type="text/css"/>

    {{--datatable--}}
    <script src="{{asset('assets/dashboard/plugins/table/datatable/datatables.js')}}"></script>

    {{--tickets--}}
    <script src="{{asset('assets/dashboard/js/apps/mailbox-tickets.js')}}"></script>


    <script src="{{asset('assets/dashboard/plugins/lightbox/photoswipe.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/plugins/lightbox/photoswipe-ui-default.min.js')}}"></script>
    <script src="{{asset('assets/dashboard/plugins/lightbox/custom-photswipe.js')}}"></script>


    <script>


        $('#modal1').on('hidden.bs.modal', function (e) {
            // do something...
            $('#modal1 iframe').attr("src", $("#modal1 iframe").attr("src"));
        });

        $('#modal6').on('hidden.bs.modal', function (e) {
            // do something...
            $('#modal6 iframe').attr("src", $("#modal6 iframe").attr("src"));
        });

        $('#modal4').on('hidden.bs.modal', function (e) {
            // do something...
            $('#modal4 iframe').attr("src", $("#modal4 iframe").attr("src"));
        });

    </script>





    <script>
        $('#default-ordering').DataTable({

            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    {extend: 'copy', className: 'btn'},
                    {extend: 'csv', className: 'btn'},
                    {extend: 'excel', className: 'btn'},
                    {extend: 'print', className: 'btn'}
                ]
            },


            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>'
                },
                "sInfo": "صفحه _PAGE_ از _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "جستجو کنید...",
                "sLengthMenu": "نتایج :  _MENU_",
            },
            "order": [[3, "desc"]],
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7,
            drawCallback: function () {
                $('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered mb-5');
            }
        });
    </script>


    {{--datapicker--}}
    <script>
        $(document).ready(function () {
            $("#datepicker0").datepicker();
            $(".datepicker0").datepicker();

        });
    </script>
    {{--valid js--}}
    <script>
        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);


    </script>

    {{--modal-video--}}
    <script>
        $('#yt-video-link').click(function () {
            var src = 'https://www.youtube.com/embed/YE7VzlLtp-4';
            $('#videoMedia1').modal('show');
            $('<iframe>').attr({
                'src': src,
                'width': '560',
                'height': '315',
                'allow': 'encrypted-media'
            }).css('border', '0').appendTo('#videoMedia1 .video-container');
        });
        $('#vimeo-video-link').click(function () {
            var src = 'https://player.vimeo.com/video/1084537';
            $('#videoMedia2').modal('show');
            $('<iframe>').attr({
                'src': src,
                'width': '560',
                'height': '315',
                'allow': 'encrypted-media'
            }).css('border', '0').appendTo('#videoMedia2 .video-container');
        });
        $('#videoMedia1 button, #videoMedia2 button').click(function () {
            $('#videoMedia1 iframe, #videoMedia2 iframe').removeAttr('src');
        });
    </script>

    <script>

        $('.widget-content .mixin').on('click', function () {
            const toast = swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                padding: '2em'
            });

            toast({
                type: 'success',
                title: 'Signed in successfully',
                padding: '2em',
            })

        })

    </script>


    <script>

        $(selector).maxlength({
            placement: "top-left"
        });

    </script>

    {{--for tickets--}}
    <script>

        var secondUpload = new FileUploadWithPreview('mySecondImage')

    </script>

    <script>
        function markNotificationAsRead(notificationCount)
        {
            if (notificationCount !=='0'){
                $.get('/dashboard/norooz/markAsRead');
            }
        }

    </script>



</footer>
