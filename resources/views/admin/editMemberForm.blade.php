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
                    <h4 class="page-title">Edit Member</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Member</li>
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
                    <div class="card bg-dark text-white"">

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

                        <form class="" method="post" action="{{action('MemberController@update', $id)}}">

                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="PATCH">
                            <div class="card-body">
                                <div class="card-title">Member Details</div>
                                <div class="form-group row">
                                    <label for="memberFirstName" class="col-sm-3 text-right control-label col-form-label">Member First Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="firstname" name="firstname" value="{{$members->firstname}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="memberLastName" class="col-sm-3 text-right control-label col-form-label">Member Last Name </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="lastname" name="lastname" value="{{$members->lastname}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="memberId" class="col-sm-3 text-right control-label col-form-label">Member ID</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="memberid" name="memberid" value="{{$members->memberid}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="memberPhone" class="col-sm-3 text-right control-label col-form-label">Phone No</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="memberPhone" name="memberphone" value="{{$members->memberphone}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="memberEmail" class="col-sm-3 text-right control-label col-form-label">Member Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="memberemail"name="memberemail" value="{{$members->memberemail}}">
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