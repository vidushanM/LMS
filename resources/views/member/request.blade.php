@extends('layouts.app')

@section('content')
    @include('layouts.header1')
    @include('layouts.sideBar1')

    <div class="page-wrapper">

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

        <div class="container-fluid">

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
                        <div class="card-header  text-white">
                            <br>
                            <button class="btn btn-success" data-toggle="modal" data-target="#Request">Request</button>
                            <br>
                        </div>
                        <div class="table-responsive">
                            <table class="table" id="myTable">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col" style="font-size: 12px">Book Id</th>
                                    <th scope="col" style="font-size: 12px">Book name</th>
                                    <th scope="col" style="font-size: 12px">Request date</th>
                                    <th scope="col" style="font-size: 12px">Status</th>
                                    <th scope="col" style="font-size: 12px">Action</th>

                                </tr>
                                </thead>

                                <tbody>
                                @foreach($books as $book)

                                    <tr>
                                        <td>{{$book->book_id}}</td>
                                        <td>{{$book->book_name}}</td>
                                        <td>{{$book->created_at}}</td>
                                        <td>{{$book->status}}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <div class="modal" tabindex="-1" role="dialog" id="Request">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Request a Book</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">

                        <div class="form-group">
                            <div class="input-group">
                                <select name="book_name" class="form-control">
                                    <option selected>Select Book</option>
                                    <option >Select Book</option>
                                    <option >Select Book</option>
                                    <option>Select Book</option>
                                </select>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Request</button>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection