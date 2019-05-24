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


        <div class="table-responsive">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col" style="font-size: 12px">Book Id</th>
                    <th scope="col" style="font-size: 12px">Book name</th>
                    <th scope="col" style="font-size: 12px">Request date</th>
                    <th scope="col" style="font-size: 12px">Status</th>
                    <th scope="col" style="font-size: 12px">Action</th>
                </tr>
                </thead>
                <tbody class="customtable">
                @foreach($req as $book)

                    <tr>
                        <td>{{$book->book_id}}</td>
                        <td>{{$book->book_name}}</td>
                        <td>{{$book->created_at}}</td>
                        <td>{{$book->status}}</td>
                        <td>
                            <form action="{{ route('request-book.update', $book->id) }}" method="POST">
                                {{ csrf_field() }}

                                {{ method_field('PUT') }}

                                <button type="submit" class="btn btn-primary btn-sm"  ><i class="fa fa-correct" aria-hidden="true" data-toggle="tooltip" title="Available"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
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
