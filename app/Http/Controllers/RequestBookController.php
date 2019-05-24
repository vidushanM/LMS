<?php

namespace App\Http\Controllers;

use App\books;
use App\IssueBook;
use App\RequestBooks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $issues = IssueBook::where('issuememberid','=',Auth::guard('member')->user()->memberid)->count();

        $books = books::where('status','=','available')->get();

        $req = RequestBooks::where('user_id','=',Auth::guard('member')->user()->memberid)->get();

        return view('member.request',compact('req','issues','books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $req = RequestBooks::all();

        return view('admin.request',compact('req'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->bookname,$request->book_id);
        $requestBook = new RequestBooks();

        $requestBook->user_id = Auth::guard('member')->user()->memberid;

        $requestBook->book_id = $request->book_id;

        $requestBook->book_name = $request->bookname;

        $requestBook->status = "pending";

        $requestBook->save();

        return redirect('request-book');

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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $req = RequestBooks::findOrFail($id);

        $req->status = "Available Now";

        $req->update();

        return redirect(route('request-book.create'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $req = RequestBooks::findOrFail($id);

        $req->delete();

        return redirect(route('member-dashboard.index'));
    }
}
