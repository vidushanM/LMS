<?php
$memberId = $IssueBooks->issuememberid;

$issueMemberIDPrfix = substr($memberId,0,3);
$memberType = ($issueMemberIDPrfix == "STD") ? "student" : "staff";
//dd($memberType);
?>

@extends('layouts.app')

@section('content')
    @include('layouts.header')
    @include('layouts.sideBar')

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Return Book Confirmation</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Return Confirmation</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->



        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-dark">

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
                            {{--@if(bookbarcode != null)--}}
                        <form class="" method="post" action="{{url('confirmReturn')}}" >

                            {{csrf_field()}}
                            <input type="hidden" value="{{$id}}" name="issueBooks">
                            <input type="hidden" value="{{$fine}}" name="fine">
                            <div class="card-body text-white"">
                                <div class="card-title">Issue Details</div>
                                <div class="form-group row">
                                    <label for="bookbarcode" class="col-sm-3 text-right control-label col-form-label">Book Barcode </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  name="bookbarcode" value="{{$IssueBooks->bookbarcode}}" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="issuememberid" class="col-sm-3 text-right control-label col-form-label">Member ID</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="issuememberid" name="issuememberid" value="{{$IssueBooks->issuememberid}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="issuebookdate" class="col-sm-3 text-right control-label col-form-label">Issue Book Date</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="issuebookdate" name="issuebookdate" value="{{$IssueBooks->created_at}}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card text-white bg-dark mb-3 card-hover" style="height: 180px">
                                        <div class="row">
                                            <div class="col-md-4 card-body bg-purple">
                                                <center><i class="fa-3x far fa-money-bill-alt"></i></center>
                                                <center><h5 class="card-title">FINE</h5></center>
                                            </div>
                                            <div class="card-body">
                                                <center><h5 style="font-size:36px;vertical-align: bottom" class="card-title timer" data-from="0" data-to="{{$fine}}" data-speed="500" data-fresh-interval="20">50</h5></center>

                                            </div>
                                            <div class="card-body">
                                               <p><br><?php if ($memberType == "staff") {echo "* Fine not applicable for staff members";} ?></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            {{--@endif--}}



                            </div>
                            <div class="border-top">

                                <button type="submit" class="btn btn-primary btn-warning">Ok To Return</button>

                            </div>
                        </form>
                    </div>



                </div>

            </div>
            <!-- editor -->

            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->

        </div>
    </div>
    @include('layouts.footer')
@endsection