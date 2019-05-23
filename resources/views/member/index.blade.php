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
                                <li class="breadcrumb-item"><a href="{{url('/member-dashboard')}}">Member</a></li>
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
                        <div class="card-header bg-cyan text-white">

                        </div>
                        <div class="table-responsive">
                            <table class="table" id="myTable">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col" style="font-size: 12px">Book Id</th>
                                    <th scope="col" style="font-size: 12px">Book Name</th>
                                    <th scope="col" style="font-size: 12px">Author</th>
                                    <th scope="col" style="font-size: 12px">ISBN</th>

                                </tr>
                                </thead>

                                <tbody>
                                @foreach($books as $book)

                                    <tr>
                                        <td>{{$book->id}}</td>
                                        <td>{{$book->bookname}}</td>
                                        <td>{{$book->authorname}}</td>
                                        <td>{{$book->isbn}}</td>
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


    @include('layouts.footer')
@endsection