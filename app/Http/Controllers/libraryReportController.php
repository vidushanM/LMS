<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\PDF;


class libraryReportController extends Controller
{
    public function librarybookreport(){
        $pdf = PDF::loadview('admin.libraryReport');
        return $pdf->download('libraryReport.pdf');
    }
}
