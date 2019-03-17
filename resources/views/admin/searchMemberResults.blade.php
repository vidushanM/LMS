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
                    <h4 class="page-title">Search Books</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Search Books</li>
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
                    @if(isset($details))
                        <p>search results for your book<b> {{$query}} </b> are: </p>
                        {{--<h2>sample details</h2>--}}

                </div>
                <div class="col-md-12">
                    <div class="card bg-secondary text-white">
                        <div class="card-header bg-cyan text-white">
                        </div>

                        <div class="table-responsive">

                            <table class="table table-striped">
                                <thead class="thead-light">
                                <tr>
                                    {{--<th scope="col" style="font-size: 12px">ID</th>--}}
                                    <th scope="col" style="font-size: 12px">First Name</th>

                                    {{--<th scope="col" style="font-size: 12px">Member ID</th>--}}
                                    <th scope="col" style="font-size: 12px">Last Name</th>
                                    <th scope="col" style="font-size: 12px">Member ID</th>
                                    <th scope="col" style="font-size: 12px">Email</th>
                                    <th scope="col" style="font-size: 12px">Phone</th>
                                    {{--<th scope="col" style="font-size: 12px">Return Date</th>--}}
                                    <th scope="col" style="font-size: 12px"></th>
                                </tr>
                                </thead>
                                <tbody class="customtable">
                                @foreach($details as $searchMemberResult)
                                    <tr>
                                        {{--<td>{{$issueBook['id']}}</td>--}}
                                        <th>{{$searchMemberResult->firstname}}</th>

                                        <th>{{$searchMemberResult->lastname}}</th>

                                        {{--<td>{{$issueBook['issuememberid']}}</td>--}}
                                        <th>{{$searchMemberResult->memberid}}</th>
                                        <th>{{$searchMemberResult->memberemail}}</th>
                                        <th>{{$searchMemberResult->memberphone}}</th>

                                        <td style="font-size: 12px">
                                            {{--<button type="button" class="btn btn-success btn-sm">Edit</button>--}}
                                            {{--<button type="button" class="btn btn-danger btn-sm">Delete</button>--}}
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                            @elseif(isset($message))
                                <p>{{$message}}</p>
                            @endif
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
