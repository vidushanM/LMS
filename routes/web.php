<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/member', function () {
    return view('member.dashboard');
});

Route::resource('/request-book','RequestBookController');

Route::resource('/available-book','AvailableBookController');

//Authentication Routes
Auth::routes();

// Finance Manager Routes

Route::get('/FMadmin/dashboard', 'financeDashboardController@create');

Route::get('/FMadmin/pendingpayments', function (){
    return view('Admin.Finance_Management.pendingpayments');
});

Route::get('/FMadmin/onlinePayment', function (){
    return view('Admin.Finance_Management.onlinePayment');
});

Route::get('/FMadmin/addExpences', function (){
    return view('Admin.Finance_Management.addExpences');
});

Route::get('/FMadmin/expenceReport', function (){
    return view('Admin.Finance_Management.expenceReport');
});

Route::get('/FMadmin/profit', function (){
    return view('Admin.Finance_Management.profit');
});

Route::get('/FMadmin/approvedPayment', function (){
    return view('Admin.Finance_Management.approvedPayment');
});
Route::get('/Expence/searchV', function (){
    $Results=null;
    $Expences=null;
    return view('Admin.Finance_Management.expenceReport',compact('Results','Expences'));
});

Route::get('/Expence/search','ExpenceController@search');

Route::get('/FMadmin/paymentOverview', 'pendingApprovalController@showOverview');

Route::resource('payment','PaymentController');

Route::resource('pendingApproval','pendingApprovalController');

Route::get('/Expence/Report','ExpenceController@downloadPDF');

Route::get('/approved/Report','ApprovedPaymentController@downloadPDF');

Route::get('/final/Report','financeDashboardController@finalReport');

Route::resource('Expence','ExpenceController');

Route::resource('pending_approvals','ApprovedPaymentController');

//Route::resource('pending_approvals','DisapprovedPaymentController');

Route::get('approve', 'pendingApprovalController@approve');

Route::get('disapprove', 'pendingApprovalController@disapprove');

Route::resource('disapproved_payment','DisapprovedPaymentController');

Route::post('/searchexpences', function (){
    $q = Input::get('$q');
    dd($q);
});


//HR Manager Routes

Route::get('/HRadmin/dashboard', function (){
    return view('Admin.HR_Management.dashboard') ;
});

Route::get('/HRadmin/academicStaff', function (){
    return view('Admin.HR_Management.academic_staff') ;
});

Route::get('/HRadmin/nonAcademicStaff', function (){
    return view('Admin.HR_Management.non_academic_staff') ;
});

Route::get('/HRadmin/payroll', function (){
    return view('Admin.HR_Management.payroll') ;
});

Route::resource('recruits','recruitController');

Route::resource('nonacademic','nonacademicController');

Route::get('/search_recruits','recruitController@search');

Route::get('/searchNon','nonacademicController@search');



Route::resource('salary','salaryController');

Route::post('salary','salaryController@store');

Route::get('/downloadPDF/{sid}','salaryController@downloadPDF');





//Route::get('/abc','recruitController@idGenarator');



//Exam Centre Manager Routes

Route::get('/ECadmin/dashboard', function (){
    return view('Admin.Exam_Centre_Management.dashboard') ;
});

Route::get('/ECadmin/publishResults', function (){
    return view('Admin.Exam_Centre_Management.publishResults') ;
});

Route::get('/ECadmin/questionBank', function (){
    return view('Admin.Exam_Centre_Management.questionBank') ;
});

//new routes

Route::resource('results','ResultController');

Route::get('/ECadmin/viewResults','ResultController@index') ;

//Route::get('/ECadmin/publishResults','ResultController@index1') ;

Route::resource('qBanks','QBankController');

Route::get('/ECadmin/searchResults','ResultController@create1');

Route::get('/results_search','ResultController@search');

Route::get('/QBank','QBankController@searchQBank');

Route::get('/ECadmin/resultsHome', function (){
    return view('Admin.Exam_Centre_Management.results') ;
});

Route::get('/ECadmin/studentsResults', function (){
    return view('Admin.Exam_Centre_Management.studentsResults') ;
});

Route::get('/searchBySId','ResultController@searchBySId');

Route::get('/pdf','ResultController@downloadPdf');

Route::get('/ECadmin/dashboard','QBankController@dashboardController');

