@extends('layouts.app')

@section('content')
    @include('layouts.header')
    @include('layouts.sideBar')

    <div class="bg-dark">

    <div class="row">
        <div class="col-md-12">
            <div class="card">

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
                <form method="post" action="{{action('bookController@update',$id)}}">

                    {{csrf_field()}}

                    <div class="card-body bg-dark text-white"">
                        <h4 class="card-title">Book Details</h4>
                        <div class="form-group row">
                            <label for="bookName" class="col-sm-3 text-right control-label col-form-label">Book Name</label>
                            <div class="col-sm-9">
                                {{--<input type="text" class="form-control" id="bookName" name="bookname" value="{{$books->bookname}}">--}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="isbn" class="col-sm-3 text-right control-label col-form-label">ISBN </label>
                            <div class="col-sm-9">
                                {{--<input type="text" class="form-control" id="isbn" name="isbn" value="{{$books->isbn}}">--}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="author" class="col-sm-3 text-right control-label col-form-label">Author</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="authorname" value="{{$books->isbn}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="barcode" class="col-sm-3 text-right control-label col-form-label">Barcode</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="barcode" value="{{$books-}}" readonly>
                            </div>
                        </div>


                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>

            </div>



        </div>

    </div>


</div>




</div>

    @include('layouts.footer')



@endsection