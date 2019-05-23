@extends('layouts.app')

@section('content')
    @include('layouts.header1')
    @include('layouts.sideBar1')


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
                                <li class="breadcrumb-item"><a href="{{url('/member')}}">Home</a></li>
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

        <div class="container-fluid">

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

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card text-white bg-dark mb-3 card-hover" style="height: 150px">
                                        <div class="row">
                                            <div class="col-md-4 card-body bg-orange">
                                                <center><i class="fa-6x far fa fa-table m-b-5"></i></center>
                                                <center><h5 class="card-title">Total Books</h5></center>
                                            </div>
                                            <div class="card-body"><br>
                                                <center><h5 style="font-size:40px;vertical-align: bottom" class="card-title timer" data-from="0" data-to="{{$available}}" data-speed="2000" data-fresh-interval="20">Rs.500,0000</h5></center>

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
                                                <center><h5 class="card-title">Requested Books</h5></center>
                                            </div>
                                            <div class="card-body"><br>
                                                <center><h5 style="font-size:40px;vertical-align: bottom" class="card-title timer" data-from="0" data-to="{{$pending}}" data-speed="2000" data-fresh-interval="20">Rs.500,0000</h5></center>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4" @if($issues!=0) data-toggle="modal" data-target="#books" @endif>
                                    <div class="card text-white bg-dark mb-3 card-hover" style="height: 150px">
                                        <div class="row">
                                            <div class="col-md-4 card-body bg-success">
                                                <center><i class="fa-6x far mdi mdi-message-alert"></i></center>
                                                <center><h5 class="card-title">Issued Books</h5></center>
                                            </div>
                                            <div class="card-body"><br>
                                                <center><h5 style="font-size:40px;vertical-align: bottom" class="card-title timer" data-from="0" data-to="{{$issues}}" data-speed="2000" data-fresh-interval="20">Rs.500,0000</h5></center>

                                            </div>
                                        </div>

                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="modal" tabindex="-1" role="dialog" id="books">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Issued Books</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <dl class="list-group">
                        @foreach($issuesBooks as $book)
                            @foreach($books as $bk)
                                @if($bk->barcode==$book->bookbarcode)
                                    <dt class="list-group-item">$bk->bookname</dt>
                                @endif
                            @endforeach
                                <dl class="list-group-item">$book-created_at</dl>
                        @endforeach

                    </dl>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection