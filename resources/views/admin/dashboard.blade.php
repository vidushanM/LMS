@extends('layouts.app')

@section('content')
    @include('layouts.header')
    @include('layouts.sideBar')
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">

        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Welcome to Library </h4>

                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
    @endif
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Sales Cards  -->
            <!-- ============================================================== -->
            <div class="row">

                <div class="col-md-3 col-lg-12 col-xlg-6">
                    <div class="card card-hover">
                        <div class="box bg-dark text-center">

                            <h1 class="text-white">SMART LIBRARY </h1>
                        </div>
                    </div>
                </div>


                <!-- Column -->



            </div>
            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            {{--<img src="backgroundImageLibrary.jpg" alt="Girl in a jacket" style="width:500px;height:600px;">--}}
            {{--<img src="{{URL::asset('/assets/images/background/libraryImage.jpg')}}" alt="Girl in a jacket" width="1230px" height="200px">--}}
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            {{--<div class="d-md-flex align-items-center">--}}
                                {{--<div>--}}
                                    {{--<h4 class="card-title">Library Analysis</h4>--}}
                                    {{--<h5 class="card-subtitle">Overview of the Library</h5>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="row">
                            <div class="col-lg-4">
                                <div class="card text-white bg-dark mb-3 card-hover" style="height: 150px">
                                    <div class="row">
                                        <div class="col-md-4 card-body bg-orange">
                                            <center><i class="fa-6x far fa fa-table m-b-5"></i></center>
                                            <center><h5 class="card-title">Total Books</h5></center>
                                        </div>
                                        <div class="card-body"><br>
                                            <center><h5 style="font-size:40px;vertical-align: bottom" class="card-title timer" data-from="0" data-to="{{$bookcount}}" data-speed="2000" data-fresh-interval="20">Rs.500,0000</h5></center>

                                        </div>
                                    </div>

                                </div>
                                <br>
                            </div>


                            <div class="col-md-4">
                                <div class="card text-white bg-dark mb-3 card-hover" style="height: 150px">
                                    <div class="row">
                                        <div class="col-md-4 card-body bg-success">
                                            <center><i class="fa-6x far mdi mdi-message-alert"></i></center>
                                            <center><h5 class="card-title">Issued Books</h5></center>
                                        </div>
                                        <div class="card-body"><br>
                                            <center><h5 style="font-size:40px;vertical-align: bottom" class="card-title timer" data-from="0" data-to="{{$issuecount}}" data-speed="20" data-fresh-interval="20">Rs.500,0000</h5></center>

                                        </div>
                                    </div>

                                </div>
                            </div>

                                <div class="col-md-4">
                                    <div class="card text-white bg-dark mb-3 card-hover" style="height: 150px">
                                        <div class="row">
                                            <div class="col-md-4 card-body bg-purple">
                                                <center><i class="fa-6x far mdi mdi-account-plus"></i></center>
                                                <center><h5 class="card-title">Total Users</h5></center>
                                            </div>
                                            <div class="card-body"><br>
                                                <center><h5 style="font-size:40px;vertical-align: bottom" class="card-title timer" data-from="0" data-to="{{$membercount}}" data-speed="2000" data-fresh-interval="20"></h5></center>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card text-white bg-dark mb-3 card-hover" style="height: 150px">
                                        <div class="row">
                                            <div class="col-md-4 card-body bg-secondary">
                                                <center><i class="fa-6x far fa fa-cart-plus m-b-5 "></i></center>
                                                <center><h7 class="card-title"> Returned Books</h7></center>
                                            </div>
                                            <div class="card-body"><br>
                                                <center><h5 style="font-size:40px;vertical-align: bottom" class="card-title timer" data-from="0" data-to="{{$returnbookcount}}" data-speed="2000" data-fresh-interval="20">Rs.500,0000</h5></center>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card text-white bg-dark mb-3 card-hover" style="height: 150px">
                                        <div class="row">
                                            <div class="col-md-4 card-body bg-danger">
                                                <center><i class="fa-6x far fa fa-globe m-b-5 "></i></center>
                                                <center><h5 class="card-title">Settings</h5></center>
                                            </div>
                                            <div class="card-body"><br>
                                                <center><h5 style="font-size:30px;vertical-align: bottom" class="card-title timer" data-from="0" data-to="{{$finrcountdays }}" data-speed="2000" data-fresh-interval="20">Rs.500,0000</h5></center>
                                                <center><h5 style="font-size:30px;vertical-align: bottom" class="card-title timer" data-from="0" data-to="{{$finefordays}}" data-speed="2000" data-fresh-interval="20">Rs.500,0000</h5></center>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card text-white bg-dark mb-3 card-hover" style="height: 150px">
                                        <div class="row">
                                            <div class="col-md-4 card-body bg-warning">
                                                <center><i class="fa-6x far fa-money-bill-alt"></i></center>
                                                <center><h5 class="card-title">Total Fine</h5></center>
                                            </div>
                                            <div class="card-body"><br>
                                                <center><h6 style="font-size:40px;vertical-align: bottom" class="card-title timer" data-from="0" data-to="{{$totalfine}}" data-speed="2000" data-fresh-interval="20">Rs.500,0000</h6></center>

                                            </div>

                                        </div>

                                    </div>
                                </div>


                            </div>
                            <div class="col-md-12">
                                <a href="downloadOverallReport">
                                <div class="  btn-light  card-hover" >
                                    <div class="row">
                                        <div class="col-md-12 card-body ">

                                            <p align="center">Download Report</p>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Recent comment and chats -->
            <!-- ============================================================== -->
        </div>
    @include('layouts.footer')
@endsection
