@extends('layouts.app')

@section('content')

    @include('layouts.header')
    @include('layouts.sideBar')
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <?php $books = null ?>
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">View All Books</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">View All Books</li>
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
            <form action="{{url('searchBooks')}}" method="post" role="search">
                {{csrf_field()}}
                <div class="input-group">
                    <input type="text" class="form-control" name="q" placeholder="Search books">
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


                <div class="col-md-12">
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
                    <div class="card bg-secondary text-white">
                        <div class="card-header bg-cyan text-white">

                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    {{--<th scope="col" style="font-size: 12px">Book ID</th>--}}
                                    <th scope="col" style="font-size: 12px">Category</th>
                                    <th scope="col" style="font-size: 12px">Book Name</th>
                                    <th scope="col" style="font-size: 12px">Author</th>
                                    <th scope="col" style="font-size: 12px">Barcode</th>
                                    <th scope="col" style="font-size: 12px"></th>
                                    <th scope="col" style="font-size: 12px">Action</th>
                                    <th scope="col" style="font-size: 12px">Print</th>
                                </tr>
                                </thead>
                                <tbody class="customtable">
                                @foreach($boooks as $book)
                                    <tr>
                                        {{--<td>{{$book['id']}}</td>--}}
                                        <td>{{$book['isbn']}}</td>
                                        <td>{{$book['bookname']}}</td>
                                        <td>{{$book['authorname']}}</td>
                                        <td>{{$book['barcode']}}</td>

                                        <td>
                                            <a>
                                                <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#editBookModal"

                                                         data-id="{{$book['id']}}"
                                                         data-isbn="{{$book['isbn']}}"
                                                         data-bookname="{{$book['bookname']}}"
                                                         data-authorname="{{$book['authorname']}}"
                                                         data-barcode="{{$book['barcode']}}"

                                                         type="button">Edit</button>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{action('bookController@destroy', $book['id'])}}" method="post">
                                                {{csrf_field()}}
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{url('downloadPDF', $book['id'])}}" method="post">
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

    @if($books == null)
        @include('layouts.editBookModal')
    @endif



@endsection
