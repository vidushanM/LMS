<div class="modal" id="addNewMemberModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header bg-cyan">

                <h5 class="card-title m-b-0">Add New Member</h5>

            </div>
            <div class="modal-body bg-dark">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">


                            <form class="form-horizontal" method="post" action="{{url('members')}}">

                                {{csrf_field()}}

                                <div class="card-body bg-dark">
                                    <h4 class="card-title">Member Details</h4>
                                    <div class="form-group row">
                                        <label for="memberName" class="col-sm-3 text-right control-label col-form-label">Member Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="memberName" name="membername" placeholder="Member Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="isbn" class="col-sm-3 text-right control-label col-form-label">ISBN </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN Here">
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
                                            <input type="text" class="form-control" id="barcode" name="barcode" placeholder="Barcode Here">
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