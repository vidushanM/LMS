<?php

namespace App\Http\Controllers;

use App\LibrarySettings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class librarySettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settingsLibrary');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $librarySetting = $this->validate(request(), [
//            'noofdays' => 'required|numeric',
//            'defaultfine' => 'required|numeric'
//        ]);
//
//        LibrarySettings::create($librarySetting);
//
//        return back()->with('success', 'New settings updated');;
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
        $librarySetting = LibrarySettings::find($id);
        return view('admin.settingsLibrary',compact('librarySetting','id'));
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

        $librarysetting = LibrarySettings::find($id);

        $this->validate(request(), [
            'noofdays' => 'required',
            'defaultfine' => 'required|numeric'
        ]);

        $librarysetting->noofdays = $request->get('noofdays');
        $librarysetting->defaultfine = $request->get('defaultfine');
        $librarysetting->save();

        return redirect('library_settings/1/edit')->with('success','New settings updated');

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
}
