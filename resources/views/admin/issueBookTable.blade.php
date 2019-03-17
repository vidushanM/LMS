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
                    <h4 class="page-title">All Issued Books</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">View All Issued Books</li>
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
                <div class="col-md-4">
                    <!--<form class="form-horizontal" action="#" method="get">
                        -->


                </div>
                <div class="col-md-12">
                    <div class="card bg-secondary text-white">
                        <div class="card-header bg-cyan text-white">

                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    {{--<th scope="col" style="font-size: 12px">ID</th>--}}
                                    <th scope="col" style="font-size: 12px">Book Barcode</th>

                                    {{--<th scope="col" style="font-size: 12px">Member ID</th>--}}
                                    <th scope="col" style="font-size: 12px">Member ID</th>
                                    <th scope="col" style="font-size: 12px">Issued Date</th>
                                    {{--<th scope="col" style="font-size: 12px">Return Date</th>--}}
                                    <th scope="col" style="font-size: 12px"></th>
                                </tr>
                                </thead>
                                <tbody class="customtable">
                                @foreach($issue_books as $issueBook)
                                    <tr>
                                        {{--<td>{{$issueBook['id']}}</td>--}}
                                        <td>{{$issueBook['bookbarcode']}}</td>

                                        <td>{{$issueBook['issuememberid']}}</td>

                                        {{--<td>{{$issueBook['issuememberid']}}</td>--}}
                                        <td>{{$issueBook['created_at']}}</td>

                                        <td style="font-size: 12px">
                                            {{--<button type="button" class="btn btn-success btn-sm">Edit</button>--}}
                                            {{--<button type="button" class="btn btn-danger btn-sm">Delete</button>--}}
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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
    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->


    @include('layouts.footer')
@endsection
