<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SCALAR Management Systems</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/extra-libs/multicheck/multicheck.css')}}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">

    <!-- Custom CSS -->
    <link href="{{asset('assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/backend_css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/jquery-steps/steps.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <link href="{{asset('css/backend_css/fabochart.css')}}" rel="stylesheet">

    {{--/*Parakum CSS*/--}}
    {{--<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->--}}
    {{--<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->--}}
    {{--<!--[if lt IE 9]>--}}
        {{--<link rel="apple-touch-icon" sizes="60x60" href="../app-assets/img/ico/apple-icon-60.png">--}}
        {{--<link rel="apple-touch-icon" sizes="76x76" href="../app-assets/img/ico/apple-icon-76.png">--}}
        {{--<link rel="apple-touch-icon" sizes="120x120" href="../app-assets/img/ico/apple-icon-120.png">--}}
        {{--<link rel="apple-touch-icon" sizes="152x152" href="../app-assets/img/ico/apple-icon-152.png">--}}
        {{--<link rel="shortcut icon" type="image/x-icon" href="../app-assets/img/ico/favicon.ico">--}}
        {{--<link rel="shortcut icon" type="image/png" href="../app-assets/img/ico/favicon-32.png">--}}
        {{--<meta name="apple-mobile-web-app-capable" content="yes">--}}
        {{--<meta name="apple-touch-fullscreen" content="yes">--}}
        {{--<meta name="apple-mobile-web-app-status-bar-style" content="default">--}}
        {{--<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">--}}
        {{--<!-- BEGIN VENDOR CSS-->--}}
    {{--<!-- font icons-->--}}
    {{--<link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/feather/style.min.css')}}">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/simple-line-icons/style.css')}}">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/font-awesome/css/font-awesome.min.css')}}">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/perfect-scrollbar.min.css"')}}">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/prism.min.css')}}">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/pickadate/pickadate.css')}}">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">--}}
    {{--<!-- END VENDOR CSS-->--}}
    {{--<!-- BEGIN APEX CSS-->--}}
    {{--<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/app.css')}}">--}}
    {{--<!-- END APEX CSS-->--}}
    {{--<!-- BEGIN Page Level CSS-->--}}
    {{--<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/wizard.css')}}">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/file-uploaders/dropzone.css')}}">--}}
    {{--<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/toastr.css')}}">--}}
    {{--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>--}}
    {{--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>--}}
    {{--<script src="http://cdn.jsdelivr.net/jquery.flot/0.8.3/jquery.flot.min.js"></script>--}}

    {{--<![endif]-->--}}

    {{--<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->--}}
    {{--<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->--}}
    {{--<!--[if lt IE 9]>--}}
    {{--*Parakum CSS*/--}}


    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.flot/0.8.3/jquery.flot.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <![endif]-->
</head>
<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->


@yield('content')


<!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->

</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('assets/extra-libs/sparkline/sparkline.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('js/backend_js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('js/backend_js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('js/backend_js/custom.min.js')}}"></script>
<!--This page JavaScript -->
<script src="{{asset('js/backend_js/pages/dashboards/dashboard1.js')}}"></script>
<!-- Charts js Files -->
<script src="{{asset('assets/libs/flot/excanvas.js')}}"></script>
<script src="{{asset('assets/libs/flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/libs/flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('assets/libs/flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('assets/libs/flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
<script src="{{asset('assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('js/backend_js/pages/chart/chart-page-init.js')}}"></script>


<script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('assets/extra-libs/sparkline/sparkline.js')}}"></script>

<!-- this page js -->
<script src="{{asset('assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
<script src="{{asset('assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
<script src="{{asset('assets/extra-libs/DataTables/datatables.min.js')}}"></script>

{{--view-insert_student--}}
<script src="{{asset('assets/libs/jquery-steps/build/jquery.steps.min.js')}}"></script>
<script src="{{asset('assets/libs/jquery-validation/dist/jquery.validate.min.js')}}"></script>

<script src="{{asset('js/backend_js/jquery.countTo.js')}}"></script>
<script src="{{asset('js/backend_js/tests.js')}}"></script>


<script src="{{asset('assets/libs/chart/matrix.interface.js')}}"></script>
<script src="{{asset('assets/libs/chart/excanvas.min.js')}}"></script>
<script src="{{asset('assets/libs/flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/libs/flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('assets/libs/flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('assets/libs/flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
<script src="{{asset('assets/libs/chart/jquery.peity.min.js')}}"></script>
<script src="{{asset('assets/libs/chart/matrix.charts.js')}}"></script>
<script src="{{asset('assets/libs/chart/jquery.flot.pie.min.js')}}"></script>
<script src="{{asset('assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('assets/libs/chart/turning-series.js')}}"></script>
<script src="{{asset('js/backend_js/pages/chart/chart-page-init.js')}}"></script>
<script src="{{asset('js/backend_js/fabochart.js')}}"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    });
</script>

<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();


    // Basic Example with form
    var form = $("#example-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });
    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            alert("Submitted!");
        }
    });



    $('.timer').countTo();



</script>
<script>
    $('#editBookModal').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget)


        var bookname = button.data('bookname')
        var authorname = button.data('authorname')
        var isbn = button.data('isbn')
        var barcode = button.data('barcode')
        var bookId = button.data('id')

        var modal = $(this)


        modal.find('.modal-body #bookname').val(bookname);
        modal.find('.modal-body #author').val(authorname);
        modal.find('.modal-body #isbn').val(isbn);
        modal.find('.modal-body #barcode').val(barcode);
        modal.find('.modal-body #book_id').val(bookId);
    })

    $('#deleteConfirmationModal').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget)

        var sid = button.data('id')

        var modal = $(this)

        modal.find('.modal-footer #temp_sid').val(sid);

    })

    $('#acceptConfirmationModal').on('show.bs.modal', function(event){
        var button = $(event.relatedTarget)

        var sid = button.data('id')

        var modal = $(this)

        modal.find('.modal-footer #temp_sid').val(sid);

    });

    $(document).ready(function(){
        var sid = $("#sid input").val();
        var link = "/student/"+sid+"'>Edit";

        document.getElementById("link").setAttribute("href",link);
    })



</script>

<script>

    $('#book_id').change(function(){
        console.log("inside");
        var name = $("#book_id :selected").text();

        console.log(name);

        $("#bookname").val(name);

    });

</script>
<!-- ============================================================== -->
<!-- User Profile Modal -->
<!-- ============================================================== -->

@include('layouts.addNewBookModal')

<!-- ============================================================== -->
<!-- End User Profile Modal -->
<!-- ============================================================== -->

</body>
</html>