//Route::get('/chartView','ResultController@chartIndex');
//
//Route::get('/chart','ResultController@chart');



//Academic Manager Routes

//Route::get('/Aadmin/dashboard', function (){
//    return view('Admin.Academic_Management.dashboard') ;
//});



Route::get('/Aadmin/subjects', function (){
    return view('Admin.Academic_Management.manage_subject') ;
});

Route::get('/Aadmin/classes', function (){
    return view('Admin.Academic_Management.manage_class') ;
});

Route::get('/Aadmin/sections', function (){
    return view('Admin.Academic_Management.manage_section') ;
});


Route::get('/Aadmin/searchV', function (){
    $Results=null;
    return view('Admin.Academic_Management.search',compact('Results')) ;
});

Route::get('Aadmin/search', 'SearchController@search');

Route::get('/Aadmin/searchAllV', function (){
    $ClassResults=null;
    $ClassTResults=null;
    $SubjectResults=null;
    $SubjectTResults=null;
    $SectionResults=null;
    $SectionHResults=null;
    return view('Admin.Academic_Management.searchAll',compact('ClassResults','ClassTResults','SubjectResults','SubjectTResults','SectionResults','SectionHResults')) ;
});

Route::get('Aadmin/searchAll', 'SearchController@searchAll');

Route::get('/Aadmin/searchTeacherS', function (){
    $Results=null;
    return view('Admin.Academic_Management.searchTeachers',compact('Results')) ;
});

Route::get('Aadmin/searchTeacherS', 'SearchController@searchTeacherS');


Route::get('/Aadmin/invoice', function (){
    return view('Admin.Academic_Management.invoice') ;
});

Route::get('/Aadmin/invoiceD', function (){
    return view('Admin.Academic_Management.invoice') ;
});

Route::get('/ID', 'SubjectSController@SubjectIDGenerator');

Route::get('/Aadmin/pdf','ReportController@pdfS');

Route::get('/Aadmin/pdf/index','ReportController@index');

Route::get('/Aadmin/pdf/download','ReportController@download');

//Route::get('/id','SubjectSController@SubjectIDGenerator');
Route::resource('Aadmin/ClassS','ClassController');

Route::resource('Aadmin/ClassTeacherS','ClassTeacherSController');

Route::resource('Aadmin/SubjectS','SubjectSController');

Route::resource('Aadmin/SubjectTeacherS','SubjectTeacherSController');

Route::resource('Aadmin/SectionS','SectionSController');

Route::resource('Aadmin/SectionalHeadS','SectionalHeadSController');

Route::resource('Aadmin/Dashboard','DashboardController');



//Route::get('Aadmin/dashboard/search',SearchController@search);

Route::get('Aadmin/dashboard/events', 'EventController@calendar');




//Non Academic Manager Routes

Route::get('/NAadmin/dashboard', function (){
    return view('Admin.Non_Academic_Management.dashboard') ;
});

Route::get('/sports_categories', function (){
    return view('Admin.Non_Academic_Management.manage_sports') ;
});

Route::get('/NAadmin/manage-sport-students', function (){
    return view('Admin.Non_Academic_Management.manage_sport_students') ;
});

Route::get('/NAadmin/manage-coaches', function (){
    return view('Admin.Non_Academic_Management.manage_coaches') ;
});

Route::get('/NAadmin/manage-teacher-in-charge', function (){
    return view('Admin.Non_Academic_Management.manage_teachers_in_charge') ;
});

Route::get('/NAadmin/manage-achievements', function (){
    return view('Admin.Non_Academic_Management.manage_achivements') ;
});
Route::get('/NAadmin/dashboard', function (){
    return view('Admin.Non_Academic_Management.dashboard') ;
});

//Route::get('/search_student', function () {
//    return view('Admin.Non_Academic_Management.search_sports');
//});

Route::get('/Frontend/manage-events', function (){
    return view('Frontend.events') ;
});
Route::get('/NAadmin/addEvents', function (){
    return view('Admin.Non_Academic_Management.addEvents') ;
});
Route::get('id','coachController@coachIDGenerator');
Route::get('viewevents','non_academic_eventController@showeventsview');

Route::resource('non_academic_events','non_academic_eventController');

Route::resource('s_students','s_studentController');

