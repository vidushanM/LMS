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
                    <h4 class="page-title">All Return Books</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">View All Return Books</li>
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

                                    <th scope="col" style="font-size: 12px">Book Barcode</th>
                                    <th scope="col" style="font-size: 12px">Member ID</th>
                                    <th scope="col" style="font-size: 12px">Late Fine</th>
                                    <th scope="col" style="font-size: 12px">Returned Date</th>
                                    <th scope="col" style="font-size: 12px">Action</th>

                                    {{--<th scope="col" style="font-size: 12px"></th>--}}
                                </tr>
                                </thead>
                                <tbody class="customtable">
                                @foreach($return_books as $returnedbook)
                                    <tr>
                                        <td>{{$returnedbook ['bookbarcode']}}</td>
                                        <td>{{$returnedbook['issuememberid']}}</td>
                                        <td>{{$returnedbook['fine']}}</td>
                                        <td>{{$returnedbook['created_at']}}</td>
                                        <td>
                                            <form action="{{action('returnController@destroy', $returnedbook['bookbarcode'])}}" method="post">
                                                {{csrf_field()}}
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </td>
                                        {{--<td>{{$member['memberphone']}}</td>--}}
                                        {{--<td>{{$member['memberemail']}}</td>--}}

                                        {{--<td><a href="{{action('MemberController@edit', $member['id'])}}" class="btn btn-warning">Edit</a></td>--}}
                                        {{--<td style="font-size: 12px">--}}
                                        {{--<button type="button" class="btn btn-success btn-sm">Edit</button>--}}
                                        {{--<button type="button" class="btn btn-danger btn-sm">Delete</button>--}}
                                        {{--</td>--}}
                                        {{--<td>--}}
                                            {{--<form action="{{action('MemberController@destroy', $member['id'])}}" method="post">--}}
                                                {{--{{csrf_field()}}--}}
                                                {{--<input name="_method" type="hidden" value="DELETE">--}}
                                                {{--<button class="btn btn-danger" type="submit">Delete</button>--}}
                                            {{--</form>--}}
                                        {{--</td>--}}
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
