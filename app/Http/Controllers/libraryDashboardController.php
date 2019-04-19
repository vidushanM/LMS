<?php

namespace App\Http\Controllers;

use App\books;
use App\IssueBook;
use App\LibrarySettings;
use App\Member;
use App\ReturnBook;
use Barryvdh\DomPDF\Facade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class libraryDashboardController extends Controller
{

    public function create(){

        $bookcount = $this->countofbooks();
        $membercount = $this->countofmembers();
        $issuecount = $this ->countofissuebooks();
        $returnbookcount = $this->countreturnbooks();
        $finrcountdays = $this->nofdays();
        $totalfine = $this->calculatefine();
        $finefordays = $this->finefordays();

       // dd($bookcount);
        return view('admin.dashboard',compact('bookcount','membercount','issuecount','returnbookcount','finrcountdays','totalfine','finefordays')) ;
    }

    public function countofbooks(){
        $noofbooks = books::all();
        $bookcount = 0;

        foreach ($noofbooks as $noofbook){
            $bookcount++;
        }
        //$noofbook++;
        return $bookcount;
    }

    public function countofmembers(){
        $noofmembers = Member::all();
        $membercount = 0;

        foreach ($noofmembers as $noofmember){

            $membercount++;
        }

        return $membercount;
    }
    public function countofissuebooks(){
        $noofissuebooks = IssueBook::all();
        $issuebookcount = 0;

        foreach ($noofissuebooks as $noofissuebook){

            $issuebookcount++;
        }

        return $issuebookcount;
    }
    public function countreturnbooks(){
        $noofreturnbooks = ReturnBook::all();
        $returnbookcount = 0;

        foreach ($noofreturnbooks as $noofreturnbook){

            $returnbookcount++;
        }
        return $returnbookcount;
    }
    public function nofdays(){
        //$noofdays = new LibrarySettings();
        $noofdays = LibrarySettings::all();
        $days = null;
        foreach ($noofdays as $noofday){
            $days = $noofday['noofdays'];
        }
        //$noofdays = $noofdays->noofdays;
        return $days;

    }
    public function finefordays(){
    //$noofdays = new LibrarySettings();
    $finecounts = LibrarySettings::all();
    $counts = null;
    foreach ($finecounts as $finecount){
        $counts = $finecount['defaultfine'];
    }
    //$noofdays = $noofdays->noofdays;
    return $counts;

}

    public function calculatefine(){
        $price = ReturnBook::all()->sum('fine');
        return $price;
    }

    public function downloadOverallReport() {
        $bookcount = $this->countofbooks();
        $membercount = $this->countofmembers();
        $issuecount = $this ->countofissuebooks();
        $returnbookcount = $this->countreturnbooks();
        $finrcountdays = $this->nofdays();
        $totalfine = $this->calculatefine();
        $pdf = Facade::loadView('admin.libraryOverallReportPDF', compact('bookcount','membercount','issuecount','returnbookcount','finrcountdays','totalfine'));
        return $pdf->download('Library-Report.pdf');
        //return redirect('books')->with('success','Book has been  deleted');
    }
}
