<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LibraryMgrController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showAdminDashboard(){
        if(Auth::user()->role == 'LibraryMgr')
            return view('admin.dashboard');
        else
            return redirect('/access_denied');
    }
}
