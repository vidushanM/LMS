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
                    <h4 class="page-title">All Members</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">View All Members</li>
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

            <form action="{{url('searchMembers')}}" method="post" role="search">
                {{csrf_field()}}
                <div class="input-group">
                    {{--<div class="col-md-6">--}}
                    <input type="text" class="form-control" name="q" placeholder="Search Members">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>

                </div>
            </form>
            <br>
            <br>
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
                                    <th scope="col" style="font-size: 12px">First Name</th>
                                    <th scope="col" style="font-size: 12px">Last Name</th>
                                    <th scope="col" style="font-size: 12px">Member ID</th>
                                    <th scope="col" style="font-size: 12px">Phone Number</th>
                                    <th scope="col" style="font-size: 12px">Email</th>
                                    <th scope="col" style="font-size: 12px">Action</th>
                                    <th scope="col" style="font-size: 12px"></th>
                                    <th scope="col" style="font-size: 12px">Print</th>
                                </tr>
                                </thead>
                                <tbody class="customtable">
                                @foreach($members as $member)
                                    <tr>
                                        {{--<td>{{$member['id']}}</td>--}}
                                        <td>{{$member['firstname']}}</td>
                                        <td>{{$member['lastname']}}</td>
                                        <td>{{$member['memberid']}}</td>
                                        <td>{{$member['memberphone']}}</td>
                                        <td>{{$member['memberemail']}}</td>

                                        <td><a href="{{action('MemberController@edit', $member['id'])}}" class="btn btn-warning">Edit</a></td>
                                        {{--<td style="font-size: 12px">--}}
                                            {{--<button type="button" class="btn btn-success btn-sm">Edit</button>--}}
                                            {{--<button type="button" class="btn btn-danger btn-sm">Delete</button>--}}
                                        {{--</td>--}}
                                        <td>
                                            <form action="{{action('MemberController@destroy', $member['id'])}}" method="post">
                                                {{csrf_field()}}
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{url('downloadmemberPDF', $member['id'])}}" method="post">
                                                {{csrf_field()}}

                                                <button class="btn btn-orange" type="submit">Barcode</button>
                                            </form>
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
