<?php

namespace App\Http\Controllers;

use App\books;
use App\IssueBook;
use App\LibrarySettings;
use App\Member;
use App\ReturnBook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use function MongoDB\BSON\toJSON;

class IssueBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public $IssueBooks = null;
    // public $currentTime = null;
     public $fine = null;


    public function index()
    {
        $issue_books = IssueBook::all()->toArray();
        return view('admin.issueBookTable',compact('issue_books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.issueBook');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $issueBook = $this->validate(request(), [
            'bookbarcode' => 'required|numeric',
            'issuememberid' => 'required',

        ]);


    if(books::where('barcode','=',$request->bookbarcode)->exists() and Member::where('memberid', $request->issuememberid)->exists()) {

        if(IssueBook::where('issuememberid', $request->issuememberid)->count() >= 3) {
            return back()->with('success', 'Member has reached the maximum number of books');
        }

        $issue_book = books::where('barcode',$request->bookbarcode)->get()->first();

        $inshelf = $issue_book['inShelf'];
        $issue_book['inShelf'] = $inshelf - 1;

        if($issue_book['inShelf'] < 0) {
            return back()->with('success', 'Book is not available');
        }

        if($issue_book->save())  {
            IssueBook::create($issueBook);
        }

        return back()->with('success', 'Book has been issued');
    }
    else{
        return back()->with('success', 'Book Barcode or Member ID does not matched');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    public function return(Request $request)
    {

        $id = $this->validate(request(), [
            'returnbookbarcode' => 'required|numeric',


        ]);

        $id = $request->get('returnbookbarcode');
//        if($id != )

        //return $id;
        $current_time = Carbon::now()->toDateTimeString();
        $this->IssueBooks = IssueBook::find($id);

        if ($this->IssueBooks == null) {
            return back() ->with('success','No such book found');
        }
//
//        if ($this->IssueBooks == null) {
//            return back() ->with('success','No such book found');
//        }
        $IssueTime = $this->IssueBooks-> created_at;
        $timestamp = strtotime($IssueTime);
        $current_time = strtotime($current_time);
        //$dataForFine = LibrarySettings::where('memberid', $memberId)->first();
       // return $current_time;

      //  return $current_time-$timestamp;

        $library_settings = LibrarySettings::find(1);
        $fine_setting = $library_settings->defaultfine;
        $no_of_days_setting = $library_settings->noofdays;
        $no_of_seconds = $no_of_days_setting * 24 * 3600;

        if($current_time-$timestamp < $no_of_seconds){
            $fine = 0;
        }
        else{
            $fine = $fine_setting;
        }

        $issueMemberId = $this->IssueBooks-> issuememberid;
        $issueMemberIDPrfix = substr($issueMemberId,0,3);
        $memberType = ($issueMemberIDPrfix == "STD") ? "student" : "staff";
        if ($memberType == "staff") {
            $fine = 0;
        }
        //dd($memberType);

        $IssueBooks = $this->IssueBooks;
        //return $current_time;
        return view('admin.returnBookConfirmation',compact('IssueBooks','fine','id'));
      //  return $IssueTime;
       // return $fine;



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /**
     * get member list by first name
     * @param Request $request
     * @return null
     */
    public function addReturnTable(Request $request){
        //echo "SDggsgdsgs";

        $IssueBookID = $request->get('issueBooks');
        $Book = IssueBook::find($IssueBookID);
        $confirmReturnBook = $Book;
        $fine = $request->get('fine');
        $bookBarcode = $request->get('bookbarcode');
       // RetunBook returnBook = new ReturnBook();
        //dd($confirmReturnBook);
        //dd($fine);
        //$confirmReturnBook = IssueBook::all()->toArray();
       // return $confirmReturnBook;
       // return view('Admin.Library_Management.viewAllReturnBooks',compact('confirmReturnBook'));
//        ReturnBook::create($confirmReturnBook);
//
//        return back() ->with('success','Book has been returned');

        $memberId = $confirmReturnBook -> issuememberid;
        //$overallFine =
        //dd($confirmReturnBook);
        //dd($memberId);
       // return ($memberId);
        //$dataFromMembers = Member::find($memberId);
        $dataFromMembers = Member::where('memberid', $memberId)->first();
       // dd($dataFromMembers);
       // return $dataFromMembers;
        $returnCurrentTime = Carbon::now()->toDateTimeString();
       // $returnCurrentTime = strtotime($returnCurrentTime);
       // dd($returnCurrentTime);

        $return_books = new ReturnBook();
        $return_books->bookbarcode = $confirmReturnBook->bookbarcode;
        $return_books->issuememberid = $confirmReturnBook->issuememberid;
        $return_books->fine = $fine;
        //$return_books->returndate = $returnCurrentTime;
        $return_books->save();
        //dd($return_books);

        $booksInShelf = books::where('barcode',$bookBarcode)->get()->first();

        $booksInShelf['inShelf'] = $booksInShelf['inShelf'] + 1;

        $booksInShelf->save();

        $books = IssueBook::find($IssueBookID);
        $books->delete();
        return redirect('Library/returnBook')->with('success','Book has been  returned');

    }


}
