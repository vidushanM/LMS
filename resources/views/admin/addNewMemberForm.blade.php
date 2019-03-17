

<?php
use App\Member;

$all_members = Member::all() ->toArray();
$last_member = end($all_members);
$lastMemberId = $last_member['memberid'];
$lastMemberIdNumeric = substr($lastMemberId,3,4);
//dd($lastMemberIdNumeric);
//dd($last_book["barcode"] + 3);
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
                    <h4 class="page-title">Add Member</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add New Member</li>
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

                    <form class="" method="post" action="{{url('members')}}">

                        {{csrf_field()}}

                        <div class="card-body text-white"">
                            <div class="card-title">Member Details</div>
                            <div class="form-group row">
                                <label for="memberFirstName" class="col-sm-3 text-right control-label col-form-label">Member First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Member First Name Here">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="memberLastName" class="col-sm-3 text-right control-label col-form-label">Member Last Name </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Member Last Name Here">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="memberId" class="col-sm-3 text-right control-label col-form-label">Member ID</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo $lastMemberIdNumeric + 1 ?>" class="form-control" id="memberid" name="memberid" placeholder="Member ID Here" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="memberType" class="col-sm-3 text-right control-label col-form-label">Member Type</label>
                                <div class="col-sm-9">
                                    <input type="radio" name="memberType" value="student"> Student<br>
                                    <input type="radio" name="memberType" value="staff"> Staff<br>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="memberPhone" class="col-sm-3 text-right control-label col-form-label">Phone No</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="memberPhone" name="memberphone" placeholder="Phone Here">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="memberEmail" class="col-sm-3 text-right control-label col-form-label">Member Email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="memberemail"name="memberemail" placeholder="Email Here">
                                </div>
                            </div>


                        </div>
                        <div class="border-top">

                                <button type="submit" class="btn btn-primary btn-warning">Submit</button>

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