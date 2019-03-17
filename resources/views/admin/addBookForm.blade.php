@extends('layouts.app')
use App\books;

@section('content')
    @include('layouts.header')
    @include('layouts.sideBar')
    $books = books::all()->toArray();
    dd($books);


<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form class="form-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Book Details</h4>
                        <div class="form-group row">
                            <label for="bookName" class="col-sm-3 text-right control-label col-form-label">Book Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="bookName" placeholder="Book Name Here">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="isbn" class="col-sm-3 text-right control-label col-form-label">ISBN </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="isbn" placeholder="ISBN Here">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="author" class="col-sm-3 text-right control-label col-form-label">Author</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="author" placeholder="Author Name Here Here">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="barcode" class="col-sm-3 text-right control-label col-form-label">Barcode</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="barcode" placeholder="Barcode Here">
                            </div>
                        </div>


                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
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
    @endsection