Route::resource('sport_categories','sports_categoriesController');

Route::resource('coaches','coachController');

Route::resource('t_incharges','t_inchargeController');

Route::resource('achivements','achivementController');

Route::resource('room_allocations','allocationController');

Route::get('/search_sport_student', function (){
    return view('Admin.Non_Academic_Management.search_student') ;
});
Route::post('search_student', 'non_academic_reportController@sport_students_report');

//Transport Manager Routes

Route::get('/Tadmin/dashboard', function (){
    return view('Admin.Transport_Management.dashboard') ;
});
//
//Route::get('/Tadmin/manage-vehicles', function (){
//    return view('Admin.Transport_Management.manage_vehicle') ;
//});
//
//Route::get('/Tadmin/manage-routes', function (){
//    return view('Admin.Transport_Management.manage_routes') ;
//});
//
//Route::get('/Tadmin/student-report', function (){
//    return view('Admin.Transport_Management.student_report') ;
//});
//
//Route::get('/Tadmin/staff-report', function (){
//    return view('Admin.Transport_Management.staff_report') ;
//});

// Authentication Routes
Route::get('/login_user','customAuthController@showLoginForm')->name('showLoginForm');
Route::post('/login_user','customAuthController@login')->name('login');

Route::get('/register_admin','customAuthController@showRegisterForm')->name('showRegisterForm');
Route::post('/register_admin','customAuthController@register')->name('register');

Route::post('/logout_user','customAuthController@logout')->name('logout');

Route::get('/change_password','MemberController@showChangePasswordForm')->name('showChangePasswordForm');
Route::post('/change_password','MemberController@changePassword')->name('changePassword');


Route::get('/access_denied',function (){
    return view('auth.access_denied');
});

// Administrator Routes
Route::match(['get','post'],'/admin/manage-students', 'StudentController@addStudent');

Route::get('/admin/dashboard', 'AdminController@showAdminDashboard');

Route::get('search_student', 'StudentController@search')->name('search');
Route::get('search','StudentController@showSearchView')->name('showSearchView');
Route::get('new-admissions','TemporaryStudentsController@showNewAdmissions')->name('showNewAdmissions');

// Teacher Routes
Route::resource('teachers','TeacherController');

Route::get('/add', 'TeacherController@add');

// students routes
Route::get('/student/dashboard', 'StudentController@showStudentDashboard');

Route::get('/id', 'StudentController@student_id_generator');

Route::resource('students','StudentController');

Route::resource('temporary_students','TemporaryStudentsController');

// parent routes
Route::resource('parent_guardians','parentController');

Route::get('/parent/dashboard', 'parentController@showParentDashboard');

Route::get('/pr', 'parentController@index');

// front end Routes
Route::get('/events',function(){
    return view('Frontend.events');
});

Route::get('/join-us',function(){
    return view('Frontend.joinUs');
});

Route::get('/join-us/student',function(){
    return view('Frontend.JoinUsStudents');
});

Route::get('/home',function(){
    return view('Frontend.index');
});

Route::get('/download',function(){
    return view('Frontend.ApplicationFormDownload');
});

Route::get('/download-application','pdfController@stdApplication');

Route::get('/addDemoData','TemporaryStudentsController@Demo_store');

Route::get('/printID/{id}','pdfController@stdIDCard');

// Email routes

Route::get('/sendmail',function (){
   $data = [
       'title'=> 'hi guys',
       'content'=> 'Hello 1 Email'
   ];

   Mail::send('Frontend.email',$data,function ($message){
       $message -> to('pasinduvimansa96@gmail.com','Pasindu')->subject('Hello 1st Email');
   });
});

// Firebase Routes
Route::get('/firebase-apk', 'testFirebase@index');


//Library Manager Routes

use Illuminate\Support\Facades\Input;
use App\books;
use App\Member;

//Route::get('/library/dashboard', function (){
//    return view('Admin.Library_Management.dashboard') ;
//});

Route::get('/Library/viewAllMembers', function (){
    return view('admin.viewAllMembers') ;
});

Route::get('/LibraryAdmin/addBookForm', function (){
    return view('admin.addBookForm') ;
});



Route::get('/Library/addNewMember', function (){
    return view('admin.addNewMemberForm') ;
});
Route::resource('books','bookController');


