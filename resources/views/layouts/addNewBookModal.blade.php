<?php
use App\books;
//use PDF;
use Barryvdh\DomPDF\Facade;

$all_books = books::all()->toArray();
$last_book = end($all_books);

//dd($last_book["barcode"] + 3);
?>

<div class="modal" id="addNewBookModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header bg-cyan">

                <h5 class="card-title m-b-0">Add New Book</h5>

            </div>
            <div class="modal-body bg-dark">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">


                            <form class="form-horizontal" method="post" action="{{url('books')}}">

                                {{csrf_field()}}

                                <div class="card-body bg-dark">
                                    <h4 class="card-title">Book Details</h4>
                                    <div class="form-group row">
                                        <label for="bookName" class="col-sm-3 text-right control-label col-form-label">Book Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="bookName" name="bookname" placeholder="Book Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="isbn" class="col-sm-3 text-right control-label col-form-label">Category </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Category Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="author" class="col-sm-3 text-right control-label col-form-label">Author</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="author" name="authorname" placeholder="Author Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="barcode" class="col-sm-3 text-right control-label col-form-label">Barcode</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="<?php echo($last_book["barcode"]+1); ?>" class="form-control" id="barcode" name="barcode" placeholder="Barcode Here" readonly>
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


            </div>




        </div>

    </div>
</div>
</div>