<?php

namespace App\Http\Controllers;

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
        $books = RequestBooks::where('user_id','=',Auth::guard('member')->user()->memberid)->get();

        return view('member.request',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestBook = new RequestBooks();

        $requestBook->user_id = Auth::guard('member')->user()->memberid;

        $requestBook->book_id = $request->bookid;

        $requestBook->book_name = $request->bookname;

        $requestBook->book_id = $request->bookid;

        $requestBook->save();

        return view();

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
        //
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

        $req = RequestBooks::findOrFail($id);

        $req->delete();

        return redirect();
    }
}
