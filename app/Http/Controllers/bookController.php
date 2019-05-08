<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\books;
use Barryvdh\DomPDF\Facade;



class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boooks = books::all()->toArray();
        $boooks = array_reverse($boooks, true);
        return view('admin.viewAllBooksTable', compact('boooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('layouts.addNewBookModal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $newAddBook =$this->validate(request(),[
            'bookname' => 'required',
            'isbn' => 'required',
            'authorname' => 'required',
            'barcode' => 'required',
            'totCopies' => 'required'
        ]);

        $status = false;
        //return redirect('books')->with('success','New book is added');
        $boooks = books::all();

        foreach ($boooks as $book){
            if($book['isbn'] == $request->get('isbn')){
                $init_copies = $book['totCopies'];
                $book['totCopies'] = $request->get('totCopies') + $init_copies;
                $book->save();
                $status = true;
            }

        }

        if($status == false){
            books::create($newAddBook);
        }

        $boooks = books::all()->toArray();
        $boooks = array_reverse($boooks, true);



        return view('admin.viewBookInShelf',compact('boooks'));
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewBooksInShelf()
    {
        $boooks = books::all()->toArray();
        $boooks = array_reverse($boooks, true);

        return view('admin.viewBookInShelf',compact('boooks'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books = books::find($id);
        return view('layouts.editBookModal',compact('books','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param string $id
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request,$id)
    {
//        $books = books::find($id);
//
//        $this->validate(request(),[
//            'bookname' => 'required',
//            'isbn' => 'required',
//            'authorname' => 'required',
//            'barcode' => 'required'
//        ]);
//        $books->bookname = $request->get('bookname');
//        $books->isbn = $request->get('isbn');
//        $books->authorname = $request->get('authorname');
//        $books->barcode = $request->get('barcode');
//        $books->save();

        $books = books::find($request->get('bookID'));
        $this->validate(request(),[
            'bookname' => 'required',
            'isbn' => 'required',
            'authorname' => 'required',
            'barcode' => 'required'
        ]);
        $books->bookname = $request->get('bookname');
        $books->isbn = $request->get('isbn');
        $books->authorname = $request->get('authorname');
        $books->barcode = $request->get('barcode');
        $books->save();
        return redirect('books')->with('success','Book Name :'.$books->bookname.' Book has been updated');



    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $books = books::find($id);
        $books->delete();
        return redirect('books')->with('success','Book has been  deleted');
    }

    public function downloadPDF(Request $request, $id)
    {

        $newAddBook = books::find($id);
        $barcode = $newAddBook->barcode;
        $pdf = Facade::loadView('admin.addBookPDF', compact('newAddBook'));
        return $pdf->download('barcode-'.$barcode.'.pdf');
        //return redirect('books')->with('success','Book has been  deleted');
    }


}
