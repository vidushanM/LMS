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
                    <h4 class="page-title">Issue A Book</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Issue a book</li>
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

                      <form class="" method="post" action="{{url('issue_books')}}">

                        {{csrf_field()}}

                        <div class="card-body">
                            <div class="card-title">Issue Details</div>
                            <div class="form-group row">
                                <label for="bookbarcode" class="col-sm-3 text-right control-label col-form-label">Book Barcode </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="bookbarcode" name="bookbarcode" placeholder="Barcode Here " autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="issuememberid" class="col-sm-3 text-right control-label col-form-label">Member ID</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="issuememberid" name="issuememberid" placeholder="Member ID Here">
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