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
                    <h4 class="page-title">Manage Library</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Manage</li>
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

                        <form class="" method="post" action="{{action('librarySettingsController@update',$id)}}">
                            <input type="hidden" value="{{$librarySetting->$id}}" name="id">
                            {{method_field('patch')}}
                            {{csrf_field()}}

                            <div class="card-body text-white">
                                <div class="card-title"></div>
                                <div class="form-group row">
                                    <label for="noofdays" class="col-sm-3 text-right control-label col-form-label">No Of Days</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="noofdays" name="noofdays" value="{{$librarySetting->noofdays}}">
                                    </div>
                                </div>
                            </div>

                            <div class="card-body text-white">
                                <div class="card-title"></div>
                                <div class="form-group row">
                                    <label for="defaultfine" class="col-sm-3 text-right control-label col-form-label">Fine </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fine" name="defaultfine" value="{{$librarySetting->defaultfine}}">
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