Route::resource('members', 'MemberController');
Route::get('memberslist', 'MemberController@getMembers');

Route::get('/Library/returnBook', function (){
    return view('admin.returnBook');
});

Route::resource('issue_books','IssueBookController');

//Route::get('return/{id}', 'IssueBookController@return');
Route::post('return', 'IssueBookController@return');

Route::get('/Library/viewReturn', function () {
    return view('admin.viewAllReturnBooks');
});

Route::post('confirmReturn', 'IssueBookController@addReturnTable');

Route::post('downloadPDF/{id}', 'bookController@downloadPDF');
Route::post('downloadmemberPDF/{id}', 'MemberController@downloadPDF');

Route::get('/library/downloadOverallReport', 'libraryDashboardController@downloadOverallReport');

Route::post('/searchBooks', function (){
    $q = Input::get('q');
    if($q != '') {
        //dd($q);
        $searchBookResult = books::where('bookname', 'LIKE', $q . '%')->orWhere('authorname', 'LIKE', $q . '%')->get();

        // dd($searchBookResult);
        if (count($searchBookResult) > 0)
            return view('admin.searchBookResults')->withDetails($searchBookResult)->withQuery($q);
        //return view('Admin.Library_Management.searchBookResults')->with('details',$searchBookResult);
        else return view('admin.searchBookResults')->withMessage("No details Found");
    }
    // return('dsds');
    else return view('admin.searchBookResults')->withMessage("No details Found");
});

Route::post('/searchMembers', function (){
    $q = Input::get('q');
    //dd($q);
    if($q != '') {
        $searchMemberResult = Member::where('firstname', 'LIKE', $q . '%')->orWhere('lastname', 'LIKE', $q . '%')->orWhere('memberid', 'LIKE', $q . '%')->get();

        // dd($searchBookResult);
        if (count($searchMemberResult) > 0)
            return view('admin.searchMemberResults')->withDetails($searchMemberResult)->withQuery($q);
        //return view('Admin.Library_Management.searchBookResults')->with('details',$searchMemberResult);
        else return view('admin.searchMemberResults')->withMessage("No details Found");
    }
    else return view('admin.searchMemberResults')->withMessage("No details Found");
});
Route::resource('return_books','returnController');

//Route::get('/Library/librarySettings', function (){
//    return view('Admin.Library_Management.settingsLibrary') ;
//});
Route::resource('library_settings','librarySettingsController');

Route::get('/totalbooks','libraryDashboardController@countofbooks');
Route::get('/totalmembers','libraryDashboardController@countofmembers');
//Route::get('librarydash')

//Route::get('/Library/count', function () {
//    return view('Admin.Library_Management.viewAllReturnBooks');
//});
Route::get('/library/dashboard','libraryDashboardController@create');
Route::get('/dashboard','libraryDashboardController@create');


Route::get('/test-firebase', function (){
    return view('Admin.User_Management.Admin.test') ;
});


// Hostel Manger Routes

Route::get('/Hadmin/dashboard', function (){
    return view('Admin.Hostel_Management.dashboard') ;
});

Route::get('/Hadmin/Hostel-Management', function (){
    return view('Admin.Hostel_Management.Hostel_Management') ;
});

Route::get('/Hadmin/Room-Management', function (){
    return view('Admin.Hostel_Management.Room_Management') ;
});

Route::get('/Hadmin/Room-Allocation', function (){
    return view('Admin.Hostel_Management.Room_Allocation') ;
});

Route::get('/Tadmin/Vehicle-Registration', function (){
    return view('Admin.Transport_Management.Vehicle_Registration') ;
});

Route::get('/Tadmin/Route', function (){
    return view('Admin.Transport_Management.Route') ;

});

Route::get('/Hadmin/Update-Room-Management', function (){
    return view('Admin.Hostel_Management.updateRoom') ;

});

Route::resource('hostelRooms','HostelRoomController');

Route::resource('room_allocations','allocationController');

Route::resource('hostels','hostelController');

Route::resource('routes','RouteController');

Route::resource('vehicles','vehicleController');

Route::resource('student_reports','Student_ReportController');

Route::resource('staff_reports','Staff_ReportController');


// updated book routes

Route::get('/admin/booksInShelf','bookController@viewBooksInShelf');